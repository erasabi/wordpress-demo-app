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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'h0gu8wdbGigWVLEhUeO3dfepgEkLCxLvdWEoUnz6Q+bvzUEDekuU6AoPYhY8cuMOo6OtOVwA4GJLSrpn4ctaZg==');
define('SECURE_AUTH_KEY',  'ytK+TVcqB1JWd+BqnvX14ZRuIcV/Gy3iBILLkadMfd2Ctkvpn+P0b9RFEBwXLP671XuJRKhhK6kOTizcrO/wrQ==');
define('LOGGED_IN_KEY',    'RT4uGrI36kskmmOKogmgd4A7HF4n1Xzq2D+NEzzGwOmfx15klhjJqO6g8Hv2/cXIf3oKGLoRQbUniAkBSZFMvQ==');
define('NONCE_KEY',        'XB1d/qrI8eqopAtf2xixP/qkZydhgjy1iK3Mg7H5GjbQ2A0kGajN51qjfdZJFdkYUK4/whpxzPBUzwQeIlpMwQ==');
define('AUTH_SALT',        '+Y3Onp0P1PI4hvShpfQ39hU2JEzZLFxygw29L5gJW1GAjNeNPjDIb32JU7KLQKCDrxBk7IgahX3lPE9H5m+UCw==');
define('SECURE_AUTH_SALT', 'LPVPaCou9fwBVfdtnSxITilcMVLpcvM6FYCKXL+4JCavev3+XeyCXuZyAq9PqRBwi6zi3rvFXv3jkzUTqDbvcw==');
define('LOGGED_IN_SALT',   'TB2rffWosYl24nZhh2h4wYRFnfrOXuzrfEb+qFlRSbqSKhCQydzZqSc67usduV0J1nTets0NTIgcfXnylflH2A==');
define('NONCE_SALT',       'pKBSSPT23igfwxiBpEumYv4dkhqdCYhhW4iwP0Fg7R6unphM2WkqhcXPN/a9FNWNVMOxvDM4S6CzZTbgAHi3Xg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
