<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'eugDJ`gyl!KHpxMf+N&GM]H98ra}d#[CyIo5s07yBVPD)|rXE4[1kD=RB+SCq=N~');
define('SECURE_AUTH_KEY',  'wU!QKKI(-Ifh= A]fCq[r4QbxI8iH-fw[<K;2DM?+pe_H`k%<epb2_8`c8p?*t+M');
define('LOGGED_IN_KEY',    'v:(u_(}$$39a5Koltjuk<Oz=BauxZC=FG6/=x!,9^d4WJ` w)+nF!@IbP.WzO9Oa');
define('NONCE_KEY',        'c FzrTv-iCxm1nLQrmk[|L?5u|8G3FP-GMN6E4}n[}@W[2lS`~4S^B2oyuzRUz/+');
define('AUTH_SALT',        'Tv?; 6Pgo+1`@m?.HKFZ?:^@?+]g+3Hi6[oc e`2TtqJr|e/`iDD0ovjUUP9jp2<');
define('SECURE_AUTH_SALT', 'pCYql#zF5J`j%*)sG[r|soZ)hD$rJ_,FG?j<d7;-$P*x!k(7qCT~-]5bNW,V^mEr');
define('LOGGED_IN_SALT',   'a7YxV:tn!*],2-Xh#KH@Oc|{$h6A7{NK][0?xwuB+1J&wOb|<bOpXD|] vnR<=c8');
define('NONCE_SALT',       '_Ilj;hS=~-;aw4gb:G,Oe3sb]vFD|>IbS}OPSYu*0vX<~!go(X>.2eKrjJkX{k//');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
