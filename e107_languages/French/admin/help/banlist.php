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

$caption = "Exclure des utilisateurs de votre site";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list'
switch ($action)
{
case 'transfer' :
    $text = "Cette page vous permet de transf&eacute;rer les donn&eacute;es de la liste noire depuis et vers votre site sous forme de fichiers CSV (variables s&eacute;par&eacute;es par des virgules).<br /><br />";
    $text .= "<b>Export de donn&eacute;es</b><br />
    Choisissez les types d&apos;exclusion &agrave; exporter. Les champs seront d&eacute;limit&eacute;s par le s&eacute;parateur choisi et &eacute;ventuellement inclus entre les guillemets s&eacute;lectionn&eacute;s.<br /><br />";
    $text .= "<b>Import de donn&eacute;es</b><br />
    Vous pouvez choisir si les exclusions import&eacute;es doivent remplacer les exclusions import&eacute;es existantes ou bien s&apos;ajouter &agrave; la liste. Si les donn&eacute;es import&eacute;es contiennent une date/heure d&apos;expiration, vous
	pouvez choisir si c&apos;est elle &agrave; utiliser ou bien la valeur d&eacute;finie pour ce site.<br /><br />";
    $text .= "<b>Format CSV</b><br />
    Le format de chaque ligne du fichier est: IP/email, date, expiration, type, raison, notes.<br />
    Date et expiration sont au format YYYYMMDD_HHMMDD, sauf une valeur z&eacute;ro qui indique alors &apos;inconnu&apos; ou &apos;ind&eacute;fini&apos;<br />
    Seuls les adresses IP ou emails sont essentiels; les autres champs sont import&eacute;s si pr&eacute;sents.<br /><br />
    <b>Remarque :</b> vous devrez modifier le fichier filetypes.xml afin d&apos;autoriser les administrateurs &agrave; importer le format &apos;CSV&apos;.";
  break;
case 'times' :
    $text = "Cette page d&eacute;finit le comportement par d&eacute;faut pour les diff&eacute;rents types d&apos;exclusions.<br />
    Si un message est sp&eacute;cifi&eacute;, il sera alors affich&eacute; &agrave; l&apos;utilisateur (&agrave; un endroit appropri&eacute;). Si le message commence avec &apos;http://&apos; ou &apos;https://&apos; le contr&ocirc;le
	est pass&eacute; &agrave; l&apos;URL sp&eacute;cifi&eacute;. Dans le cas contraire l&apos;utilisateur obtiendra probablement un &eacute;cran blanc.<br />
    L&apos;exclusion sera en vigueur pendant la dur&eacute;e sp&eacute;cifi&eacute;e; apr&egrave;s quoi il sera effac&eacute; la prochaine fois qu&apos;ils acc&egrave;dent au site.";
  break;
case 'options' :
    $text = "<b>DNS inverse</b><br />
   .<br /><br />
    Vous pouvez choisir de rechercher les noms de  Si activ&eacute;, l&apos;adresse IP de l&apos;utilisateur est recherch&eacute;e pour obtenir le nom de domaine associ&eacute;. Ce processus acc&egrave;de &agrave; un serveur externe, ce qui peut
    entrainer un d&eacute;lai avant que l&apos;information ne soit disponible - et si le serveur est hors ligne, il peut y avoir un tr&egrave;s long d&eacute;laiserveurs pour tous les acc&egrave;s au site ou seulement lors de l&apos;ajout d&apos;une nouvelle exclusion.<br /><br />
    <b>Taux d&apos;acc&egrave;s maximal</b><br />
    Cela d&eacute;finit le nombre maximal d&apos;acc&egrave;s au site autoris&eacute; par un m&ecirc;me utilisateur ou adresse IP dans une p&eacute;riode de cinq minutes, et a pour but
	de d&eacute;tecter les attaques par d&eacute;ni de service. &Agrave; 90% de la limite choisie, l&apos;utilisateur re&ccedil;oit un avertissement; lorsque la limite est atteinte, il est exclu.
    Diff&eacute;rent seuils peuvent &ecirc;tre fix&eacute;s pour les invit&eacute;s et les membres connect&eacute;s.<br /><br />
    <b>R&eacute;activation de la p&eacute;riode d&apos;exclusion</b><br />
    Cette option n&apos;est pertinente que si l&apos;exclusion sur une p&eacute;riode, et non ind&eacute;finiment, est d&eacute;fini dans les options. Si activ&eacute;e et si
	l&apos;utilisateur tente d&apos;acc&eacute;der au site, l&apos;exclusion est prolong&eacute;e (comme si l&apos;exclusion venait juste de commencer).
    ";
  break;
case 'edit' :
case 'add' :
    $text = "Vous pouvez exclure des utilisateurs de votre site &agrave; partir de cette page.<br />
    Entrez leur adresse IP compl&egrave;te ou utilisez un caract&egrave;re g&eacute;n&eacute;rique pour exclure une plage d&apos;adresses IP. Vous pouvez &eacute;galement entrer une adresse email pour emp&ecirc;cher un utilisateur de s&apos;enregistrer en tant que membre sur votre site.<br /><br />
    <strong>Exclure par adresse IP :</strong><br />
    Entrer l&apos;adresse IP 123.123.123.123 bloquera la visite de votre site par l&apos;utilisateur disposant de cette adresse.<br />
    Entrer une adresse IP avec un ou plusieurs caract&egrave;res g&eacute;n&eacute;riques dans les blocs de fin, comme 123.123.123.* ou 214.098.*.*, bloquera la visite de votre site par n&apos;importe quel utilisateur dans cette
	tranche IP. (Notez qu&apos;il doit y avoir exactement quatre groupes de chiffres ou d&apos;ast&eacute;risques) <br /> <br />
	Les adresses au format IPV6 sont &eacute;galement prises en charge, y compris &apos;::&apos; pour repr&eacute;senter un bloc de valeurs nulles. Chaque paire de chiffres dans les champs de fin peut &ecirc;tre un caract&egrave;re g&eacute;n&eacute;rique s&eacute;par&eacute;<br /><br />
    <strong>Exclure par adresse email</strong><br />
    Entrer l&apos;adresse email foo@bar.com emp&ecirc;chera toute personne utilisant cet email &agrave; s&apos;inscrire en tant que membre sur votre site.<br />
    Entrer l&apos;adresse email *@bar.com emp&ecirc;chera toute personne utilisant ce domaine de messagerie &agrave; s&apos;inscrire en tant que membre sur votre site.<br /><br />
    <b>Exclure par nom d&apos;utilisateur</b><br />
	Cela se fait &agrave; partir de la page d&apos;administration des utilisateurs.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
    $text = "Vous pouvez sp&eacute;cifier ici des adresses IP que vous savez &ecirc;tre &apos;amicales&apos; - g&eacute;n&eacute;ralement celles des administrateurs principaux, afin de leur garantir un acc&egrave;s au site en toutes circonstances.<br />
    Il est conseill&eacute; de limiter le nombre d&apos;adresses de cette liste &agrave; un mimimum absolu, tant pour des raisons de s&eacute;curit&eacute; que pour minimiser l&apos;impact sur les performances du site.";
  break;
case 'banlog' :
  $text = "Cette page affiche une liste de tous les acc&egrave;s au site comportant une adresse pr&eacute;sente dans la liste des exclusions ou la liste blanche. La colonne &apos;raison&apos; affiche l&apos;explication.";
  break;
case 'white' :
    $text = "Cette page affiche une liste de toutes les adresses IP et email explicitement autoris&eacute;es.<br />
    Cette liste est prioritaire sur la liste des exclusions - Il ne devrait pas &ecirc;tre possible d&apos;exclure une adresse de cette liste.<br />
    Toutes les adresses doivent &ecirc;tre entr&eacute;es manuellement.";
  break;
case 'list' :
default :
    $text = "Cette page affiche une liste de toutes les adresses IP, noms de domaine et adresses email qui sont interdites.<br />
    (Les utilisateurs exclus sont affich&eacute;s sur la page d&apos;administration des utilisateurs.<br /><br />
    <b>Exclusions automatiques</b><br />
    e107 exclut automatiquement les adresses IP individuelles si elles tentent d&apos;inonder (flooder) le site, ainsi que les adresses avec des &eacute;checs de connexions.<br />
    Ces exclusions figurent &eacute;galement dans cette liste. Vous pouvez s&eacute;lectionner (sur la page des options) les actions &agrave; prendre pour chaque type d&apos;exclusion.<br /><br />
    <b>Enlever une exclusion</b><br />
    Vous pouvez d&eacute;finir un d&eacute;lai d&apos;expiration pour chaque type d&apos;exclusion, auquel cas l&apos;entr&eacute;e est supprim&eacute;e une fois expir&eacute;e la p&eacute;riode d&apos;exclusion. Dans le cas contraire,
	l&apos;exclusion subsiste jusqu&apos;&agrave; ce que vous le retiriez.<br />
    Vous pouvez modifier la p&eacute;riode d&apos;exclusion &agrave; partir de cette page - les temps sont calcul&eacute;s &agrave; partir de maintenant.";
}

$ns -> tablerender($caption, $text);
