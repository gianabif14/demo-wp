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
define( 'DB_NAME', 'demo-wp' );

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
define( 'AUTH_KEY',         'N^vqcq1A|vhHckhuiCT&8mr5CtW*!h6_Ip-LMDB*I>O&we{RCG*!bLm;3_P0s?OO' );
define( 'SECURE_AUTH_KEY',  'Ia@:?N-/7Qg+FScxNQx6#H7)4%P @%0/E:MiSD0O*C!4:H(4K+{NhBXuxxVw2zW-' );
define( 'LOGGED_IN_KEY',    '$9;Mx3;=z/ub>fVU#HnEKS[X`#*L#BDFsAlJpf&5|p=k_G#tVT%t$Y@?VW{9>aCr' );
define( 'NONCE_KEY',        'mQ{%M=do*ROGi&(Ls5m&A)VNm,J?Q@eD,UM(^-c6VO&br+p%uLIvD&jVzeTjj[<:' );
define( 'AUTH_SALT',        '/&&b!;8$E *=Lr`O0{8r1(5Sw9RzW&:Wjb@#S,q.FV]MaKP>l^09[64>OT*]WMbq' );
define( 'SECURE_AUTH_SALT', '=I7Jn$v/WDrQTeCd,Ez=9f3f!aU(y,vT%j8[npev@#@huO+1L*J4GZmG?m$[T1G&' );
define( 'LOGGED_IN_SALT',   'rmMn(gE (;DZyePUN}QG^45Z9:NZbju|Qsu^6Kt1aw1BFr88h?;=6[dd3o 9OVt_' );
define( 'NONCE_SALT',       'cwY2Xp_+&6=&5w-M|FD$3c!8^eKf?Y.X4IOm}wMkj1 (Jf;O?7G$a_yaF5= ={<y' );

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
