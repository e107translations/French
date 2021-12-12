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

$caption = "Aide recherche";

$text = "
	Si votre version de serveur MySQL le permet vous pouvez commuter vers la m&eacute;thode de tri MySQL qui est plus rapide que la m&eacute;thode de tri PHP. Voir les pr&eacute;f&eacute;rences.<br /><br />
	Si votre site comprend des langues id&eacute;ographiques telles que le chinois et le japonais, vous devez utilisez la m&eacute;thode de tri PHP et d&eacute;sactivez la correspondance des mots entiers.
";

$ns -> tablerender ($caption, $text);
