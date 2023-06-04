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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'E,RGd{_sSn-.2(pI/M 2to#P#~WPd]3iH -5/uu+rsZlM$}TvE8ri`q,P`3EEwvZ' );
define( 'SECURE_AUTH_KEY',  'R]*{?9Y^|~0PD!~ Q9e7c 6$kHsHhcRZlTA-@BwBl9|sc<wj:]GtC03?(gAwc{Ek' );
define( 'LOGGED_IN_KEY',    'v)S*N[EPaf[+5ohjHc.A]?h3(BKQvTan/eZ7;UE}H@ZSOV;-;wGGP<6`!2eQ*gLW' );
define( 'NONCE_KEY',        '}qDoVy{]tKHD6Dets?EMiAM,*D8+p| Da; ]<X+H;iR+vXrBuceNsmKupr?R|X8]' );
define( 'AUTH_SALT',        '+bgIXUvuv:3WIJExOT#;|Lh8#UY5QJ#nr!Z >/_fM&Qh9c rL4~6P,R f{75n9-e' );
define( 'SECURE_AUTH_SALT', 'O<<D[fSM]oap){f5sRW#x5n#wDa2E;ey:lG@^QwfPUqzeXDI^+81i%(b@gjh&1HC' );
define( 'LOGGED_IN_SALT',   'Hdy5]3z{#|#2z5k36qMC.&LgEYy8t}7KMXimtYkc}#Dxeuv]45Wg]|bEHKkF8>[z' );
define( 'NONCE_SALT',       'F8</tIS!@K{sId$/hNt?3~H#!Al:nYMZ+7t>{K L(JU6_:a%g?;%.]&FqHX@-/h9' );

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
