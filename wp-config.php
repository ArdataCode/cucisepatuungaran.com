<?php
define( 'WP_CACHE', false ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "u726706882_sepatungaran");
/** MySQL database username */
define('DB_USER', "u726706882_spatuungaran");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2023");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
require('wp-salt.php');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', true );
define( 'DISABLE_WP_CRON', true );

define( 'DUPLICATOR_AUTH_KEY', 'IE=;1)NCQ;R #5St:JZb]qK{3F n_/( |Rqj{Qr2c;DIcw/~eMnp:P-S`Y&<Y.]z' );
define( 'AUTH_KEY', 'jCVtejhbYzjRTUJ4gte5LH2sGWAepwRi5j6qoWgXY8H9MdNYWj9E8p4BF19zgLoV' );
define( 'SECURE_AUTH_KEY', 'bjavzSK1SLg0tauwCSBBEwTFsfyg377WaTY3E2nFYayXVyWbjLxJPEGhWPWc7Weu' );
define( 'LOGGED_IN_KEY', 'p3nJt8Js4uP9nBeF8VxJT68pjtCmL3vrfeyY6dazLxUAKKQS8uotL1YgwwcHLfwQ' );
define( 'NONCE_KEY', 'brMxKB66xpRrbhdvFu7hC1dedeyWguWGxdsbav7YD4D5e2q7GjtmALfJPHRBci2Q' );
define( 'AUTH_SALT', 'j1eGadFuev1YmxMBiTpYITto29fz7NMS5b4h7RR7L9Cy5U7oXhfBKqjAS6etnJoA' );
define( 'SECURE_AUTH_SALT', 'cmM65x3AaAHYRbtoAV4LxGzzuhcBdRL4LpbeozWNRdgjswMXmfhVhtPYRRmIQfr3' );
define( 'LOGGED_IN_SALT', 'PKL879Efxg3T1Ewu3ApigcWuw0cyY7T6WRPP7zUxaAbeETaSEixSjc1MHLmA8M6N' );
define( 'NONCE_SALT', 'DdaraEiGMtocIC14YYUY7eRiRhEqTKvNDeC8gyQjABsEdfo6sB45dNQJegbvmYDv' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
