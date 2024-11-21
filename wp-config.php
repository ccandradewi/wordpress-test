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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         'Fa44T~.e~&:*7)Uo<R2Xy;%1>iF.kY@$u{p?rqze2Vf:/,%|Nt=O0N6df_>GD.-N' );
define( 'SECURE_AUTH_KEY',  'IbEDN,WVqe LeuN{,BDAZ!;,.Y.?v+f=>]aa8B-R!$$a(974/gH<7Ycq1Nm<{3i2' );
define( 'LOGGED_IN_KEY',    'ZHIH$6)k%wmfDrj[!jk,Z&NpY9wo,=& id[K`7S(94RW2=jNGhNrUJ#q;okAX`:O' );
define( 'NONCE_KEY',        'u-DL)F.L-YMJp!/~K-g7KO;[/ZfCxXD/{O))QL`D6^rn1dXy1sB/gzk^PT::o;V^' );
define( 'AUTH_SALT',        '~5W{XX8:(6_}J+ia4Y-x$yj7Gr|%0%A1eW7)8v@C*[!#)8usK7T8Ax5Up2qF5e~(' );
define( 'SECURE_AUTH_SALT', 'd{!EY?oyWPSy&XlBp9&+bVZgD`? W-{Zb+RX9%:1H/S,@):[(@O5(az)*XpDf-`s' );
define( 'LOGGED_IN_SALT',   'G|HuYJ5x0=oP 7O1ezhC<?#?i{0<scS@GYEsLpyD,N-1<9EtZ]dEythqC`o-t@L,' );
define( 'NONCE_SALT',       'SGb{Ng.!}xM[IDSwy0>XC<~)BF//c-4GFW5K%SjnDKGbo:#c8Qe^I:)8{;:#KO|A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
