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

$text = "Envoyez vos fichiers dans le dossier ".e_FILE."downloads, vos images dans le dossier ".e_FILE."downloadimages et vos vignettes dans le dossier ".e_FILE."downloadthumbs.
<br /><br />
Pour proposer un t&eacute;l&eacute;chargement, cr&eacute;ez d&apos;abord une cat&eacute;gorie et ensuite une sous-cat&eacute;gorie de cette cat&eacute;gorie m&egrave;re. Vous pouvez finalement rendre le t&eacute;l&eacute;chargement disponible en le pla&ccedil;ant dans cette sous-cat&eacute;gorie.";
$ns -> tablerender("Aide t&eacute;l&eacute;chargement", $text);
