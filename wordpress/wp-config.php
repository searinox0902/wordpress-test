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
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'svargas98' );

/** Database password */
define( 'DB_PASSWORD', 'Horeppoi0902*' );

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
define( 'AUTH_KEY',         ']TDp hk]Qg_ox_f4d4IRpy$g@9Fo!k0@Jua;{f`ah<!DdjtRBQ5drGp%Pj$20W)Z' );
define( 'SECURE_AUTH_KEY',  'muqa4n`MJlgi4z^B_Y^60C8}Lv:TARiI3S;~s%Z+|AZPS$<Z0A@-c%VQm:.Dhz g' );
define( 'LOGGED_IN_KEY',    ' (L=@qG/FEXs0vsW9NX@1$z19?I1f)3[FH{uu_^ZctY-^LouFKZvCs-EiB9]XBql' );
define( 'NONCE_KEY',        'Lv)e0m+ov{iJG2*|JomJ0rE(37!Fg:B}f-SuBC2>qoVTd5g+.o+Bvn!21Z8BELB~' );
define( 'AUTH_SALT',        '@Nt)xF+57fl9vBO`6ZqU[wPq-5(6h(d3paK%;uEz0Ubv7P51[jvjYoqo6eebZ;mk' );
define( 'SECURE_AUTH_SALT', 'qW2P?8yH4Luzw:F%DuuKv,B?WvnX)K-P$/rh|po2V/tOWYw#R/,2wrGfHj=g6T+U' );
define( 'LOGGED_IN_SALT',   '_ uf 0F^-$8L{)zWky+%<.!wsD& S|g7?<Ev?zp,5puiVU=3J0N%^C]&DGs#^/25' );
define( 'NONCE_SALT',       '_=NvPn|]Lq6]=`tVr_SPX8K1VIE./B8{p?8eYDG8t((`2MY5n<}+B&mHqr6LUFuM' );

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
