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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '1stwebsite_db' );

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
define( 'AUTH_KEY',         ' }sC42@sI0N.A?y)wNp^<F8,kP*wTq<pIC>YeK.!UTt5${XAxZ#11p7J{4{%e|$f' );
define( 'SECURE_AUTH_KEY',  '3.@!viCsfNj5]iAAZt6.^|#1ef(,/4TH^C)&Y{J[/lKo#x=65y+u*vgCCR<jFQ3[' );
define( 'LOGGED_IN_KEY',    'wJLF!jd;j[E~uEC$onm4sQlJb$?G-uIcc:A^Z3CcNuo5$N`e2HU(D>lif`VzxR0m' );
define( 'NONCE_KEY',        'W+d@#JnJ[2r#m3[YBjP?yLI:-a0!R%cMj+bxnp_*x6 }|=BT+CNuD&;O!~O o pw' );
define( 'AUTH_SALT',        'rR-bx~2M5Dn#[lb3OjT>kn,`aRMLTTvCn!RxP:|Mq1J 0/3a.|(qr~lmp<Pd?57t' );
define( 'SECURE_AUTH_SALT', '1X$Jc$r~D8/NVlqy$(2w9&6Dq:qU5tl2?p6NPFvHehTK(XnX+%A<=.h[*OUyER,d' );
define( 'LOGGED_IN_SALT',   '2YF4l_o0m-sAUED/BK*z@)P)gN^m6C/A`p{&q*)RtE8:c[I=i_!%gWApZ1qc:&CW' );
define( 'NONCE_SALT',       'v]XYj8jpG6>Gr^MpDHrq= 1Ei0>F.XA|4<@!eCUUlmX2W!~9cE^W>~[eAD^rn,;O' );

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
