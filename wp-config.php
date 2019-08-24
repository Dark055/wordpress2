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
define( 'DB_NAME', 'free3model' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5Fg) _Y<>8Q/Nfl29mkbVq#jxHG,rDK?2~HH/6s<FPl.&B|Wmlm5w:v.c5y(-JXR' );
define( 'SECURE_AUTH_KEY',  'o(=FCP>@V%|L-XM6Z^d%jpoDd=>k3fGNcvvRc3T(gPLF5$pp2BMhdKu`!Eaimaah' );
define( 'LOGGED_IN_KEY',    'x7^Crz]hWN_s:F|Me+H[:H&jLu]2igb6;}.[neuBr<)~|B~Up+7$d;@S1US1:0F/' );
define( 'NONCE_KEY',        '`9p;c{pPR56fMh9SP,giOj3ze`l}T#/1/t>4s^E(?h@At_$KaN[z2*p#RIcUR?f[' );
define( 'AUTH_SALT',        '^a<R9R95{0.y!<Gdn?XdjzL7~-`X~-JqBy>r|d?(K?~,d#-R KFgr6A_!w&H+F8.' );
define( 'SECURE_AUTH_SALT', 'lOg3E~vv^X_fB^ezDB<SMEEws)&WkxtiZY[1xjPQb*zwN>(%(/IoDK4-65z{>)ry' );
define( 'LOGGED_IN_SALT',   'X<]>D=(Vg&IJ {h2=v/>]E30RI,Y%v]89EtAKgBo$]n^v9]{k.U}1jn4yj@vaD13' );
define( 'NONCE_SALT',       '/?1x6aw.bVpb^1XIn`u640s_0gII1b_h%zWj2$`gRerBOtJ/VXJCMh7/*nHp3~8B' );

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
