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
define( 'DB_NAME', 'wordpress_tienda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:9306' );

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
define( 'AUTH_KEY',         ';s,MKnx4:lDDblIku{=9<^REb0I?3Fg^{mabM7W?pG7hRQnScsYNrx@l$Hm]6a~L' );
define( 'SECURE_AUTH_KEY',  'I~)tyFV^:?y4<N=H]<yqBwc&}.E;J`;.yUm^`DEWI`_$,=yF_shZl0Nq_4YUHio7' );
define( 'LOGGED_IN_KEY',    '4HhMudFmK22A1.ZUci.`tbR+!in[xC6QP$a_MtS<B.h1^]|=qxXFh&sV_(b4}]0G' );
define( 'NONCE_KEY',        'E@]k=rc%[Yjso%r5DGE$ia3PEUtD?j<[W*YtCHyWgI1wmjmZ>wNfSF)}(DVF@BQ7' );
define( 'AUTH_SALT',        '5a#g ;mj:_MUhc*H<2q7@@W734{w;#wqU+~=qSDa(Ll0wMVF6RUOh*~yud{o/k6o' );
define( 'SECURE_AUTH_SALT', '>|JLSg4l* jh+NT|tG|0/bf6IcePc*F-WArju}L96KZbqgP0Oq.L3NM.?^uGx2Uh' );
define( 'LOGGED_IN_SALT',   ',</]ZxdVv>uFWJd4#jOraxjv]8~P ^2xR_>cVfU.>}@ok,A&`<]+<8#ntadYpJJY' );
define( 'NONCE_SALT',       '&2(j@lF23Fs y=}R Z0u6 -]UtE48atr17JW]-7VDHIk-9UQ^Jd>kC0&h$tax$Ya' );

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
