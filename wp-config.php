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
define( 'DB_NAME', 'urvap' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'fung6688@' );

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
define( 'AUTH_KEY',         'PPj!`y=!#Bdk9/Y@O=mapCVwYo<]4!<p508eEt!k yTr)S~>y(q(z/o(YRl=1}X&' );
define( 'SECURE_AUTH_KEY',  'd2?+<G@-9leC<u]]9np2B,ZYW}4pzhDGV:-My?a_QVgXHO9>8_{R9hm6vZ5*G6+;' );
define( 'LOGGED_IN_KEY',    't<<pnxj=Qn{hm,?W1c:CL#*@uZ*VFJr`Q<qOJpJLmfpY{SZWRHi(W7kD3zHX%Ah7' );
define( 'NONCE_KEY',        'u$Yl;HknWKnk}4L+fV(iA0Wp_/[:/|F@N?w*.HQ>6&0,,!pdf/ox{&cVv/9`F2>J' );
define( 'AUTH_SALT',        'm$o`G[-{7i8,=Sh?o^S zL^RZrxosIyfU7Y@mX{(X2@&vBlde=20,L/IC$PoYQ2Z' );
define( 'SECURE_AUTH_SALT', 'mr[[OP0d{^z;Jbj4aaP|>xxev 5yp&-kn118=<O!,M}?zpw>a2AmEe0*)1CC8jFr' );
define( 'LOGGED_IN_SALT',   'g$waE^.@R[65y=Zn=Y#hg%e,m,)D3.#Mn%#mlu]:A$V#8&!fLjrQ:4XV/fv/<Tym' );
define( 'NONCE_SALT',       '[M|L<iO3$/rQCwA3|u#2Wc4.)R8Kq/|udMx9,$H^jd{DR[~vA gUxaSJ4i8Rm1,g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'urvap_';

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
