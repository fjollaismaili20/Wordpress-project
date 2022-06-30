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
define( 'DB_NAME', 'eshop' );

/** Database username */
define( 'DB_USER', 'fjola' );

/** Database password */
define( 'DB_PASSWORD', 'fjola' );

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
define( 'AUTH_KEY',         'zr20r)Ltv!AI4m7uEiEZgGi.1`xiS1QN*8nHEYMTHY`/0Qh!o6EA^RHwG1-RyNB;' );
define( 'SECURE_AUTH_KEY',  '1ya _h&I~3vDd;nF[=&$48PF#_umpC]$?=4OAg@Z}vach(5]1|@;JrRt2X(bdgpB' );
define( 'LOGGED_IN_KEY',    '+=;7.:8 `yOq7dL3q:m[MeT281vQJMml8?26Fa|.9R1^!iy4S4y0Q3BU: r=e8HP' );
define( 'NONCE_KEY',        'c}&pMG)!bO4B0kvlHJvh?1e`dG}TXb5O5}9zs`)|G$o)ZVA{`6-hmE;Mg[qeV4JP' );
define( 'AUTH_SALT',        '}it!&w_yUF]}KB t0_ZZk0D0cu%ZK= W>x/)S`^PG[-jW$6qxC31Lm0M`oHn$KVv' );
define( 'SECURE_AUTH_SALT', 'X=`|M<;?:C=lOm25c<GSdT5z3,n}O/6Iog%3.oun5wOL(eIGQX2@6hBA&R4|Ba{+' );
define( 'LOGGED_IN_SALT',   '/.oo4{jm !1>.XF>~s{<p#%#e<e|QU2-jGGXQTDM<qA,ohl!<yjdm{<!mM{IQ`(`' );
define( 'NONCE_SALT',       'L=`mty=,zNgDk33ghqg*>Tw!-?&|P|>v2;Jf)l,?c+gWmBs(CD h6}eWrSo}uv!)' );

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
