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

$text = "<strong>Attention:</strong> Cet outil est encore en voie de d&eacute;veloppement. Certaines fonctionnalit&eacute;s peuvent donc cr&eacute;er des surprises. Notamment:<br /><br />
* LC_ALL n&apos;est pas reconnu si suivi de plus d&apos;une cha&icirc;ne de caract&egrave;res, ce qui est le cas dans French.php<br />
* Certaines phrases sont d&eacute;clar&eacute;es comme manquantes bien qu&apos;elles soient vides dans la version anglaise. S&apos;assurer que la constante soit en rouge en mode &eacute;dition<br />
* Les cha&icirc;nes sont r&eacute;&eacute;crites entre guillemets doubles. Veillez &agrave; prot&eacute;ger ceux inclus dans le texte si besoin <strong>\"</strong><br />
* Cet outil est &agrave; &eacute;viter sur les fichiers de langue fran&ccedil;aise du noyau.<br />

pour plus d&apos;informations rendez vous sur le forum de http://etalkers.tuxfamily.org/<br /><br />

<br /><br />eTalkers team";
$ns -> tablerender('Aide v&eacute;rification langues', $text);
