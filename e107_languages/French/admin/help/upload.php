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

if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
	case 'filetypes' :
		$text = "Les types de fichiers et la taille maximale des fichiers pouvant &ecirc;tre t&eacute;l&eacute;charg&eacute;s sont d&eacute;finis par classe d&apos;utilisateurs. Cette option g&eacute;n&egrave;re un fichier appel&eacute; ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		qui doit &ecirc;tre copi&eacute; ou d&eacute;plac&eacute; dans le r&eacute;pertoire ".e_ADMIN_ABS." et renomm&eacute; ".e_READ_FILETYPES." avant qu&apos;il ne prenne effet.<br />
		Une seule d&eacute;finition par classe est autoris&eacute;e.<br />
		Notez que ces d&eacute;finitions s&apos;appliquent &agrave; l&apos;ensemble du site, m&ecirc;me si la fonction de t&eacute;l&eacute;chargement publique est d&eacute;sactiv&eacute;e.";
	break;
	case 'options' :
		$text = "Le syst&egrave;me complet de t&eacute;l&eacute;chargement publique peut &ecirc;tre d&eacute;sactiv&eacute; ici.
		Le type de stockage fichier est g&eacute;n&eacute;ralement appropri&eacute; (sinon la taille maximale du fichier est limit&eacute;e &agrave; 500 ko).
		La taille maximale des fichiers a priorit&eacute; sur toute d&eacute;finition figurant dans le fichier filetypes.xml.<br />
		Les t&eacute;l&eacute;chargements publiques peuvent &ecirc;tre limit&eacute;s &agrave; une classe d&apos;utilisateurs particuli&egrave;re, mais ces param&egrave;tres s&apos;appliquent &eacute;galement &agrave; d&apos;autres zones du site o&ugrave; les t&eacute;l&eacute;chargements peuvent &ecirc;tre autoris&eacute;s, comme les actualit&eacute;s et formulaires.";
	break;
	case 'view' :
	default :
		$text = "Cette page r&eacute;pertorie tous les t&eacute;l&eacute;chargements soumis. Vous pouvez choisir de les supprimer, de les transf&eacute;rer vers les t&eacute;l&eacute;chargements ou de les publier dans les actualit&eacute;s.";
}

$ns -> tablerender('Aide t&eacute;l&eacute;chargements publiques', $text);
