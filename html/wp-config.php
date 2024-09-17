<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'pIH#@!N_oqx({b*/B9a|yo1z9/QUGi[!<^A.0T-UM`MJf$Lg[jP4^_f_&]-&TWOl');
define('SECURE_AUTH_KEY',  'C~_u@Nr$,7gLP1zUgpD10efC9Okr?jp=^~L.j.}^Ugq.uqv5&o[&v+cXBr+6`o{X');
define('LOGGED_IN_KEY',    '38xo!#g0tMZ[%gw(e5NazV6%C|CysKs4UhV@LE[-<^|i+>16zd%_2fDbvCy$5>>u');
define('NONCE_KEY',        '<f6}e}4-{e|7(_F_]g; ]SqxI>Dvu |+ANJ+`WHH%Pb_#y2cxs;YJM.9{7h~Gq9?');
define('AUTH_SALT',        ';>(unYCZnxJ[AM~jUAxwHeTtkwQ|J)a=$U@Arbn#-yuD%?Qkq-wWcWvgPg2%}J2r');
define('SECURE_AUTH_SALT', '$eLz!USq-m-*`7#d?[&-4Ww}7p@qw%$dr@B~F#=-zXf]1=3U*@5O{?2u=af8a /H');
define('LOGGED_IN_SALT',   'd8N#0TH,hd&?tyw=2#?D7T&Ky11]kaCfMR+Qf=@zDQ3qR|`skg<;rdK%@(YhT>z^');
define('NONCE_SALT',       ' q!+ Mz#YhnLvLt;>..F-N$VofJ44l|%-epwS86WU#aZ4e]l2wZ5 s!L?L]WX}}a');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
