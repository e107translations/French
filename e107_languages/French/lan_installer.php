<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system French Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/01/20 17:59:34
|
|        $Author: Olivier Troccaz $
+---------------------------------------------------------------+
*/
define("LANINS_001", "Installation e107");
define("LANINS_002", "&Eacute;tape");
define("LANINS_003", "1");
define("LANINS_004", "S&eacute;lection de la langue");
define("LANINS_005", "Veuillez choisir la langue &agrave; utiliser pendant l&apos;installation");
define("LANINS_007", "4");
define("LANINS_008", "Contr&ocirc;le des versions de PHP et MySQL / v&eacute;rification des autorisations de fichiers");
define("LANINS_009", "Testez &agrave; nouveau les autorisations de fichiers");
define("LANINS_010", "Fichier non accessible en &eacute;criture :");
define("LANINS_010a", "Dossier non accessible en &eacute;criture :");
define("LANINS_012", "Les fonctions MySQL ne semblent pas exister. Cela signifie probablement que l&apos;extension My SQL de PHP n&apos;est pas install&eacute;e ou que votre installation de PHP n&apos;a pas &eacute;t&eacute; compil&eacute;e avec le support MySQL.");
define("LANINS_013", "Votre num&eacute;ro de version MySQL n&rsquo;a pas pu &ecirc;tre d&eacute;termin&eacute;. Ce n&apos;est pas une erreur fatale, alors, veuillez continuer l&apos;installation, mais notez bien qu&apos;e107 requiert MySQL 3.23 ou sup&eacute;rieure pour fonctionner correctement.");
define("LANINS_014", "Autorisations de fichiers");
define("LANINS_015", "Version de PHP");
define("LANINS_017", "PASSE");
define("LANINS_018", "Assurez-vous que tous les fichiers r&eacute;pertori&eacute;s existent et sont accessibles en &eacute;criture par le serveur. Cela implique normalement de faire un CHMOD 777 sur ceux-ci, mais les environnements varient - contactez votre h&eacute;bergeur si vous avez des probl&egrave;mes.");
define("LANINS_019", "La version PHP install&eacute;e sur votre serveur n&apos;est pas en mesure d&apos;ex&eacute;cuter e107. e107 n&eacute;cessite une version PHP au moins ". MIN_PHP_VERSION. " pour s&apos;ex&eacute;cuter correctement. Mettez &agrave; niveau votre version PHP ou contacter votre h&eacute;bergeur pour une mise &agrave; niveau.");
define("LANINS_021", "2");
define("LANINS_022", "D&eacute;tails du serveur MySQL");
define("LANINS_023", "Veuillez entrer vos param&egrave;tres MySQL ici.

Si vous avez les permissions d&apos;administrateur, vous pouvez cr&eacute;er une nouvelle base de donn&eacute;es en cochant la case, si non, vous devez cr&eacute;er une base de donn&eacute;es ou en utiliser une pr&eacute;-existante.

Si vous n&apos;avez qu&apos;une seule base de donn&eacute;es, utilisez un pr&eacute;fixe afin que les autres scripts puissent partager la m&ecirc;me base de donn&eacute;es.
Si vous ne connaissez pas vos param&egrave;tres MySQL, contactez votre h&eacute;bergeur.");
define("LANINS_024", "Serveur MySQL :");
define("LANINS_025", "Nom d&apos;utilisateur MySQL :");
define("LANINS_026", "Mot de passe MySQL :");
define("LANINS_027", "Base de donn&eacute;es MySQL :");
define("LANINS_028", "Cr&eacute;er la base de donn&eacute;es ?");
define("LANINS_029", "Pr&eacute;fixe de table :");
define("LANINS_030", "Le serveur MySQL que vous voulez qu&apos;e107 utilise. Il peut &eacute;galement inclure un num&eacute;ro de port, par exemple &apos;hostname: port&apos; ou un chemin d&apos;acc&egrave;s &agrave; un socket local par exemple &apos;:/path/to/socket&apos; pour l&apos;h&ocirc;te local.");
define("LANINS_031", "Le nom d&apos;utilisateur que vous souhaitez qu&apos;e107 utilise pour se connecter &agrave; votre serveur MySQL");
define("LANINS_032", "Le mot de passe pour l&apos;utilisateur que vous venez juste d&apos;entrer. Il ne doit pas contenir de guillemets simples ou doubles.");
define("LANINS_033", "La base de donn&eacute;es MySQL dans laquelle vous souhaitez qu&apos;e107 r&eacute;side, parfois r&eacute;f&eacute;renc&eacute;e &agrave; un sch&eacute;ma. Elle doit commencer par une lettre. Si l&apos;utilisateur dispose des autorisations pour cr&eacute;er une base de donn&eacute;es, vous pouvez opter pour la cr&eacute;ation automatique de la base de donn&eacute;es si elle n&apos;existe pas d&eacute;j&agrave;.");
define("LANINS_034", "Le pr&eacute;fixe que vous souhaitez qu&apos;e107 utilise pour cr&eacute;er les tables d&apos;e107. Utile pour des installations multiples d&apos;e107 dans le sch&eacute;ma d&apos;une seule base de donn&eacute;es.");
define("LANINS_036", "3");
define("LANINS_037", "V&eacute;rification de la connexion MySQL");
define("LANINS_038", " et cr&eacute;ation de la base de donn&eacute;es");
define("LANINS_039", "Veuillez vous assurer d&apos;avoir bien renseign&eacute; tous les champs, surtout, le serveur MySQL, le nom d&apos;utilisateur MySQL et la base de donn&eacute;es MySQL (ceux-ci sont toujours requis par le serveur MySQL)");
define("LANINS_040", "Erreurs");
define("LANINS_041", "e107 n&apos;a pas pu &eacute;tablir une connexion au serveur MySQL en utilisant les informations que vous avez entr&eacute;es. Veuillez revenir &agrave; la page pr&eacute;c&eacute;dente et assurez vous que les informations sont correctes.");
define("LANINS_042", "Connexion au serveur MySQL &eacute;tablie et v&eacute;rifi&eacute;e.");
define("LANINS_043", "Impossible de cr&eacute;er la base de donn&eacute;es, veuillez vous assurer que vous avez les autorisations appropri&eacute;es pour cr&eacute;er des bases de donn&eacute;es sur votre serveur.");
define("LANINS_044", "Base de donn&eacute;es cr&eacute;&eacute;e avec succ&egrave;s.");
define("LANINS_045", "Veuillez cliquer sur le bouton pour passer &agrave; l&apos;&eacute;tape suivante.");
define("LANINS_046", "5");
define("LANINS_047", "D&eacute;tails de l&apos;administrateur");
define("LANINS_048", "Extension EXIF");
define("LANINS_049", "Les deux mots de passe que vous avez entr&eacute;s ne sont pas identiques. Veuillez retourner &agrave; l&rsquo;&eacute;tape pr&eacute;c&eacute;dente et r&eacute;essayez.");
define("LANINS_050", "Extension XML");
define("LANINS_051", "Install&eacute;");
define("LANINS_052", "Pas install&eacute;");
define("LANINS_055", "Confirmation de l&apos;installation");
define("LANINS_056", "6");
define("LANINS_057", "e107 a maintenant toutes les informations n&eacute;cessaires pour terminer l&apos;installation.
Veuillez cliquez sur le bouton pour cr&eacute;er les tables de la base de donn&eacute;es et enregistrer tous vos param&egrave;tres.");
define("LANINS_058", "7");
define("LANINS_060", "Impossible de lire le fichier de donn&eacute;esSQL.
Veuillez vous assurer que le fichier [b]core_sql.php[/b] existe dans le r&eacute;pertoire [b]/e107_core/sql[/b].");
define("LANINS_061", "e107 n&apos;a pas pu cr&eacute;er toutes les tables requises pour la base de donn&eacute;es.
Veuillez effacer la base de donn&eacute;es et corriger les probl&egrave;mes avant de r&eacute;essayer.");
define("LANINS_069", "e107 a &eacute;t&eacute; install&eacute; avec succ&egrave;s !

Pour des raisons de s&eacute;curit&eacute;, vous devez maintenant d&eacute;finir les permissions de nouveau &agrave; 644 sur le fichier [b]e107_config.php[/b].

Veuillez aussi supprimer le fichier install.php de votre serveur apr&egrave;s avoir cliqu&eacute; sur le bouton ci-dessous.");
define("LANINS_070", "e107 n&apos;a pas pu enregistrer le fichier de configuration principal sur votre serveur.

Veuillez vous assurer que le fichier [b]e107_config.php[/b] dispose des autorisations appropri&eacute;es");
define("LANINS_071", "Installation compl&egrave;te");
define("LANINS_072", "Nom d&apos;utilisateur administrateur");
define("LANINS_073", "C&apos;est le nom que vous utiliserez pour vous connecter au site. Si vous le souhaitez, vous pouvez &eacute;galement l&rsquo;utiliser comme nom d&rsquo;affichage");
define("LANINS_074", "Nom d&apos;affichage administrateur");
define("LANINS_076", "Mot de passe admin");
define("LANINS_077", "Veuillez saisir le mot de passe administrateur que vous souhaitez utiliser");
define("LANINS_078", "Confirmation du mot de passe administrateur");
define("LANINS_079", "Veuillez ressaisir le mot de passe administrateur pour confirmation");
define("LANINS_080", "Mail de l&apos;administrateur");
define("LANINS_081", "Entrez votre adresse mail");
define("LANINS_083", "MySQL a signal&eacute; une erreur :");
define("LANINS_084", "Le programme d&apos;installation n&apos;a pas pu &eacute;tablir une connexion &agrave; la base de donn&eacute;es");
define("LANINS_085", "Le programme d&apos;installation n&apos;a pas pu s&eacute;lectionner la base de donn&eacute;es :");
define("LANINS_086", "Les champs nom d&rsquo;utilisateur administrateur, mot de passe et mail sont [b]obligatoires[/b]. Veuille revenir &agrave; la page pr&eacute;c&eacute;dente et s&apos;assurez vous que les informations sont correctement renseign&eacute;es.");
define("LANINS_105", "Un nom de base de donn&eacute;es ou pr&eacute;fixe commen&ccedil;ant par quelques chiffres suivi de &apos;e&apos; ou &apos;E&apos; n&apos;est pas acceptable");
define("LANINS_106", "AVERTISSEMENT - e107 n&apos;a pas acc&egrave;s en &eacute;criture aux r&eacute;pertoires et/ou fichiers r&eacute;pertori&eacute;s. Bien que cela ne g&egrave;ne en rien l&apos;inastallation d&apos;e107, certaines fonctionnalit&eacute;s n&eacute;cessitant un acc&egrave;s en &eacute;criture &agrave; ces fichiers ne fonctionneront pas correctement. 
Si vous souhaitez les utiliser, il vous faudra modifier ces droits d&rsquo;acc&egrave;s.");
define("LANINS_107", "Nom du site web");
define("LANINS_108", "Mon site web");
define("LANINS_109", "Th&egrave;me de site web");
define("LANINS_111", "Inclure le contenu/la configuration");
define("LANINS_112", "Reproduire rapidement l&apos;apparence de l&apos;aper&ccedil;u du th&egrave;me ou de la d&eacute;monstration. (Si disponible)");
define("LANINS_113", "Veuillez entrer un nom de site web");
define("LANINS_114", "Veuillez s&eacute;lectionner un th&egrave;me");
define("LANINS_115", "Nom du th&egrave;me");
define("LANINS_116", "Type de th&egrave;me");
define("LANINS_117", "Pr&eacute;f&eacute;rences du site web");
define("LANINS_118", "Installer des extensions");
define("LANINS_119", "Installer toutes les extensions qui peuvent &ecirc;tre n&eacute;cessaires au th&egrave;me.");
define("LANINS_120", "8");
define("LANINS_121", "Le fichier e107_config.php existe d&eacute;j&agrave;");
define("LANINS_122", "Vous avez probablement une installation d&eacute;j&agrave; existante");
define("LANINS_123", "Optionel : votre nom public ou alias. Laissez vide pour utiliser le nom d&apos;utilisateur");
define("LANINS_124", "Veuillez choisir un mot de passe d&apos;au moins 8 caract&egrave;res");
define("LANINS_125", "e107 a &eacute;t&eacute; install&eacute; avec succ&egrave;s !");
define("LANINS_126", "Pour des raisons de s&eacute;curit&eacute;, vous devez maintenant d&eacute;finir les permissions de nouveau &agrave; 644 sur le fichier e107_config.php.");
define("LANINS_127", "La base de donn&eacute;es [x] existe d&eacute;j&agrave;. L&apos;&eacute;craser ? (toutes les donn&eacute;es seront perdues)");
define("LANINS_128", "&Eacute;craser");
define("LANINS_129", "Base de donn&eacute;es introuvable.");
define("LANINS_134", "Installation");
define("LANINS_135", "de");
define("LANINS_136", "Suppression de la base de donn&eacute;es existante");
define("LANINS_137", "Base de donn&eacute;es existante trouv&eacute;e");
define("LANINS_141", "Veuillez renseigner le formulaire avec vos param&egrave;tres MySQL. Si vous ne connaissez pas ces informations, veuillez contacter votre h&eacute;bergeur. Vous pouvez survoler chacun de ces champs afin d&apos;obtenir des informations compl&eacute;mentaires.");
define("LANINS_142", "IMPORTANT : veuillez renommer le fichier e107.htaccess en .htaccess");
define("LANINS_144", "IMPORTANT : veuillez copier/coller le contenu de [b]e107.htaccess[/b] dans votre fichier [b].htaccess[/b]. Attention &agrave; ne PAS &eacute;craser des donn&eacute;es potentiellement  existantes.");
define("LANINS_145", "e107 v2.x n&eacute;cessite que PHP [x] soit install&eacute;. Veuillez contacter votre h&eacute;bergeur ou bien consultez les informations sur [y] avant de poursuivre.");
define("LANINS_146", "Th&egrave;me de la zone d&apos;administration");
define("LANINS_147", "Administration");
