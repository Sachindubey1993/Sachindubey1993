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
define( 'DB_NAME', 'epiz_28519405_w527' );

/** MySQL database username */
define( 'DB_USER', '28519405_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '-H2815pS!T' );

/** MySQL hostname */
define( 'DB_HOST', 'sql200.byetcluster.com' );

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
define( 'AUTH_KEY',         'oq8xaw9rsmw1hruqnxedpnc3xnvgba0fr34kphy9i3ctpjxtyuvpaktjypxzekvh' );
define( 'SECURE_AUTH_KEY',  'wtddebkrouewqixg3hwvy7mwpeycjdusjnsbovw6chivkim9uteaphiupuyclnow' );
define( 'LOGGED_IN_KEY',    'jsunyszag3p1d9poesp0fwr825hisywjfjabsh1fwda3i2bsroo1omtfsmzdwrp9' );
define( 'NONCE_KEY',        'bl60e4rgz4yeb1y5oajnmxhvvywsjtvb2jwm3nhysu2jjtybjckhgwpgkan1i2xr' );
define( 'AUTH_SALT',        'f1ifhy6di0q9yyau6fngrigacaognrfli6igilffyod4cwvd6s1ac1wbfibqdslg' );
define( 'SECURE_AUTH_SALT', 'vhcgc8ip65attnpgdqt4ngotcxwo9tro0qdmosortbzyauiwzzykeam6sim67gmw' );
define( 'LOGGED_IN_SALT',   'dg2gfuu8yzs2zvcuszg5gsxhrmiktq6r0zifcv9burrpa2f3bmog3sevwvjd7wne' );
define( 'NONCE_SALT',       'zyg1yabmtl8hesbvjbhwubqbacuxmiqldwip1gmlybm39ig6l5coeyni5mjvdhup' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptw_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'sachindubey.ga' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
