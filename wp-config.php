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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+2H|=4]Utux>96|Icl]3ol6[UQ]mu+cSZqy)h[litn]WO-A8V-$(w<kqI,4;oVDb' );
define( 'SECURE_AUTH_KEY',  '`;=g_ksEm;r-|L]4DNT#][9sc-)asyGJT=^|r<PO4HYq[C^&9RRi/t$E2]3eFeOk' );
define( 'LOGGED_IN_KEY',    '{IV+sOeXdH!+sxuiz0YD,lijC/M[==4vgYi=E;CLKW]a$=8^&}>9-tu>_Zm;+ m@' );
define( 'NONCE_KEY',        '=C*F>2Fu1wMr/35qQAF+:0+Jq% 8hN1ckNKNwR(euGk<X2irr,AiXm*,UglTY.9n' );
define( 'AUTH_SALT',        'L)gQ9W;eC+=2C#AkU<V6nuvUKP#$GMI((?`D*Uaprn{Wm8LkNZ]}-@Y0@OTp92;>' );
define( 'SECURE_AUTH_SALT', 'CUUnQ%l2o|>X.e1=ouM,hXDsUSd6l{hn-HofQ<EtGSeWG*g<[^>KSR3c 4i?kfI,' );
define( 'LOGGED_IN_SALT',   'umUtdatu[3Fp,.{H&vB[z/uz>t.`4naQ(W=25te.C~Cek[3_w4}( 4;*4_h~O<M4' );
define( 'NONCE_SALT',       '~Z xi8RPJ=_MpJEn]zr8oG@GhN.p;Cnz9>e$7QxV<#4P#zd5lIZ2o EYSorwH;K&' );

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
