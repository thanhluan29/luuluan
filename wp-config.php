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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Leuoc042' );

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
define( 'AUTH_KEY',         '`k5TZF8:*j0PSU h^0lMcW_PY_vy x+_obVsc-i}mH.s nhq<f09e.R9)K}G7#>}' );
define( 'SECURE_AUTH_KEY',  'U0QoQ:,P=X?a}@dBM,:/Ggx$*CEhO8h5({XxvQfZ#VwNAgw}*St(.Z(/~tj];jKj' );
define( 'LOGGED_IN_KEY',    '9ud8<|7WI)f5lcE0xh(r?E>t`E|R#Ox]05Vw|[tziD0Hctx@$:0!dC:A*7bmstPb' );
define( 'NONCE_KEY',        'AqymPx0C2+&)jdT.41-yy5J-G8 upV#3vE,v|eS,TXS=7%,aG#SW%IZBb.W&u&8B' );
define( 'AUTH_SALT',        '$ks`^zT!?!]j~mik^<qK72nI)A,2bPhe2B>O_w{-M9c(qd?KO?K@Y;|z3nhI^cer' );
define( 'SECURE_AUTH_SALT', 'cROTIIbZIr=z{A;1tr:F:;VT?h{/V_2c!I&gX7KSz;[P(%J_8czz9qOTc~xD__1Y' );
define( 'LOGGED_IN_SALT',   'dtoW8e+7FxmAR.P1]A0Ax;]3T5y{T bxnc(zycZ>|J&|<z6$L%rfg|:ty08%-Sc`' );
define( 'NONCE_SALT',       '-+1Q`o$K*<8}u0evh>b3v_nEgRlnpu4cqXYSUSMjM^,;f%cRXs5Y2E=0!FfOBa<9' );

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
set_time_limit(300);
