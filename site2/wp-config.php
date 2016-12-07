<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Idrisjtm42100');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's+-#1J^ARr94qyJmQR8ah;.7f#1&9rj;TOWR;}Mzq;s?{/,$F.@QNM+eZff|!|Pk');
define('SECURE_AUTH_KEY',  'd;h/(u3yMv!nV|$Dn-d0AihC9+`zPQV&2/d;~hi;pKmLfg&tWktX3nv7OZVUBqyl');
define('LOGGED_IN_KEY',    'PcHWA3 ]b%yg/>bSkf>Zz.iQh1>I{pGU3;!#_OhW{<7%abwSQHel>(gG0~Zlp>3R');
define('NONCE_KEY',        '@6[Dcy.+d*n9CLX%GGQJ#h9.C+~[U>?IH5Px*i]p1EZhFOiuwa)0LN;r#9&tQ;Tr');
define('AUTH_SALT',        '=Q;x9dplfNo-~~f&G4I~B0i8]OJx}wu%5SA8Xrv$43n;< lSF9TNXr/r)Ds/9w }');
define('SECURE_AUTH_SALT', 'F!{*~AvLgxymTwSPvVb0Lw1.}i]%cWpyKtE@qF}^5lO</vH%qh1Af[CX_wiD#Ib7');
define('LOGGED_IN_SALT',   'ZLr%Xa?B^v[xI731o]EDgsD:8cuu,zw!@bHK|^e:q)8M)m. M8-.BG:w`a^D;8%(');
define('NONCE_SALT',       '4sOCp4-X._;v,wfBi>{,Zo|ndB)Sg.[HnQT!`?)l1lLJo*_}o)uQ`D|H=?#W_|@,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

