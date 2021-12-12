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

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
		case 'justone' :
			$text = "Envoie un mail avec les contraintes sp&eacute;cifi&eacute;es par un plugin optionnel.";
			break;
		case 'debug' :
			$text = "Pour d&eacute;veloppeurs uniquement. Un deuxi&egrave;me param&egrave;tre de requ&ecirc;te correspond au champ gen_type de la table <q>generic</q>. Ignorez les ent&ecirc;tes des colonnes.";
			break;
		case 'list' :
			$text = "Choisir et utiliser un mod&egrave;le de mail sauvegard&eacute; pour un publipostage. La suppression de tous les mod&egrave;les n&apos;est plus requis.";
			break;
		case 'mailouts' :
			$text = "Liste des publipostages sauvegard&eacute;s. Permet de voir s&apos;ils ont &eacute;t&eacute; envoy&eacute;s et r&eacute;-envoie tout email non envoy&eacute;.<br />";
			$text .= "Affiche &eacute;galement certains d&eacute;tails, en particulier la raison de l&apos;erreur lors de l&apos;envoi si c&apos;est le cas.<br />";
			$text .= "Pour r&eacute;-envoyer les mails en attente, cliquez sur le bouton <q>R&eacute;-envoyer</q>. Cliquez ensuite sur <q>Ex&eacute;cuter</q> afin d&apos;ouvrir la fen&ecirc;tre de progression.<br />";
			$text .= "Pour annuler le publipostage il suffit de cliquer sur le bouton <q>Annuler</q>.";
			break;
		case 'savedmail' :
		case 'makemail' :
			$text = "Cr&eacute;ez un mail et s&eacute;lectionnez la liste des destinataires. Vous pouvez enregistrer le mail en tant que mod&egrave;le pour un usage ult&eacute;rieur ou l&apos;envoyer directement.<br />";
			$text .= "Toute pi&egrave;ce jointe est s&eacute;lectionn&eacute;e dans la liste des t&eacute;l&eacute;chargements.";
			break;
		case 'prefs' :
			$text = "<b>Configuration des options de publipostage.</b><br />
			Un mail de test est envoy&eacute; en utilisant la m&eacute;thode et les param&egrave;tres en court.<br /><br />";
			$text .= "<b>M&eacute;thode de publipostage</b><br />
			Pour envoyer des emails utiliser SMTP si possible. Les param&egrave;tres d&eacute;pendent du serveur mail de votre h&eacute;bergeur.<br /><br />";
			$text .= "<b>Retours emails</b><br />
			Retours automatiques de mails non d&eacute;livr&eacute;s.<br />
			Vous pouvez sp&eacute;cifier un compte POP3 afin de r&eacute;cup&eacute;rer les r&eacute;ponses de mails non d&eacute;livr&eacute;s. Il s&apos;agit normalement d&apos;un compte standard. N&apos;utilisez les options TLS que si elles sont explicitement requisent par l&apos;h&eacute;bergeur.<br /><br />";
			$text .= "<b>Sources adresses emails</b><br />
				Si vous avez des plugins g&eacute;rant les emails, vous pouvez choisir lesquels utiliser pour compl&eacute;ter les listes d&apos;emails.<br /><br />";
			$text .= "<b>Journaux</b><br />
				L&apos;option journal cr&eacute;er un fichier texte dans le dossier log du plugin &lt;q&gt;statisques du site</q>. Il doit &ecirc;tre effac&eacute; p&eacute;riodiquement. L&apos;option <q>Journal uniquement</q> permet de visualiser pr&eacute;cis&eacute;ment qui pourrait recevoir le mail si r&eacute;ellement envoy&eacute;. L&apos;option <q>avec erreur</q> g&eacute;n&egrave;re une erreur tous les 7 mails &agrave; des fins de tests.
				";
			break;
		default :
			$text = "Option non document&eacute;e.";
  }

$ns -> tablerender("Aide publipostage", $text);
