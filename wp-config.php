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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '@7}Uk}YkxCi6r)-7kTuF9$k|lY.^CWyNpn8{DmvMQyMd2(d-NWL2+G}!U-J.IY:O' );
define( 'SECURE_AUTH_KEY',  'yW%i l.L]R*#PE2ZS;u&52S$2pJojE7Q-SaS),J#mpkD,;*|5~Eghb4PnKFbmkJW' );
define( 'LOGGED_IN_KEY',    's6 !`tz4]1kJ[.1gTH|[es1rD}BJ5}?91/.pUaRJL9VOnc<9#f0B(M%F6D]bj/3p' );
define( 'NONCE_KEY',        'PD2CuYB/D-Sc(,90kcp*63$PDBQ|Av6_5Bek,YLMHJ= aqZU2b?=m3l06E2l)>z7' );
define( 'AUTH_SALT',        '9xOy$knkD[5w*3~+N&= j.,BHYO[w+)70>heNclV3mro.hg]g0000Usg&#-nH5qO' );
define( 'SECURE_AUTH_SALT', '<sRdn+k=b[Bf Zal6Ax]Z$:J1f)k09C7Byrxm+Ggh[/lDU&FU?1*:X]TCDUyrv4{' );
define( 'LOGGED_IN_SALT',   'I{N,Oz;YP{Ic2sM2BDtv&YNv*$O5[K`o<>d/7,GYtpA(1)uQQv(li/;?AAQ.HOip' );
define( 'NONCE_SALT',       '^OT0%TqdX=K]1g7~L~C[`+jGBIUHB~(h4mRoat$XP<)9,#g4]TuDY#mk}M#t~5qL' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
