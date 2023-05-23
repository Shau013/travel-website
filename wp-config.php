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
define( 'DB_NAME', 'website1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'IuS*S,mWh?<fVAVC+u5,?Se[&S}*sC%c+k?NG*4C*s!X=4cs>:b$`_9KkKi&*_:O' );
define( 'SECURE_AUTH_KEY',  'x@NMXVVH/}eKglzRK|0Dhw/sp)I)GHZ,xef.J}g%F]07/W CH/C`(*5f7R)v,g~6' );
define( 'LOGGED_IN_KEY',    '?Gy#-lzQ6wB G2CTm9yFtG/E4Ws*KK%[}9GzAK@NGU+$f)T4:SLuj7Wn_z| KbTl' );
define( 'NONCE_KEY',        '7Z9^nr}6:)pxzWaR09}s1uLHrnM1i:m# YzN<5K:9`$Ii)?%TUwzb0W!fxiEjq;@' );
define( 'AUTH_SALT',        'PaVQGsd{MK<By}SQS^|i?BYEQ4u*E5_n&yX$t{+(k=J.*j^7[=/ck^YwY7MG3G+]' );
define( 'SECURE_AUTH_SALT', 'CJ3Uu*R(~X`S#{bCC0_)v5I;L{cX_}PO1(jaHN4NH_zpZ#)K*_l>6!7|.oL<G{y2' );
define( 'LOGGED_IN_SALT',   'FWIh/U-GlxGYx.b0}cDL/=Q[J9u!#]tV%[%)CdlJK~|#)c]>p2R/2~`IZfS{c^[R' );
define( 'NONCE_SALT',       'b^72rWj$t5Y?AeWG;#U`]>A6q3[E~kSsayqpt^^bTRt=]1w/L^3gr&Z_XkRx[%#[' );

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
