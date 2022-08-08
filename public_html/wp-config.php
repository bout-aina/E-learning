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
define( 'DB_NAME', 'engynoco_wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'engynoco_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'engyno2020' );

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
define( 'AUTH_KEY',         ' `oT]#sc5Xj ]e!d[:-hZLx.spDb62^Tk2RoHY;-ZH-y7^kRHl]{,SrfwY;@]#y_' );
define( 'SECURE_AUTH_KEY',  'kM>$mo?8L%5M/2RR8F?y2q%yDX]?X*Yg2F=pbb.#eXn-pIcSQ3IVO*<L34Cr7l2S' );
define( 'LOGGED_IN_KEY',    'q>Q>#mMc>IX%QgFDQ0mihBw+>&9yb;n nZH}?JBYPf8S,WKk9e5Cfoov}CWue`TB' );
define( 'NONCE_KEY',        '2T(bqCS$T.%?>u0L8gG#vTC*tV(zu)R<$H-ff`r@=ii6[+L`2/Ilyv;_&|~ (8.V' );
define( 'AUTH_SALT',        'c(Yx&;y|A}dy>nI`6w9$x_SHmOFC=<2iLV|/]M(0r<AVbDJ@d^y/]HS3j2l6zJEE' );
define( 'SECURE_AUTH_SALT', '/M[ggNs(plu%o8I@5`t&{,5>i+Fv&^eGPo5*|evZ0 [;7oW1*<<&}jN:!4)+(fAC' );
define( 'LOGGED_IN_SALT',   'Urs5X6]B`/)tW4Y~FRx[],k<|*aw$XcZa~X.FVe|X%$,N&V,IR[R,rcLca/3z($F' );
define( 'NONCE_SALT',       '5C|5DvhZ&k0aq)JVUUZA<lZgWPvV mXxm.sbp|f&Fv6!]]`IPM%}x#&HhSDm^e[a' );

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
