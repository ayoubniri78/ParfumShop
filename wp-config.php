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
define('DB_NAME', 'cmsdev');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '.F|?)T$:wg|JSf>~z3-?6}k+t*tNB#88;MH8!Z.(&;b!l!2L}/C[Tb>a|qMD2IA.');
define('SECURE_AUTH_KEY', 'hx^O6.jiaCw0=x+GMGH%E5U29GJ}RjNVP*P 6FyKS~8;q%}x_f3w3M) BgW8N@+I');
define('LOGGED_IN_KEY', 'W2`i.mbt=3~^!_#+2AO6a-LUs]Xunqe?KOE&os@w9XK[fC#uOdJ&&Z`YN(Em?JL^');
define('NONCE_KEY', '.}Z>g2Ap_k7WOh$/xXD  <q3$=gsN41S#=|H7KI^rK5dH{*|&38Xk[E`DYV)*Y[u');
define('AUTH_SALT', 'q_|b6:e#6GJiBn.lRx<S3`Mngl=>|a@=|FjUzGQbpp G#w%$<qf*En!o8QF2FjN<');
define('SECURE_AUTH_SALT', '`HDG1pGIl3d%M-,4>)i:>~sfQkCB5A`hrYVyt@jP@}6&X-]2EY,9emuEt)M5>K5 ');
define('LOGGED_IN_SALT', 'S a^%USg;Z$p%@`UCwr>/@k{c~_m4f|Up8I +dS-E%<-I3l1zbVoFJ#~bu&fx+){');
define('NONCE_SALT', '2wr%AXij&D~aq[`j5JvcU!(rNm?6?(NS}enS9g{xImB7%zd3$%2h ^#7vjFMR)<m');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
