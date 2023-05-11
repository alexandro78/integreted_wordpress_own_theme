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
define( 'DB_NAME', 'integrated_own_theme' );

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
define( 'AUTH_KEY',         'ZYqSWE8pD4~Ero q.9Wp|3oh-RljM|i+4qM@-rh3@sx?[T0J$Gd;mN*a%r38jsNy' );
define( 'SECURE_AUTH_KEY',  'cV8FXEqWrIcd.gg*)fHp&x{uDQ<u*-tt7O`iQl@YzYPtkVy@0hM}d5Pum~si.Kk.' );
define( 'LOGGED_IN_KEY',    'TmL6+ gydhjq}VBqJr619HK_z_ qe@]>K<1!<t((Er|$iENfRKX!v]4&,pZ2QZdz' );
define( 'NONCE_KEY',        '/r1&O74&j?s2PYf79u4Y?`B.9vT ,9j /O5l;7,U33h(s@=F;pIP@a*[-^hcZd&S' );
define( 'AUTH_SALT',        '4*-M[ikhI3$sH<tD8 i?oDrr!md:<f-uv3[+:+u?>-dbCc$q{RTFiVo=fA10U! .' );
define( 'SECURE_AUTH_SALT', 'IZc`xZY2/j~eTie)P;n+9k(bSB-A$9O)JAEL8|KL7m!ch,,_Ux>I;bA?uPjut#ke' );
define( 'LOGGED_IN_SALT',   'qfBCY#n1V#-v@?#8nu3eia?RJky61pj;Q_fI;j2rX-eg9$5[w=&U(XefN:4eZy+M' );
define( 'NONCE_SALT',       'o(h8tfW2Ico^7r|y]|54;g* WI+/E65Cdx*I7%:7#V}JQ/ !)kORh$L6s(s?ZI]p' );

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
