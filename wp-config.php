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
define( 'DB_NAME', 'sitio roderick' );

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
define( 'AUTH_KEY',         'my.bCIp:ayo+xP(w-2>eJ%SppU?-S#r{!%cy:l&6uS21knm[zv/6/~{r?|&?3cb~' );
define( 'SECURE_AUTH_KEY',  '0mDXvaH:vQ_12o4Lh4bP1P5t#SAM+_qzM_Q;9W<mc,;r?(w1JE<t#0v30:+3p)+R' );
define( 'LOGGED_IN_KEY',    '^27GUGs!?zs:99m+*_ZMjfOP:/rz1Cp.Gs%AE3s_6!}pwX=n}BLo;OXg<5c2i^Q]' );
define( 'NONCE_KEY',        '5E3clDa9h%>9zAfi2YVi1A[buA5E_pFZT[-lUN$a8xB~7 f:mriT+SzW }}7-+>p' );
define( 'AUTH_SALT',        ']tP)X7>c|{*2O>:XH7_$aQCrqz~/F?vr.?k(!E%P?O%6z;4dKn+K%WJh71 ]!I/ ' );
define( 'SECURE_AUTH_SALT', '24*>{/l8V&qb`^K1ba8_DHbR}#[R0?tN=7x@o.ZoE}wf}]X!:MrIrD8XD?&J8u$%' );
define( 'LOGGED_IN_SALT',   '&aY|?ab|sK01b2MqP+MAd9EioJ^Kfeje_GKoFbmJu}RmHtd}Os-,Kfm>@6:1o[>T' );
define( 'NONCE_SALT',       'KV?JdyEnxvC0=~<lVd+Z*{ykJs$xfmCyqGs1_;,hzV5Iifm?0t_Y*pa=_q VHA]m' );

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
