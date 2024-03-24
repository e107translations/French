<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system French Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2020/09/17 10:43:34
|
|        $Author: Olivier Troccaz $
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

if (!getperms("2")) 
{
	header("location:".e_BASE."index.php");
	exit;
}

$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
        for($mc=1;$mc<=5;$mc++)
				{
            $sql -> db_Select('menus','*', "menu_location='".$mc."' ORDER BY menu_order");
            $count = 1;
            $sql2 = new db;
            while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch())
						{
                $sql2 -> db_Update('menus', "menu_order='$count' WHERE menu_id='$menu_id' ");
                $count++;
            }
            $text = "<strong>Menus r&eacute;initialis&eacute;s en base de donn&eacute;es</strong><br /><br />";
        }
}
else
{
    unset($text);
}

$text .= "D&apos;ici vous pouvez g&eacute;rer o&ugrave; et dans quel ordre vos menus apparaissent.<br />
Utiliser les listes d&eacute;roulantes pour d&eacute;placer vers le haut ou le bas jusqu&apos;&agrave; ce que vous soyez satisfait de leur positionnement.<br /><br />
Si vous trouvez que les menus ne sont pas mis &agrave; jour proprement, cliquez sur le bouton rafra&icirc;chir.<br />

[html]
<form method=&apos;post&apos; id=&apos;menurefresh&apos; action=&apos;".$_SERVER['PHP_SELF']."&apos;>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('fa-search')." indique que les droits de lisibilit&eacute; des menus ont &eacute;t&eacute; modifi&eacute;s.
[/html]
";

$text = $tp->toHTML($text, true);
$ns->tablerender("Aide du gestionnaire de menu", $text);
