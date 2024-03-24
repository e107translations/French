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

$caption = "Aide logs syst&egrave;me";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = "list";

function common_filters()
{
  $ret = "
  <br /><br />
  <b>Filtres de donn&eacute;es</b><br />
  Vous pouvez sp&eacute;cifier divers filtres diminuant le nombre de donn&eacute;es affich&eacute;es. Les donn&eacute;es sont enregistr&eacute;es dans un cookie jusqu&apos;&agrave; la d&eacute;connexion.<br />
  Les filtres date de d&eacute;but et fin doivent &ecirc;tre activ&eacute;s par leur case &agrave; cocher respective.<br />
  Les autres filtres sont actifs lorsqu&apos;une valeur est saisie.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Log d&apos;activit&eacute; des utilisateurs.";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Page de configuration des diverses options du syst&egrave;me de logs.<br /><br />
  <b>Param&egrave;tres g&eacute;n&eacute;riques</b><br />
  Nombre de lignes &agrave; afficher.<br /><br />
  <b>Logs admin</b><br />
  Ces logs conservent les &eacute;v&egrave;nements tant qu&apos;ils ne sont pas sp&eacute;cifiquement supprim&eacute;s.<br />
  Utiliser cette option pour supprimer les anciens &eacute;v&egrave;nements.<br /><br />
  <b>Logs audit utilisateurs</b><br />
  Ces logs enregistrent les activit&eacute;s des utilisateurs.<br />
  Seuls les membres du groupe sp&eacute;cifi&eacute; sont suivis. Ils est possible d&apos;utiliser le groupe <q>tous le monde</q> ou de cr&eacute;er un groupe sp&eacute;cifique.<br />
  D&eacute;terminer ensuite les types d&apos;&eacute;v&egrave;nements que vous souhaitez suivre.<br />
  Les &eacute;v&egrave;nements d&apos;inscriptions peuvent &ecirc;tre suivis s&eacute;par&eacute;ment.<br /><br />
  <b>Logs circulaires</b><br />
  Les logs circulaires affichent divers &eacute;v&egrave;nements anormaux et offrent une assistance en mode debug.<br />
  Il est possible de les d&eacute;sactiver.<br />
  Les &eacute;v&egrave;nements sont automatiquement supprim&eacute;s apr&egrave;s le temps imparti.";
  break;
case 'rolllog' :
  $text = "Les logs circulaires affichent divers &eacute;v&egrave;nements anormaux.<br />
  Ils peuvent &eacute;galement &ecirc;tre utilis&eacute;s en mode debug.";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "T&eacute;l&eacute;chargements effectu&eacute;s par les utilisateurs.";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Affichage des commentaires utilisateurs s&eacute;lectionnables par ID, type et date.<br />
  Les commentaires ind&eacute;sirables peuvent &ecirc;tre supprim&eacute;s.";
  break;
case 'detailed' :
  $text = "Le syst&egrave;me principal de logs enregistre l&apos;heure avec pr&eacute;cision si le serveur le supporte.<br />
  Cette page permet une inspection des entr&eacute;es dans une fen&ecirc;tre temporelle relativement petite.<br />
  Les entr&eacute;es logs admin, audit et circulaires sont fusionn&eacute;es de fa&ccedil;on &agrave; visualiser les relations entre &eacute;v&egrave;nements.";
  break;
case 'adminlog' :
default :
  $text = "Log d&apos;activit&eacute; administration.<br />
  (Actuellement les logs sont encore ajout&eacute;s dans le code. En cons&eacute;quence la liste est incompl&egrave;te.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
