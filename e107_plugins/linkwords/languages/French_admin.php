<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system French Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2019/11/04 15:00:07
|
|        $Author: Olivier Troccaz $
+---------------------------------------------------------------+
*/

define("LWLAN_4", "Aucun mot-lien d&eacute;fini actuellement.");
define("LWLAN_5", "Mots");
define("LWLAN_6", "Lien");
define("LWLAN_7", "Activer ?");
define("LWLAN_21", "Mot &agrave; associer au lien automatiquement (ou liste de mots s&eacute;par&eacute;s par des virgules)");
define("LWLAN_26", "Zones dans lesquelles activer les mots-liens");
define("LWLAN_28", "Pages sur lesquelles d&eacute;sactiver les mots-liens");
define("LWLAN_33", "Zones de titre");
define("LWLAN_34", "R&eacute;sum&eacute;s de l&apos;&eacute;l&eacute;ment");
define("LWLAN_35", "Corps du texte");
define("LWLAN_36", "Descriptions (liens, etc.)");
define("LWLAN_40", "Titres entr&eacute;s par l&apos;utilisateur (par exemple forum)");
define("LWLAN_41", "Corps de texte entr&eacute;s par l&apos;utilisateur (par exemple forum)");
define("LWLAN_50", "Info-bulle");
define("LWLAN_52", "Mot-lien uniquement");
define("LWLAN_53", "Info-bulle uniquement");
define("LWLAN_54", "Mot-lien et info-bulle");
define("LWLAN_55", "Ouvrir le lien dans une nouvelle fen&ecirc;tre");
define("LWLAN_58", "Crochet de pr&eacute;f&eacute;rence converti au format 0.8");
define("LWLAN_59", "Activer les fonctionnalit&eacute;s Ajax");
define("LWLAN_64", "Supprimer le lien sur la page en cours");
define("LWLAN_66", "Classe CSS personnalis&eacute;e");
define("LWLAN_67", "Nombre max. de liens/suggestions");
define("LAN_LW_HELP_01", "  <b>Zones &agrave; activer</b><br />
  plusieurs zones de texte ont un &apos;contexte&apos; associ&eacute;, et les mots-liens ne s&apos;afficheront que dans les zones correspondant &agrave; ce contexte. <br /> <br />
  <b>D&eacute;sactiver les mots-liens</b><br />
  Les mots-liens peuvent &ecirc;tre d&eacute;sactiv&eacute;s sur des pages particuli&egrave;res ou des pages correspondant &agrave; un mod&egrave;le. Entrez les ici (m&ecirc;me syntaxe que pour les menus), un mod&egrave;le par ligne.
  Si le mod&egrave;le se termine par &apos;!&apos;, ceci correspond &agrave; &apos;fin de requ&ecirc;te&apos;, et est habituellement consid&eacute;r&eacute; comme une correspondance exacte. Autrement, n&apos;importe quelle URL contenant la cha&icirc;ne sp&eacute;cifi&eacute;e correspondra. <br />
  A noter que les mots-liens ne sont <i>jamais</i> affich&eacute;s sur les pages administrateur. <br /> <br />
  <b>Activer la fonctionnalit&eacute; Ajax</b><br />
  Les info-bulles peuvent utiliser Ajax pour obtenir des informations &agrave; afficher. Cela n&eacute;cessite g&eacute;n&eacute;ralement un codage personnalis&eacute;. <br /> <br />
  <b>Supprimer le lien sur la page en cours</b> <br />
  Habituellement, il est inutile que l&apos;utilisateur puisse cliquer sur un lien s&apos;il est d&eacute;j&agrave; sur la page. Cochez cette case pour supprimer l&apos;option,<br />");
define("LAN_LW_HELP_02", "D&eacute;finir les mots qui deviennent des liens cliquables, ou qui affichent du texte au survol de la souris, ici <br /> <br />
  <b><u>Mot vers lien</u></b> <br />
  C&apos;est insensible &agrave; la casse. Pour plusieurs mots d&eacute;signant les m&ecirc;mes liens et info-bulles, s&eacute;parez-les par des virgules (sans espace) <br /> <br />
  <b><u>Lien</u></b> <br />
  D&eacute;finir un lien cliquable ici. Si c&apos;est un lien externe, il [i]doit[/ i] commencer par &apos;http://&apos;. Si c&apos;est un lien interne au site, l&apos;une des constantes normales {e_XXX} peut &ecirc;tre utilis&eacute;e. <br /> <br />
  <b><u>Info-bulle</u></b> <br />
  Il s&apos;agit du texte &agrave; afficher lorsque la souris de l&apos;utilisateur survole le mot. <br /> <br />
  <b><u>LW ID (ID de l&apos;info-bulle)</u></b> <br /> <br />
  Il s&apos;agit d&apos;un identifiant num&eacute;rique optionnel pouvant &ecirc;tre utilis&eacute; lors des traitements Ajax. Si laisser vide, le num&eacute;ro d&apos;enregistrement de base de donn&eacute;es est utilis&eacute;. <br /> <br />
  <b><u>Activer ?</u></b><br />
  D&eacute;finit quelles options sont actives.");
define("LAN_LW_HELP_03", "Habituellement, il est inutile pour l&apos;utilisateur de pouvoir cliquer sur un lien s&apos;il se trouve d&eacute;j&agrave; sur la page vers laquelle il est li&eacute;. Lorsque cette option est d&eacute;sactiv&eacute;e, les mots liens ne sont pas g&eacute;n&eacute;r&eacute;s dans ce cas.");
define("LAN_LW_HELP_04", "Les mots liens peuvent &ecirc;tre d&eacute;sactiv&eacute;s sur des pages sp&eacute;cifiques ou des pages correspondant &agrave; un mod&egrave;le. Saisissez-les ici (m&ecirc;me syntaxe que pour la visibilit&eacute; du menu), un mod&egrave;le par ligne. Si le mod&egrave;le se termine par &apos;!&apos;, cela correspond &agrave; &apos;fin de la requ&ecirc;te&apos;, et est g&eacute;n&eacute;ralement une correspondance exacte. Sinon, toute URL contenant la cha&icirc;ne sp&eacute;cifi&eacute;e correspondra.");
define("LAN_LW_HELP_05", "Ajoutera cette classe &agrave; tous les liens g&eacute;n&eacute;r&eacute;s.");
define("LAN_LW_HELP_10", "Vous pouvez d&eacute;finir ici les mots qui deviennent des liens cliquables, ou qui affichent du texte au survol de la souris.	");
define("LAN_LW_HELP_11", "C&apos;est insensible &agrave; la casse. Pour faire correspondre plusieurs mots aux m&ecirc;mes liens et infobulles, s&eacute;parez-les par des virgules (sans espaces).");
define("LAN_LW_HELP_12", "D&eacute;finissez un lien cliquable ici. S&apos;il s&apos;agit d&apos;un lien externe, il DOIT commencer par &apos;http(s)://&apos;. Si c&apos;est un lien dans ce site, les constantes normales {e_XXX} peuvent &ecirc;tre utilis&eacute;es.");
define("LAN_LW_HELP_13", "D&eacute;finit les options actives.");
define("LAN_LW_HELP_14", "D&eacute;finit le texte &agrave; afficher lorsque la souris de l&apos;utilisateur passe sur le mot.");
define("LAN_LW_HELP_15", "Quantit&eacute; maximale des m&ecirc;mes mots liens. Doit &ecirc;tre un nombre positif. Utilis&eacute; lorsque le m&ecirc;me mot est trouv&eacute; plusieurs fois dans un texte.");
define("LAN_LW_HELP_16", "Ceci d&eacute;finit un ID num&eacute;rique optionnel &agrave; utiliser avec le traitement Ajax. Ça doit &ecirc;tre un num&eacute;ro positif. Si vide, le num&eacute;ro d&apos;enregistrement de la base de donn&eacute;es est utilis&eacute;.");
define("LAN_LW_HELP_17", "Lorsqu&apos;il est activ&eacute;, le lien est ouvert dans un nouvel onglet ou une nouvelle fen&ecirc;tre du navigateur.");
