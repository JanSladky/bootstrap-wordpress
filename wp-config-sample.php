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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/A>vS`d4F x!E2-q=s!UvA^`aTX]x(CKz@*)1f|_Tcw+:yLFVSP;$pPR-gDX_)HS');
define('SECURE_AUTH_KEY',  'NQ(o|~jpTk?u23[TR?O4>4 /M++|r(^f.+F+or>om]vCYaooa~1tw{G+CYG+f{0K');
define('LOGGED_IN_KEY',    'PCuZ2`v0.BD^EPWk#`8(HLW)b%9IwB:aW3Q:,,K[exaa@-mw|}?)x^*o|y;ZRQBQ');
define('NONCE_KEY',        '%96=|waFY.xYW>l4K9#^YOI|Ewm`nJ*6dAAkhi9MKh iZ_a/W3-W=/5g v,:|Z!9');
define('AUTH_SALT',        'p80CtRD[[|Xn;}IiM`{5$&CCJ:@qU{<|D5)fW5^%Boj(9F]J(~>0h-}1hR1Z98##');
define('SECURE_AUTH_SALT', '#ms4)|zWPr-q#`[9dTj8fD#<4LljI6g9g.O^m)CW+?m)S9)u0M=e4,kU]&|VLdS=');
define('LOGGED_IN_SALT',   '7~#%0~(&gg00tqUl:uocGS8.zRl13y9if`{0>$iy6G|jw;AnL3?Pu>]blYt)c-M-');
define('NONCE_SALT',       '|@]g)]A]+h,/z)|,|_a8q =txIS1f<JWr34(v~+w%@7s{rNgiWb,rS8c5 Bo{QW|');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
