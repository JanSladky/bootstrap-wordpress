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
define( 'DB_NAME', 'adalprojekt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.dLwyEf1yujPDGW s^W6]a%GMN1G^NoZsqfHV:r(#~O},jgMzA{D;l-$ ChT[#@_' );
define( 'SECURE_AUTH_KEY',  'IK,5c|!^r{SYW<VfgTD1(BFz|_%R{MoKhNWD1z{ni2r&S^`LJXg=Y4D/{%:d(ZE{' );
define( 'LOGGED_IN_KEY',    '({Mb2)D!l0=[mKIeX 4h/+Xy#->Gdqxnj)OW@2`oEq]@Wh};X+vtb:pcYPK>EYQ;' );
define( 'NONCE_KEY',        'JiDeuH|m1;eyRJJGMjADo{68.ds*Y`wdFf`,G=k=L}Za<&O0Htlc}o{f=G]MrokL' );
define( 'AUTH_SALT',        '<hT17vU8SzbMf: x#c^B@GX}3b>G|7_?Kx~o(nxMI-)S{S4t#4(^S?!9^eTNBbzU' );
define( 'SECURE_AUTH_SALT', '[cG LLPY{d_;tw~oYE/+sW_PF.H[-O?ce*^BQw)~L$Arfwh/zq}s9QS!sVXgvkDC' );
define( 'LOGGED_IN_SALT',   'Hf0R&@Jl<~ D3z9@j/-s99UzTstQxAjY^#?@AfVnK@gKZbyI`@JG6$H*;hJ(6EW6' );
define( 'NONCE_SALT',       'rM-jo7m{Jwoi1a`TvvpM8tQuLf`e?Gr`oObn%,xO`D7)H4`A[d)GP&>q?4^tf2.4' );

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
