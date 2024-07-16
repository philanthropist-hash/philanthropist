<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'philanthropist' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-Nbc6:bi+B+rU3o)#l&GbY=W!idGmnLoA]Yp9nF]d`.vo0J U>?[[>GM!},hxac;' );
define( 'SECURE_AUTH_KEY',  'ri}HShFke-I8l88EtlRI6!RlS#~W2m^7kZUEh2>9[&3@/)!W3v`;P_p7O)Fd9Uw<' );
define( 'LOGGED_IN_KEY',    '8 K+_X8:5{+bWDxDS[%[Bc/Y<~E{$,Qe [b5n(Glo:]pP!/Un W!!H*O|V%+L*k[' );
define( 'NONCE_KEY',        'b2s1^: ~i+PTy<%|Yc`M*(WW}9 <5SuTX4#`nRVDpL~u4uAgk7J{dl=* FSO;>z,' );
define( 'AUTH_SALT',        '@#Y;0&iMDB@GFU~v{5CGz#BUpJy7yoxiHE|.O>:f@qeA>RdwI=]H&oNSk1(1wmvB' );
define( 'SECURE_AUTH_SALT', 'dn01/W*[WL325bC<d+GN#ff`Uj%r0]*dVQu9uL}m)(2Z:w<N)DoOZIQXHL*CP|K;' );
define( 'LOGGED_IN_SALT',   '&=sD@z-ZW[cy$D]mh,mE+f#t>([|[en eoOIFnRGE0L2e/x>9sULrc;jAtPB+K1@' );
define( 'NONCE_SALT',       'xV=ik:kkk+?Q]oq2MVLJy>99LFfs4^R@x{?7i]m7tku+c:-7L,aCb0C>1+CHZDoH' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
