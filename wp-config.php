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
define('DB_NAME', 'escpd_db');

/** MySQL database username */
define('DB_USER', 'mikey');

/** MySQL database password */
define('DB_PASSWORD', 'c0p41n5');

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
define('AUTH_KEY', 'iYsdRoem ReAc2ex1 i7JBz2Tz BqCDqC2j xIcOikup');
define('SECURE_AUTH_KEY', 'XOdMszqc VxT3WT2E 5njRwQAo lkRYdzYY qpYhE2pi');
define('LOGGED_IN_KEY', 'MZlDlbrH CFfW38SV m1f3G6CP vLdXlwU7 OPfFORyc');
define('NONCE_KEY', 'NNgp3rDt 31mtjiLG ynd6YKpt Q88spNoe GIXen3zk');
define('AUTH_SALT', 'Rb6NdxrY cFzgUmas T8mOqGc2 BgcDujeD vISbtamk');
define('SECURE_AUTH_SALT', 'gYWTp7JY nuyOywWe Vh6bOJi8 Oe1mpivX YgB7apSP');
define('LOGGED_IN_SALT', 'X4hKu8Bn 5pKHH3cE yxiYxQsa kznoTN6n 8HAX6CjU');
define('NONCE_SALT', 'iAx5uxOb bAXWPRiZ 2dN1ATBm Rbdp5Ws2 JhbhuzLe');

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
// define('WP_HOME','http://escpd.dev');
// define('WP_SITEURL','http://escpd.dev');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
