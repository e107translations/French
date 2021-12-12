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

$caption = "Aide classe utilisateur";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}

switch ($action)
{
	case 'initial' :
			$text = "D&eacute;finissez les classes auxquelles un nouveau membre du site est initialement affect&eacute;. 
			Si vous avez activ&eacute; la v&eacute;rification, cette affectation peut avoir lieu soit lors de l&apos;inscription de l&apos;utilisateur, soit lors de la v&eacute;rification de l&apos;utilisateur. <br /><br />
			Et n&apos;oubliez pas que si vous utilisez des classes d&apos;utilisateurs hi&eacute;rarchiques, un utilisateur est automatiquement membre de toutes les classes &apos;au-dessus&apos; de chaque classe s&eacute;lectionn&eacute;e dans l&apos;arbre.";
	break;
	case 'options' :
			$text = "Les options de configuration vous permettent de cr&eacute;er et de supprimer la hi&eacute;rarchie de classes par d&eacute;faut. Vous pouvez voir l&apos;effet en regardant l&apos;arborescence des utilisateurs.<br />
			Cela ne d&eacute;truira pas vos autres informations de classe, et vous pourrez modifier ou supprimer la hi&eacute;rarchie plus tard.
			Vous ne devriez avoir &agrave; reconstruire la hi&eacute;rarchie de classe qu&apos;en cas de corruption de la base de donn&eacute;es.";
	break;
	case 'membs' :
			$text = "Maintenant sur la page d&apos;administration des utilisateurs.";
	break;
	case 'debug' :
			$text = "Pour les utilisateurs avanc&eacute;s uniquement - montre la hi&eacute;rarchie des classes, plus les classes attribu&eacute;es et les classes auxquelles les 20 premiers membres du site ont acc&egrave;s.<br />
			Le num&eacute;ro qui figure devant le nom de la classe est son identifiant unique (num&eacute;ro de r&eacute;f&eacute;rence). La classe &apos;Tout le monde&apos; a un ID de 0 (z&eacute;ro). e107 utilise ces ID pour se r&eacute;f&eacute;rer aux classes.<br />
			Apr&egrave;s le nom de la classe se trouve la visibilit&eacute; et la possibilit&eacute; d&apos;&eacute;dition de la classe - [vis:253, edit : 27] par exemple. Cela signifie que la classe ne sera visible dans la plupart des s&eacute;lecteurs que si l&apos;utilisateur actuel est membre de la classe 253, 
			et l&apos;utilisateur ne peut modifier son appartenance &agrave; une classe que s&apos;il est membre de la classe 27.<br />
			Enfin, apr&egrave;s le &apos;=&apos;, on trouve une liste de toutes les classes, soit au-dessus soit au-dessous de chaque classe de l&apos;arbre, ainsi que l&apos;ID de cette classe. Ainsi, un utilisateur qui est membre d&apos;une classe particuli&egrave;re sera membre de toutes les classes de cette liste.<br /><br />
			Pour aider &agrave; la compr&eacute;hension, l&apos;appartenance &agrave; une classe des 20 premiers membres est indiqu&eacute;e. La premi&egrave;re entr&eacute;e sur chaque ligne indique les classes dont l&apos;utilisateur est membre. La deuxi&egrave;me entr&eacute;e &eacute;num&egrave;re toutes les classes dont l&apos;utilisateur est membre une fois que l&apos;h&eacute;ritage est effectif. La troisi&egrave;me entr&eacute;e indique les appartenances de classe qu&apos;il peut modifier.";
	break;
	case 'test' :
	case 'special' :
			$text = "Ne pas utiliser !!! Seulement pour les d&eacute;veloppeurs !!!
			";
	break;
	case 'edit' :
	case 'config' :
	default :
			$text = "Vous pouvez cr&eacute;er des classes, ou modifier des classes existantes &agrave; partir de cette page.<br />
         Ceci est utile pour limiter les utilisateurs &agrave; certaines parties de votre site. Par exemple, vous pouvez cr&eacute;er une classe appel&eacute;e TEST, 
		 puis cr&eacute;ez un forum qui n&apos;autorise que les utilisateurs de la classe TEST &agrave; y acc&eacute;der.<br /><br />
		 Le nom de la classe est affich&eacute; dans des listes d&eacute;roulantes et autres ; &agrave; certains endroits, la description plus d&eacute;taill&eacute;e est &eacute;galement affich&eacute;e.
		 L&apos;ic&ocirc;ne de classe peut &ecirc;tre affich&eacute;e &agrave; diff&eacute;rents endroits du site, si l&apos;un d&apos;entre eux est d&eacute;fini.<br /><br />
		 Pour permettre aux utilisateurs de d&eacute;terminer s&apos;ils peuvent &ecirc;tre membres d&apos;une classe, il faut leur permettre de la g&eacute;rer. Si vous ne d&eacute;finissez &apos;personne&apos; ici, seuls les administrateurs peut g&eacute;rer l&apos;appartenance &agrave; la classe<br /><br />
		 Le champ &apos;visibilit&eacute;&apos; vous permet de cacher la classe &agrave; la plupart des membres - s&apos;applique dans certaines des listes d&eacute;roulantes et des cases &agrave; cocher.<br /><br />
		 Le &apos;parent de classe&apos; vous permet d&apos;&eacute;tablir une hi&eacute;rarchie des classes. Si le &apos;sommet&apos; de la hi&eacute;rarchie est la classe &apos;Tout le monde/public&apos; ou &apos;Membre&apos;, les classes inf&eacute;rieures de la hi&eacute;rarchie ont &eacute;galement les droits de leur classe parentale, et du parent de cette classe, et ainsi de suite. Si le &apos;sommet&apos; de la hi&eacute;rarchie est la classe &apos;Personne/Personne&apos;, alors les droits sont accumul&eacute;s dans la direction oppos&eacute;e - une classe accumule tous les droits d&apos;une classe <strong>en dessous</strong> dans l&apos;arbre. L&apos;arbre qui en r&eacute;sulte est affich&eacute; dans la partie inf&eacute;rieure de la page ;vous pouvez agrandir et r&eacute;duire les branches en cliquant sur les cases &apos;+&apos; et &apos;-&apos;.";
}

$ns -> tablerender($caption, $text);
