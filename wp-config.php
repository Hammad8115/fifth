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
define( 'DB_NAME', 'fifthdb' );

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
define( 'AUTH_KEY',         '<*|;Xj+t@R_U2BCr^1|<H=.o,9W@njKf:sQ`#}uEf&(s^7H&wEKB0amP|o&5+r0`' );
define( 'SECURE_AUTH_KEY',  '<wb~%]G#+ ;Cba4`cRPa{$]nx;*m9R,nBg8-{m<TOh[yv=r inZ*=O{eVX5Up]$#' );
define( 'LOGGED_IN_KEY',    'F`#a-bizVlG-x<1w2sFF{z@mBwrZaDx2f4|Vf>{LTwT%rGZ./2?Q}PAFnB-HIzFx' );
define( 'NONCE_KEY',        '/kljZp]!uv6Ee/oIz/VLmnE=^UiIhE|b@/zX|ZWjad4^T~3<h5r@ Sm>eE/:1C61' );
define( 'AUTH_SALT',        'YD)XUw)=W8AC0PiIRrrq_zZlj~:VTwpKW`B7uzPBRK1V{hFuBM gmT*do|: 2]4h' );
define( 'SECURE_AUTH_SALT', '4jr[4@_QbUYfvNAB71)0*MSHqWz]enICpL#t<:dvWy98R3fZ}N?/c{U(Hd5W@0%d' );
define( 'LOGGED_IN_SALT',   'X<v}^ijX*)QZc3Pmbs,BKm4PK2krZ:xv9*C)wZ*NG9]@lTR>fSKMx4KNx[v.:bNU' );
define( 'NONCE_SALT',       ']UXi8OOopze1@&O$wZfIgs7DqOA7OLH}vYpe>pxBNex+gN8AO;N{UYEf0Vd/C ,5' );

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
