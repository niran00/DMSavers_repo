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
define( 'DB_NAME', 'dmsavers_gitrepo' );

/** MySQL database username */
define( 'DB_USER', 'dmsavers_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Doomers_123!' );

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
define( 'AUTH_KEY',         'I(#i9hiB+J~r98rp@ldG?=hCm<1$w];Q~?i2F4&i8EEc2+7O},y1n&wMI=NEVw$d' );
define( 'SECURE_AUTH_KEY',  'V !]V/oa?tHM+M7v-H>?+9W533Ld>^,Q0s^Ob:-%MAVIMiuYC._5J@uJ@lgs%;(]' );
define( 'LOGGED_IN_KEY',    ']oRgZExa0efyC 4Z|O9MK:!!EvoL1;qF0W8XPo&{cJ^I`<::>DwE]>;%KpD^9p W' );
define( 'NONCE_KEY',        'l>6^5?.B-E)-HkPleqG|O.#%!c1$t$dDw>g>ri}zAabR!$?tnD4&onFhe;(Z$<WZ' );
define( 'AUTH_SALT',        'fPi:_:n.]p?4wc`mS19^Q;AL 6i>^dmK``JONJqPXQ$K)xN>k$j8^gwaa#:`Pt/r' );
define( 'SECURE_AUTH_SALT', 'n[ee0^mHWf$|MD,1fx4/kKH$It0=nJsePlRH2|A4x;=Fn;)6-MM0P~+dC!6fu+ C' );
define( 'LOGGED_IN_SALT',   '~~Kto8T|B/JkK&d.`bxfKSAnpj8&kr&=pk*>w%g:]qv~FUkv]-EZF|eHUufeL$fv' );
define( 'NONCE_SALT',       '*5h+>Y&0arrY8:zI+bGf;GE.0Q0%QwQ1.&:8`=F.|!8S@Wi#P6nO8,tZDQ&-b9[g' );

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
