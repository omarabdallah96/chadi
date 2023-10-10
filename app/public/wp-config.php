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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'TlZmfmPS2zagfhAcZ/mDiN577bQRW/A5xbyVEKRi4KjuzqOemNruS1EZ7knZyMRhWVf4ZFe2TYpF6JVzMWO0iA==');
define('SECURE_AUTH_KEY',  'eGQf6UYegfnyILjyqsL3uK6U+e7wQTif6rOEcTPQkrg1KvHKf2QB9K1nwTqZ3qwB5vviTxuAAfsjGKrQqgsBHQ==');
define('LOGGED_IN_KEY',    'OedtDucWQWyMA1BbLO+CDSb/qc/J6lFKyMdiLEuiZjJZ7sr0ap0eZy0LtYPdZOWazGWFAUnEwD2Uhw5pIANOxw==');
define('NONCE_KEY',        'M9rdNmIy8NXKyeZO25j3rTk0k3MTqWpcNM5o8b2aK09B7+KsPd44H0qtWjRmvAowZN9rrsJ1KY6ARACtRqHqvg==');
define('AUTH_SALT',        'O5Bqp+xdLEvki+PsyMcxtRb5jrEMQUmml6o7mpzGNv94ib1eyYPlrtk82lUus1jIZNE8TlU7nITYybnGt99q7g==');
define('SECURE_AUTH_SALT', 'xA5JE3XHpEsn7gCdkGi84Y6YSXX6eNaNwM+x1ft9Os6qTPBYkz2Y4s3BMaJesEaVIKMSwDl0MXIpj5L2lkuPTg==');
define('LOGGED_IN_SALT',   'nYUGz/Y+L9dNE8DoNdgPBbUC76MD16iKOHrSDA2zvqWGpIHy4hz/sPxZtrNv4f/66DKnFTuE748L4ihwsxe/tA==');
define('NONCE_SALT',       'LRLtTWqU+USWCXNNlam1+4l01AJlyzrhjl79Zy6LrFNkQO4rTEtypmvOb7Laf1gTW9yodIwe65Ck7lF3TY0R7Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
