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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'b7,FfB ,]My:.Tb}UAJcN95L-T()7J{&X(o5!swWhxktKKH54;)3~Ol+2}AT`1U%' );
define( 'SECURE_AUTH_KEY',   'U~J3!7d<R=y&OVy#|%zoryu;u2An{Vl]$-[-2-.-A!g}9}9x9PHPUXEg}5$a3EDW' );
define( 'LOGGED_IN_KEY',     'mY9W;>EP/@bqAQB}c]khpDdd]dmMzl[/wX;N}5-bR=T]D?jvW|b6zh ]=E0je~IK' );
define( 'NONCE_KEY',         '+u2w_SW827T>xzF!na+SQW<D75a_|wa5.O,&H{BDO&h>M7MWV!4[A5<IkU&w)fB9' );
define( 'AUTH_SALT',         't>BY*{mSLhCy^v{Tn2:,!S!BV,!QpiaxLK2XVCNV[~ua]#[E{c$2xBh |1)FR;#o' );
define( 'SECURE_AUTH_SALT',  'hV`+(v!tP]Z;f>,%IZmXL^2]_xM80M[c_C[gFd-`*^s1EI`HsaiMruA9c~e 3 -P' );
define( 'LOGGED_IN_SALT',    'ht9ulQN)`kGNE5^97$7W[Mh!_FO;?b0q]J_nz>x8GI@wxAMb+cYc|YvS9*nB9t}y' );
define( 'NONCE_SALT',        'zv3M%Sv4:k^]fW$*?OW v}d6h4N]nq0YmQe0rStiz>0s;xW*5~Hy8B)4Nq&!t:JB' );
define( 'WP_CACHE_KEY_SALT', 'sD+~IiPktE_gTRffS0PJZB}<0O<gREB==C~Nh/-PS%m5|OJXzQaiEFs-.T}51ho=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
