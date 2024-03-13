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
define( 'DB_NAME', 'nilsabbass' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '3X0xFPMUng1H3LBnDKHJIj66JBGyvQSheUV3yTqA3oQsDajt4lsBrIOpqqYfB9Rr' );
define( 'SECURE_AUTH_KEY',  '1FJJ2TVq3BbaUyQJBmQbfpkDUQSvz9zL2Xf3O1pk8tZayStb8FzkHX0o3PaKSyQV' );
define( 'LOGGED_IN_KEY',    'VJDLAEmwAEzrfTCPFaTUuKosKNwiI2VN1301hf1PcP6KD4SFjjn70t8G0m9FMv49' );
define( 'NONCE_KEY',        'RCTSy5FQbkmjmsCxbmu1TX49KTWFj7WyoBgt0qNrgyIS0ZagrMPlvlMjwlJnncDZ' );
define( 'AUTH_SALT',        'Ow9ZvtX0N29bt2CgHz67haIOKZm3UbXiManX1CA5lhl2EWsRzghBQerWSjj6YTeP' );
define( 'SECURE_AUTH_SALT', 'QTpjFPM7yG7QTfkRzZli8104gu89SSZepb6Z4BX4q5xRobmOviGhWcaDYAK0CKZz' );
define( 'LOGGED_IN_SALT',   'QrkyqxLPgGFUxfOPZ149OYZrBR7FnmlrCICvIF9Vuuc0JEpEvtrt8NcXPpArASlF' );
define( 'NONCE_SALT',       'SPBSATAM2lDzXtwpRqjkEOpH7nRMl4nmfJkxLFvUzho1uTjBsvP0cLVEVG2weK7p' );

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
