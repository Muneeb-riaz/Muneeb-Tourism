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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '(|ayC^:0$U{<:EiLNl-[u.;J [>/jm, rH21Cs4QL zh/p8;U^DHdG}ef*jz,E%N' );
define( 'SECURE_AUTH_KEY',  'Iq~ny7O@YQ1}%_8/l_g4H^D4cm9(,&2dD~HK{NJmx}zjxM5cx Lez?cAy*JZ@=df' );
define( 'LOGGED_IN_KEY',    '0GlRJ/L~cEp;!zX(,C;:w3Ba8BE`1Uc+=x@:o,G2S*.p)%dG%N8WkJ/.NKuY=3aW' );
define( 'NONCE_KEY',        'r!Ea??@~VKHWn~L:{f4f@kT;wc+J!i,RcLNQsG&Wd8J->.ia[<sB9Ske<`*+4Rzv' );
define( 'AUTH_SALT',        'DgOMo~}yPZXu.>TxVLXp1m OA@ ]RU=Dn;U}C,:vkSYUA=[!nbWW(t.Fa0q^|K04' );
define( 'SECURE_AUTH_SALT', 'l.=0,J #T554Q^ KCj@Q-g!p0%UJcHY7DI`.z414H>>C$-CNiJEZt}bSZ&U:b+H=' );
define( 'LOGGED_IN_SALT',   'YXA3!@xG6+n;{-1-W-Zzsgnp~Zc|yg4!s=lkwJ&n,zeW0S0<9(dT?:Gj^k}kTW6D' );
define( 'NONCE_SALT',       '=`0(##@x^rzAFPd=OGdie/]A!Atc_XRS]5K8B_5S_A:sJ/xhf,8K5@m2,P=klY(a' );

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
