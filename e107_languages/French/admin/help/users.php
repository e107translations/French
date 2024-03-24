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

$caption = 'Gestion des utilisateurs';
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Cette page vous permet de cr&eacute;er un utilisateur, qui devient imm&eacute;diatement un membre normal du site, quel que soit le groupe d&apos;appartenance que vous lui attribuez.<br /><br />
    Si vous cochez la case &apos;Envoyer le mail de confirmation avec mot de passe au nouvel utilisateur&apos;, le nom de connexion et le mot de passe sont envoy&eacute;s <strong>en clair</strong>, aussi l&apos;utilisateur doit changer son mot de passe d&egrave;s r&eacute;ception.";
    break;

  case 'prune' :
	$text = "Supprime en vrac les utilisateurs ind&eacute;sirables de la base de donn&eacute;es. Il peut s&apos;agir soit de ceux qui n&apos;ont pas r&eacute;ussi &agrave; terminer le processus d&apos;inscription ou ceux dont les adresses &eacute;lectroniques ont &eacute;t&eacute; refus&eacute;es. Tous les messages, commentaires, etc. du forum sont conserv&eacute;s et sont signal&eacute;s comme provenant d&apos;un &apos;Utilisateur supprim&eacute;&apos;.";
	break;

  case 'unverified' :
	$text = "Affiche les membres qui n&apos;ont pas r&eacute;ussi &agrave; terminer leur inscription. Les options sont en g&eacute;n&eacute;ral les m&ecirc;mes que pour la liste compl&egrave;te des membres.";
    break;

  case 'options' :
	$text = "D&eacute;finit diverses options affectant tous les utilisateurs.<br /><br />
	<b>Autoriser le t&eacute;l&eacute;chargement d&apos;avatar</b><br />
	Si cette option est activ&eacute;e, les utilisateurs peuvent t&eacute;l&eacute;charger un avatar de leur choix, lequel sera stock&eacute; sur votre serveur. Cela peut avoir des implications en mati&egrave;re de s&eacute;curit&eacute;.<br /><br />
	<b>Autoriser le t&eacute;l&eacute;chargement de photos</b><br />
	Si cette option est activ&eacute;e, les utilisateurs peuvent t&eacute;l&eacute;charger une photo de leur choix, lequel sera stock&eacute; sur votre serveur. Cela peut avoir des implications en mati&egrave;re de s&eacute;curit&eacute;.<br /><br />
	<b>Suivi des utilisateurs en ligne</b><br />
    Cela doit permettre de suivre la plupart des activit&eacute;s des utilisateurs, y compris le nombre de membres en ligne. Il permet d&apos;augmenter de mani&egrave;re significative l&apos;activit&eacute; de la base de donn&eacute;es.<br /><br />
	<b>Informations aux membres</b><br />
	D&eacute;termine quelle cat&eacute;gorie de membres peut consulter la liste des membres.
    ";
    break;

  default :
	$text = "Cette page affiche la liste de vos membres inscrits. Vous pouvez mettre &agrave; jour leurs param&egrave;tres, leur donner le statut d&apos;administrateur et d&eacute;finir leur classe d&apos;utilisateur entre autres choses.<br /><br />
	L&apos;ordre de tri peut &ecirc;tre modifi&eacute; en cliquant sur l&apos;en-t&ecirc;te de colonne.<br /><br />
	<b>Classes d&apos;utilisateur</b><br />
	Les classes d&apos;utilisateurs peuvent &ecirc;tre d&eacute;finies de deux fa&ccedil;ons : soit &apos;en ligne&apos; en cliquant dans la colonne &apos;classe d&apos;utilisateur&apos;, soit en s&eacute;lectionnant un ou plusieurs utilisateurs et en utilisant les options &apos;par lot&apos; en bas du tableau. <br /><br />
	<b>Editer</b><br />
	Voir et modifier tous les param&egrave;tres pour cet utilisateur. <br /><br />
	<b>Interdiction/Autoriser</b><br />
	D&eacute;terminer si l&apos;utilisateur peut acc&eacute;der au site. <br /><br />
	<b>Activer</b><br />
	Cela active un utilisateur qui aurait normalement r&eacute;pondu &agrave; l&apos;e-mail d&apos;activation.<br /><br />
	<b>Renvoyer un courriel</b><br />
	Renvoie l&apos;e-mail d&apos;activation &agrave; l&apos;utilisateur.<br /><br />
	<b>Test email</b><br />
	V&eacute;rifiez la validit&eacute; de l&apos;adresse &eacute;lectronique de l&apos;utilisateur (n&apos;envoie pas de courrier &eacute;lectronique)<br /><br />
	<b>Supprimer</b><br />
	Supprime totalement l&apos;utilisateur du site (tous les messages, commentaires, etc. restent, et sont signal&eacute;s comme provenant d&apos;un &apos;utilisateur supprim&eacute;&apos;).
	";
}

$ns -> tablerender($caption, $text);
unset($text);
