<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system French Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2020/09/18 10:43:34
|
|        $Author: Olivier Troccaz $
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Aide actualit&eacute;s";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<strong>G&eacute;n&eacute;ral</strong><br />
Le corps du texte sera affich&eacute; sur la page principale ; il sera possible de le lire en cliquant sur un lien &apos;En savoir plus&apos;.
<br />
<br />
<b> Afficher le titre seulement</b>
<br />
Activez cette option pour afficher le titre de la nouvelle uniquement en premi&egrave;re page, avec un lien cliquable vers l&apos;article complet.
<br /><br />
<b>Activation</b>
<br />
Si vous fixez une date de d&eacute;but et/ou de fin, votre information ne sera affich&eacute;e qu&apos;entre ces dates.
";
	break;
  case 'cat' :
	$text = "Vous pouvez s&eacute;parer vos informations en diff&eacute;rentes cat&eacute;gories et permettre aux visiteurs de n&apos;afficher que les informations de ces cat&eacute;gories. <br /><br /> T&eacute;l&eacute;chargez vos images d&apos;ic&ocirc;nes d&apos;actualit&eacute; dans ".e_THEME."-votre-th&egrave;me/images/ ou th&egrave;mes/partag&eacute;s/nouvelles-ic&ocirc;nes/.";
    break;
  case 'pref' :
    $text = "D&eacute;finir diverses options li&eacute;es &agrave; l&apos;actualit&eacute;<br /><br />
	<strong>Colonnes de la cat&eacute;gorie des actualit&eacute;s</strong><br />
	N&eacute;cessite un soutien th&eacute;matique pour &ecirc;tre s&eacute;lectionnable<br /><br />
	<strong>Nouvelles publications &agrave; afficher par page</strong><br />
	Pour la page principale des actualit&eacute;s ; affiche les articles dans un format non &eacute;tendu.<br /><br />
	<strong>Actualit&eacute;s &agrave; afficher dans les archives</strong><br />
	D&eacute;finit le nombre d&apos;articles qui sont affich&eacute;s comme titre uniquement sur chaque page d&apos;information (inclus dans le total pr&eacute;c&eacute;dent).
	<strong> Activer l&apos;&eacute;diteur WYSIWYG</strong><br />
	Exige que les utilisateurs qui peuvent soumettre des actualit&eacute;s puissent &eacute;galement poster du HTML.
	";
	break;
  case 'list' :
  default :
	$text = "Liste de toutes les actualit&eacute;s. Pour modifier ou supprimer, cliquez sur l&apos;une des ic&ocirc;nes de la colonne &apos;options&apos;. Pour visualiser l&apos;article, cliquez sur
		sur le titre.";
}
$ns -> tablerender($caption, $text);
