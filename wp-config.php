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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capsutec.com.br' );

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
define( 'AUTH_KEY',         'QQBXeSCiM3u18Rg40MP7BngwHaghjIhwzpkF7vMjZgAax1EX4LmXtGuvviZQykmX' );
define( 'SECURE_AUTH_KEY',  '48dTbZyXlZgYDcwBnknjCnO1JcPV5Rq7kxEQovZdt1Ih4r9GIWL21uPF7UEjstSm' );
define( 'LOGGED_IN_KEY',    'NXIL0pQt979ZBfgMPLCYqixEhbGT3XzNUnWhKojjVo3OjotCiorXRQQv133U6MAk' );
define( 'NONCE_KEY',        'yk0TSw7ICdA6djtWIdztVa7G0xwnvx4HGKJfLmOhsd2DUPQnS1S6TNTGMZeNFdFp' );
define( 'AUTH_SALT',        'kZZPfzersZRIWAsLD4nvSWqbRFaUVQR9F5dcvckuUXRKAz5qpicvEwBSVydcYeL1' );
define( 'SECURE_AUTH_SALT', 'n8UpcrX4LEFHCPxbBy0R0A2o41PFqYG6nLwNPuANnVn11baymenbCvugi1NHsLlh' );
define( 'LOGGED_IN_SALT',   'yycgLU4viX35mWy8nH0H1JZ2WUBJJUaWJpFtIxBARjZx7QM05z9MfW04DbQnGbs3' );
define( 'NONCE_SALT',       'dsBai6M8C7jmFl5oUVr65YNujQ7uQTEFhjQSyGwcn4qErZwzQDCuxO9bFQbTcsne' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
