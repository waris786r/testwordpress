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
define( 'DB_NAME', 'db' );

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
define( 'AUTH_KEY',         '$p~e7p~Kt|qj{T/V#l.JaX;V%R&9J[aD8>{`y%aQ_9w^R#w.k(y_47m uD$([zsM' );
define( 'SECURE_AUTH_KEY',  '0-Sa=:mh]%%^Q56ksUwT_carSXGB{,8u)a7dM3#I=2Gg4O)iOj5]2_4v--bN8kqp' );
define( 'LOGGED_IN_KEY',    '#PqA}1Ql@:6TnM5B%VXH/=SY));5.f#lf0;-DD[^8@0lN;1os~@mU/$6)kA A(G&' );
define( 'NONCE_KEY',        '2;:G6E%RN4uKXa1R;%3wooLc:?dlA2/?[uxY!9%*PidPJAf0>Ojy=&A8L9i11yC+' );
define( 'AUTH_SALT',        '~e)-:@fn?Txuc-q!`uRmW,QyVPGSotnd9nW-wTQpD_!eCLL&Qb/e*<!d%@^EIfK*' );
define( 'SECURE_AUTH_SALT', 'unuiAI;dtde-s+[i%H&ah&:9WrW5Yr1M5TF&l{^UGy|yR|jc5L>OR?c6t!];bL;.' );
define( 'LOGGED_IN_SALT',   'r;%F#Tx3clz}o+}K9CQ,|k{Ic=*ccLIUw;N>kY6<K,[LPMlP9BplDfyYJY>*HOA:' );
define( 'NONCE_SALT',       '3!rv8e&d4&KuIK_}28<hh--(P`H.`C7Fi{ei)Y_rPRx}gf)0R7$A{ryt=MJJhVFf' );

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
