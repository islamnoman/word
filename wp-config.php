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
define( 'DB_NAME', 'word_db' );

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
define( 'AUTH_KEY',         'abINPxRE#s)*PJzhh[r8e&:w+H1JxLVG jFGqvOKaY^_x|zjAn!][G~.wukAM!X>' );
define( 'SECURE_AUTH_KEY',  'Rw:BfC.p0=HOj?#j`f#J2YYNJu$I@;O^j}JhCZ; t4|_UaRXd*R-ucDT*X%);KU{' );
define( 'LOGGED_IN_KEY',    '_dSQGXe7dw}`QmGn^22L*IjoR]to:JnmDz8#.g1$uyX7^7Xs;@&|iHGwmw9wU[,l' );
define( 'NONCE_KEY',        'sz@b`EzNdz-Kn~X~2Ww}(p=8h-BUtc?f6,UrIGJ)D;)+[@S~VTzP:]XqfxS{eOE0' );
define( 'AUTH_SALT',        'QEfT}wdgaN++Sq+^yknFy)KLT%[?x,xwIy`R)?S:2iO#=q<tD_VHmK&loBWyW@b}' );
define( 'SECURE_AUTH_SALT', '=oqa,^t^kIPVW$}f]/{)XOecGpOS,/^#-V)p9Q57_,+qId&Vo{H[B%PDdp:ymh1+' );
define( 'LOGGED_IN_SALT',   '?avsjiuo+?KPW|__0fGy-%<36UNT+gR2c3N[#.Si5bu#K.#5$)QpnJ`s(8&9_F4E' );
define( 'NONCE_SALT',       '9oH=Jn$t?E;hZ)-xM3{!kPrLHHPDC)eSOSXC7hL;X.(0m)Loc_(cRcG*xJf&gMuB' );

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
