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
define('DB_NAME', 'maximaid_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^b^XNSuU@w=[NJ!3[6gU`>z,;)^#u%GNs0 .1@8C4o&0F({mt.,pS-tzu&}42++0');
define('SECURE_AUTH_KEY',  'f#VA,| I+asOKQ~0/qH9d1`HHSU?+c$0TMf*^K!In;VL1e|g,sg>@=LwTm.b7.0R');
define('LOGGED_IN_KEY',    'JET/>yUz_EV~Pp+M@cZZ<rhzXkiw|$2&u3SPzE|rZi4m?wsm[!&@Z q<n /?j;^r');
define('NONCE_KEY',        'KE=BTwVQ*0x.vs`Y_?02d:4v%3_:ir;BW#R%8?BBRG~}BZy)!d,V``l!e$SwAhYM');
define('AUTH_SALT',        'U))DO9DD>9K*1)}0}(Pi8~lG,8t{,81J!}jwI>boGk6+FSyhr.ewL{rMswx7RV{x');
define('SECURE_AUTH_SALT', '3{30ZjtoYBeabLMU$lL=n2.1uwMVjl.( >I;Ky1FKg[fD&k>|L[if`aZ#fxWSZ/a');
define('LOGGED_IN_SALT',   '8)QDc;^qJ@+M[-ZO6{KE],KP/HJ=&u7ZoZo!c8rtX!H. $zH,l?U+s@$A6W+%opa');
define('NONCE_SALT',       '!@u$xC-KikF`MB~#(VY2TCa2e w/HrR&^X3zmh2/84iUgM$Zxw09#opuUpL #Mze');

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
