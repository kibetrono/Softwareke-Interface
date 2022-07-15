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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softwareske-homepage' );

/** Database username */
define( 'DB_USER', 'kibet' );

/** Database password */
define( 'DB_PASSWORD', 'Kibetrono1996@' );

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
define( 'AUTH_KEY',         '],WP<%&>V/iibgl)|tM?*=:aI*N p3]0}?4w xiKt$r~.[LcT)&O0N8IxY3ef+},' );
define( 'SECURE_AUTH_KEY',  'Yo5%f.:s2)$YI$wP?e[9oCLb$>9^Y,_A2IxuuwV6wmGAyIAb!s<  m=.[p64*pWB' );
define( 'LOGGED_IN_KEY',    ']w6imXSzEvpKS(^4.c1x}wYjuk$McN_BOt@+G|2F=-DeJQU2.pxU)gOJ<$jf;skd' );
define( 'NONCE_KEY',        'w,^grWu3K3c1`sgWRJG8O]aa&KzaTe;VLV08(N_P,n=k81%VzJ?>Q20@e*<{(KB.' );
define( 'AUTH_SALT',        'SV@J|7:CpvTb8z`fkKfjHCH9z%MzH*=+)UvUM[r?eJ-cdSa?&`L6_.teL3M+[bq7' );
define( 'SECURE_AUTH_SALT', '<-b3k2@|fr`=bblp >HC<&0o6R ?c5&qjD@`T/=!YXb}w34tM5NFO0(u{5Sj=)%^' );
define( 'LOGGED_IN_SALT',   ']p9uqm(ti:)uNr8: x+{5ox6:vf6eQ*a<@:!1MW!PTW@&~O!P|.8<F5E!~(`Av1O' );
define( 'NONCE_SALT',       '3zCiaRXrkh<]qmYXOoh?.A[>JK[+w{fhUXfS_G!<7:[/,)WjRe~38lB5cUZMT9%=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
