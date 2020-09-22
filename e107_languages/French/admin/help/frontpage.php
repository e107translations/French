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

$caption = "Aide page d&apos;accueil";
$text = "
<p>
	&Agrave; partir de cet &eacute;cran, vous pouvez choisir ce que vous voulez afficher en premi&egrave;re page de votre site, la valeur par d&eacute;faut &eacute;tant les actualit&eacute;s. Vous pouvez &eacute;galement d&eacute;terminer si
	les utilisateurs sont envoy&eacute;s &agrave; une page particuli&egrave;re apr&egrave;s s&apos;&ecirc;tre connect&eacute;s.
</p>
<p>
	Les r&egrave;gles sont recherch&eacute;es dans l&apos;ordre, pour trouver la premi&egrave;re o&ugrave; l&apos;utilisateur actuel appartient &agrave; la classe sp&eacute;cifi&eacute;e dans la r&egrave;gle. 
	Cette r&egrave;gle d&eacute;termine ensuite la page d&apos;accueil (home) et toute page de post-connexion sp&eacute;cifique. Si aucune r&egrave;gle ne correspond, news.php est d&eacute;fini comme page d&apos;accueil.
</p>
<p>
	L&apos;utilisateur est envoy&eacute; &agrave; la &amp;quot;page de post-connexion&amp;quot sp&eacute;cifi&eacute; ; (si sp&eacute;cifi&eacute;) imm&eacute;diatement apr&egrave;s une connexion.
</p>
";

$ns -> tablerender($caption, $text, 'admin_help');
