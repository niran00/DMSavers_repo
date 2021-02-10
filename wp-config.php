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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6-v!3)t574d|5ss8tk^6bJ+ixC3vzY>zW@.rvXE.q 1fp7_:c2yNQ+6VMhj]T1?H' );
define( 'SECURE_AUTH_KEY',  'ILyQw$_y:D#cmd@F& MN^b_ _ 5n>}cX#$_gjIZ<jZXh$$UD{|`{<ZhCD`$>7ZV/' );
define( 'LOGGED_IN_KEY',    'Sc*P~[y>$2]p %w}jH*MwXD9V-zf2WtRw3/<whX^<v~|%~0BS~)cT6Lk}ljsbnf(' );
define( 'NONCE_KEY',        'R>O;}RkCPcF&u5e4)B-wPJ1C#/_[?y!}xd5Dli;V:#&//Tk9rX7AQ]+K{Hrh UHm' );
define( 'AUTH_SALT',        '|z?^+SV}|3m7O29IB_bxiv9Jkh(!2X@jlxzfs{w*y<Qfs03*]kzWd;Rfmj?lg=Kf' );
define( 'SECURE_AUTH_SALT', 'd0;i[la~[qf1Gjy.MXZFj@d[uMtLtKo{wSR~(umj2d^Q@8tZW1:91T/|xy4rz*12' );
define( 'LOGGED_IN_SALT',   'ng}^OBwW7ZOcYGNmee1E5QQ5QYERUFb5`Jpnis;4^;igxL7&pz5#8fquBV^H7e}r' );
define( 'NONCE_SALT',       'ASZ]F?EGDup6[fS#DlEeCRJmrHG-wk`wz+!4patfbst1~3+}e1&oJ)y|brKp8q<_' );

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
