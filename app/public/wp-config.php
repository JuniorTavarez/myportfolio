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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lYnekqfXUs7/ZPSECVMbjpG1rz5TKcICT68uHKQMv2Cdz+8YFa/Q5s7VEf6bVgC6/Y/DSILR0fdN8r4DYx8PWA==');
define('SECURE_AUTH_KEY',  'S0IzB20W/eahsv57u3cHH59KHeogdkjNH86u4oaKSA2nMba0LLy+/hDuQbHECYEV1Ig+l5kJrmHLsfHT3sHpow==');
define('LOGGED_IN_KEY',    'mwdpax65d2oY+8WZKANkeg/Dvn8ChjpvGvnkeXtkbYvQwPgmcOio9kr2NS1ADCDS4zeF2TFWRwNxeVkF78yS8w==');
define('NONCE_KEY',        'J1AwRDfcVuIfYwz2Bcy0Q3oGPPQRWRnMHZOfbHgabABGAupMQzsNQIQmYSYK3ZWQAvcs2Kj4Qihrc02Sf9ZPzQ==');
define('AUTH_SALT',        'piUGz026w6qu/D+MYx8unpGGhq96UxUYVN6jL7WNjFypPRXGT1XoSpZcKvWcp5BlmEfLg7XHOasFF4XdWUAojQ==');
define('SECURE_AUTH_SALT', 'bXymKRVu1ULN1syF6PuK/Cxfy1+hRmqV3huPyKuBgnGpszR0ElOl/QiSM8tI26eYwFm5LHRyQcuI2kgCFDbaow==');
define('LOGGED_IN_SALT',   'VLua+4iNfNhqQ+KXsnjIz7/U7XhKe8JV+9O2/2vHPgIo1u7wSm6grWCAaqQbgfMn5d5j4wHLqT7p6c9nkevwRA==');
define('NONCE_SALT',       'pts33enE+xYmZWESX3l9x/IEuWR8DwWpN+v4bF8vRfdcRs/5zVevjXjwAviKNEIJ2oXbs7eR4mx/L536HPFC/A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
