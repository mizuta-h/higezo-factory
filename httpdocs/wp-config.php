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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_tlcz7' );

/** Database username */
define( 'DB_USER', 'wp_xh1gu' );

/** Database password */
define( 'DB_PASSWORD', 'K5wm5d^BzS7lH@4D' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '|!8J(~;4G&P]s]Sgri|1C6+n3vG@6l+9l8k#9qMVJWAju136IPm!:_qk~gkymQ7)');
define('SECURE_AUTH_KEY', 'F7)D;84+4A-%)mXZivsx2&E3rqgXN9x*(++xf+8Vt-jZ#bN#V2[rCJ409W/H)/[6');
define('LOGGED_IN_KEY', 'l-P9t+495O[qd0!+6u&%3~zMd3n5WW1*#Z6;pg#(2kNh8EM7c7J_j;P]T56|8*#u');
define('NONCE_KEY', 'Mzlu7_pd&iQ(pLb_5Cj@&&)K1:-4|dE(g5c9b_6G1i44!5~gc8@k-e|7wrP6||kQ');
define('AUTH_SALT', '5;52n&Hzn#090e7)AGWt8|Y8Kuq@LuH_Lg%5|hob1b*s4|!)8#bQ!0R::p:0b-;G');
define('SECURE_AUTH_SALT', ']2t4gI;2l9P74)&2N7HvvfQ~TwVi1PbY%]yyw(f#W96-NCcrulh!D+]2[[|pCnJO');
define('LOGGED_IN_SALT', '+Pyo-670+E0e379xr255GRUb|t1o%qVWU(gI75**n95257g]7tswYthwW44sh6yT');
define('NONCE_SALT', '@1b6aPy]m1bb(:-Srd097zV3pLIMN0eNe-6-9z~X&v_cSQjFi/#i9eKT+_A9K32t');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Fxdv4SW_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** For Debug seki20250722*/
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );