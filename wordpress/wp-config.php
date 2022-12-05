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
define( 'DB_NAME', 'test_simple_website' );

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
define( 'AUTH_KEY',         '.PWvcS?2np=:OSVS130yw}}dGzW^a4R9jU4x2-N4QEfNGwa|bMJI5wdLTk~I9y_H' );
define( 'SECURE_AUTH_KEY',  ';*)1Ou2wTV]wCc{o5#EDipM=f|n-?=80o;25cUqE=rrU+P9Jy43:W6<oAP?s@TvD' );
define( 'LOGGED_IN_KEY',    '(%oB bAx1LP#:Sl0($4D!Z@`HNR_H`mYS#]1T{E[5|Dv8|5AjAc$FA@5Ib;xL@&6' );
define( 'NONCE_KEY',        '~G0YnL#X,h~Yzf{G[}kA@<YtYF Ar)a.q=6~Q#l@;qR+8?|VXG4mQ)>:Ysm-MPg^' );
define( 'AUTH_SALT',        '$XyM3~dq$:Hf|UG2WRW62rT0/^ ^{@9WMYc>+|8Y!o&-=DWvX>?|h!Q{_pjrRz3g' );
define( 'SECURE_AUTH_SALT', '#4F$F9@Rl6DUf] ?MT2k/?@{[MPpIYYZ<K<WMs>-^f:8n<hX]~bsb/e8z/W*Ioul' );
define( 'LOGGED_IN_SALT',   'YqjX*~esfK=PXwl5Cs57,l`KZ:wW7/m+cI/^GqUKj9YPz/ooB,7Hyn7tTyJ7`=}|' );
define( 'NONCE_SALT',       '>gUI Sw%c#O[4|3R?1Nw$vTw-&(hg`CkQ]$h_1xXABQeAG?UZliEAB }:A:Lq1yi' );

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
