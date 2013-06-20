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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_tests');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'e{/8$_:U|31[.ewMS(a^0&-t*d&i=!G?*D/x>@+lf<3jI ;/]nvd<oSCf{aT*I?0');
define('SECURE_AUTH_KEY',  'ldIZ_-p56$u]<{z@fk{gO{9S:`-~Jg>kAyyoheA*^aBaED>e5uBRxR*)Co5SDaDL');
define('LOGGED_IN_KEY',    'Nl#=*w*yve8f6wq8sNcm0IGoOIS)*paDg@[9blKR]9k0CK=i@hwMpu9z9C3{&`y4');
define('NONCE_KEY',        ';7Wo<Q[Xbz@1$I/E#0^Dllp)Mv2f<<?z`R#xT&O$<by%-jFKy-!),6ZUDK=n<??Q');
define('AUTH_SALT',        'euvSP|SBK|<(6`4@1@@n=<QL7oWjkb3_H:QNx~3g7&Yhi^9fvKV)R|zKOr7 H<.=');
define('SECURE_AUTH_SALT', '{ n-3t I.90Vd*m40cWJNyF1A[[0S36;Ep7I}=,#9t{[Pdri+r p#A5<7n$n>iVr');
define('LOGGED_IN_SALT',   '(,l2X_(FV;u4r%s_{-C)zdJ+1pqZ!$X].mBL~r3ERP}eP]q2JY:V~oA,ZMo]/x^j');
define('NONCE_SALT',       'rhMpY0+F^5C@#,X8 3w8iL 5 C^-L)o]_UlqS,tfij2-^0*?ZDFGW){D[D0}.,+}');

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
