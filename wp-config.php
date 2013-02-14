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
define('DB_NAME', 'csweek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'I1$:j*Op oC[]lr`[++%`}S|@ET-<g|pDZT-[|@6Knl1}L:P5Yi;5qU?Cp^|Be+K');
define('SECURE_AUTH_KEY',  '>-sw4HiG1 /WEC+kZgd2m3s+Pr9kQ~h`P[jVd&j+)lxv@i50Rg ,.5f3Xr7$KYOx');
define('LOGGED_IN_KEY',    'q:}D|A}c|Tx|}UQ|IDboioTO8KL$8$y4jgt{3ZP%iE&!lIRyLKs-uVD)B!(6!5uD');
define('NONCE_KEY',        '+c2`}as:xrtEl/|3_&{>+F~7EYYm.u;fNmZ4e06 c2V`nu+F<YO|]LM7x|nD>0|7');
define('AUTH_SALT',        '8[rC|Yi6fXd3pC|Rj4g/HSAEhYG<||1|%P2URwz?qf3!->|* +YCpDK>),x<fhhm');
define('SECURE_AUTH_SALT', 'D~R ksEDU2PhIls!_W}gzK6TI8%4LjYTlj4K3,rq5#F(e1%nClm.0~y#)6~k][L7');
define('LOGGED_IN_SALT',   '0%%e1>.d}^mDCMM*&9&qmCYa(,gR%3{+miQa2BzRaXd4tllrCd<}3}D |:dH(ug=');
define('NONCE_SALT',       'tQ)y)lbWQ%!+qHEz.1Xg&/ByX4=un~404k6Ir{>a}8pQb7yb+My[Y./6yv aSU+S');

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
