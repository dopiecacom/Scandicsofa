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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '30574766_scandicsofa' );

/** MySQL database username */
define( 'DB_USER', '30574766_scandicsofa' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123abc' );

/** MySQL hostname */
define( 'DB_HOST', 'serwer1994051.home.pl' );

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
define( 'AUTH_KEY',         'KSB_r/!)E9;!x3)8YexYY53=pXUOK3FGN!NuyRnC3.:[cl @4Oi0gra|%833Xm*h' );
define( 'SECURE_AUTH_KEY',  'U:|tuyA~<YDf4ow~pFY.x6|)kv[&9_y0mAcr/=i1`F@eyULIbA_dru_p1nGba`~z' );
define( 'LOGGED_IN_KEY',    'd8IP#J%fw3O&Q:(u9t[6?^YgOJh@i5tj$SXP2SK5lH-nsEzpnFr^l1`T:BhQ>KFa' );
define( 'NONCE_KEY',        '@CUCCNtJ4=TaLxim]4J#6&|2sr)LVM&kL!Xj=xc0,C?B{*#v@t8wSbo}_d1,,yx<' );
define( 'AUTH_SALT',        'X2+ki--v19tp*;x_NlAmP*v iN}8)7n}g)$Vnlhi?N!h{iPmX7owD^BYi:o5X7_4' );
define( 'SECURE_AUTH_SALT', '>)d9%H-I.1y21*a: ))6Zhfv`(#NxS~hFOI6$ehSrGRC>V19N%8hMU=5f Qd0lv?' );
define( 'LOGGED_IN_SALT',   'm&@hckXcC],vGAdj[;Qe9+w:qnGvj6:%!0n}.RXAvE>%&]%C% EV:mclCY`AB%j}' );
define( 'NONCE_SALT',       'Qb?i**rMPIJ.v);X0)& rCNZUI^t/tLRe2:u-?hS3Yks/I`eh}A(+mO<!X$A0]V:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
