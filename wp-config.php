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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb2' );

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
define( 'AUTH_KEY',         'ivLo@}*x^mt^b5K,I[KBG/S;CfCb+1X>;-( Qy$um=!T,#T[cJ7>q}S;+F`7s!Ek' );
define( 'SECURE_AUTH_KEY',  '7b]hDE^hH_{m99lQ0^maO:lIufPc,AvE78*qny;K~s=DFQ6M0LezhgIee59d8d<]' );
define( 'LOGGED_IN_KEY',    ']`LfvR_{A&B3#ZyLQtx]9Jl$.rI%fi?t[V0*O##0a&+*R<jLS%!ZJxvIJE1A{PY*' );
define( 'NONCE_KEY',        'uj!fY&X2iB_WB-&`sq%3L$Q>yioqUN25ABi2BBSSWBe*_D3}e5/m*[^uDl29}q2Z' );
define( 'AUTH_SALT',        'D9Aj~X3F%n$u5T%/x>C<G,-l=d,0<Pfbh|Sw/WOig8s;$L1JhyhQ|9{16~96hQ70' );
define( 'SECURE_AUTH_SALT', 'z<c[j10sT.Q-A&M~vQXaXu4-3Kb<DMCVpF_#>ZSH#%q(c!Vun#S`m^C/vKW&L99E' );
define( 'LOGGED_IN_SALT',   'oEP; >X5b_u6zdU<sKl-*w}XxC$<>=@Ph$<cT9+xQEjYLO^q3Yclx`oR7N~DoaRz' );
define( 'NONCE_SALT',       ' aQRoJfa,5W6!)?^]A_<6TgDMH<t=g@wpQ<5NEjDf`?F0> -Hx&@ Ju|C*f7anUu' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
