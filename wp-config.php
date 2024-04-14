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
define( 'DB_NAME', 'school-demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '^oro9;] {nkfTv{m6|G{b+aIe+k;O~@*xo>ctb!E)Utm:M=hj,xvPyd~=46(ZW~|');
	define('SECURE_AUTH_KEY',  'r&.mH$f&ir6H.#WB,iH}M/@vG-J4IPu`Sj! hE{h M^Oep!SUOs%B^!6jXcdq8w_');
	define('LOGGED_IN_KEY',    'uy!,+T)_tDy/-b%zt#|+i3Ii14h-=V(i3[ (M{{;DRG#w7w]<ahV-cz^>SSC+!=[');
	define('NONCE_KEY',        '+UI>H]1h+FkA|=nOlvj:GMIpH7V{Nz^4v=T>c#Dl@)5;x-X>EJ#KH/rGzJ +7^-v');
	define('AUTH_SALT',        'j=m$YPgiSg0UO5~^7J;+]+Eoi?lByL8hR-CeM?x/?zbs~+v##,)LP+yV/}aG~kDr');
	define('SECURE_AUTH_SALT', '_{N(`~)y*tP/,&4wTeBQ!IORL>`4v?kA9|8o)GMj/||yl6#y.U?K4h++-,^{]iwm');
	define('LOGGED_IN_SALT',   'UuOSx+FbYTW*S#ZXs@L^gN|G+idKe3mOH5%ss#lN1 Cu]HF]O@F(,74Q;e1Rp^+|');
	define('NONCE_SALT',       '.]7fx)AvViqC7>iMnk?+7LQJVNNw0E3>jq+)P(].G;a<pVtO-of(bm]_-Np&=a V');

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
