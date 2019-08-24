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
define( 'AUTH_KEY',         ' BHhh<M)rtdEc!gefT^$^&NI?()#|voi20YpG}SuBF:S?UVI)!{&Mr}:|X7qXIB]' );
define( 'SECURE_AUTH_KEY',  '&b) |E2<W~z1@kX%Qazzj![lr=``LC]M}gEwQ:BA&y8O;N[-<4![3!x3*O$kN&>o' );
define( 'LOGGED_IN_KEY',    'K/4/1{=a:!9Q3iV{,)!3yPNtWm{VlI)@2U!*o}4R@(K;q|*1:/xb(u!@`D&{,/Kp' );
define( 'NONCE_KEY',        '~cjUDlyZik6vQ]FB%7YA{Y[^%ww}w=V88):>IeYn{azbC)Cw6LV+sv+FRlk&gD6K' );
define( 'AUTH_SALT',        'v384]oEIqrTuVs%oY/V7j~E@bYLDaap^M{4uK-+[Pia$4+6 JR^0Z}4#az[DsIgo' );
define( 'SECURE_AUTH_SALT', 'gG+3JD>>~%EBIOiWV^=*(2{N$ (Ru cjr<]l^*a[-djI}X6dF2)}nym|D6S@/0=h' );
define( 'LOGGED_IN_SALT',   '1bLCHu*m-p/kiW,w>9U$u231Pc<(4u.:RE)dS#]xA@{)Kd~6b./Y.DUu*B zk&Lg' );
define( 'NONCE_SALT',       'V*jYP%c1sS>aG_6&Kj8BN(6ShA%1_ey}+<b2S)g*QFX4xS-v(~LY<*k5ro~) d&)' );

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
