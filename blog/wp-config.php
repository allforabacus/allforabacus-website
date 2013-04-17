<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
define('COOKIEPATH', '/');
define('COOKIE_DOMAIN', '.allforabacus.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allfo9or_abacus');

/** MySQL database username */
define('DB_USER', 'allfo9or_abacus');

/** MySQL database password */
define('DB_PASSWORD', 'turingmachine1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd4XXkH96#&K{S>F:vQu1-eIg#$u[di`kh-k+`<4BY|m4g(:gMC*SRMcYc6CsZbe9');
define('SECURE_AUTH_KEY',  'C#%jz~g)DEwsGg[,Uu|u$h/Zy88sj$|*Ss+ qY39}/lz.*jPJy5X;~.L/71+rUxI');
define('LOGGED_IN_KEY',    'YP(MdeO6P-e( ZE~I-*X9Cb6hi?|BfC,z%|aE*|EcR.1[tE]8o,$nKSV)2g.C)>(');
define('NONCE_KEY',        ';(:O72yh*-LvxR}5GO`!?yU/]T2E}+Hfk=Am`6SrJ&FYuEu`IS?q%<C{DRp-iil.');
define('AUTH_SALT',        'WsI4Pz._r~(Sscz+el4.l*hw&|`#BFo;NHq;IEz<v@#!v7?6.,DcPrJuDQ^}PFw|');
define('SECURE_AUTH_SALT', 'wSNU j6vwnm_g]? enL$isZ~2=b@zHYNCscfq|.S+m1z4#8QI+M4q;Q(5:.F$Qn}');
define('LOGGED_IN_SALT',   '<U1u_L2F>!sQ>g*hZG)9i}IG)ooV55D%DKivy^su]aTb#`Hh/z#eka eK(]|lo+C');
define('NONCE_SALT',       '+a2R1.zc-N6u~Ym(QE;hFW:B2N(X-^CAzb|R9zOG05lEe3{BkpqLhI|uSmSj?Iwo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** To allow redirection from WordPress login to Question2Answer **/
add_filter('allowed_redirect_hosts', 'qa_wordpress_redirect_hosts');
function qa_wordpress_redirect_hosts($content) {
	$content[] = 'www.academia.allforabacus.com';
	return $content;
}
