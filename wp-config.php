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
define('DB_NAME', 'cheers_db');

/** MySQL database username */
define('DB_USER', 'cheers_db');

/** MySQL database password */
define('DB_PASSWORD', 'uaPevrRP');

/** MySQL hostname */
define('DB_HOST', 'cheers.mysql.ukraine.com.ua');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '743uDFQnac7^5GE0JdzWO1F4nMKzn3&3E617^11Cgfjz5Zmzg2CnGvPY)WQzgfJu');
define('SECURE_AUTH_KEY',  'my7uw9Nb*DX@5mH(wVQ79YCU26l8&vJzZ1ID#Fek2djPVMEIRQ^nPBCfiC8PfrUS');
define('LOGGED_IN_KEY',    'LEB(CC^X(!px@ahwtmkYNZista!RSUb2G0ra#dDhaA#xMV!7GEHacW2WQ5dFPeS4');
define('NONCE_KEY',        'nCSc^QT67vG9vuT*XMcrm41nK!eiLWlJj)dyBBDXOUFecQJ&f0!E77WT5)#mGtqR');
define('AUTH_SALT',        '(nBgTr6gn6NRvEvHPUJ9erbj^e!IFKT^36&vws#M8&rClrLCDBJTnV#i@LCEcMQ%');
define('SECURE_AUTH_SALT', 'FYbkEZS85PH)xIzTX9sNDiFf&wDAF!%uCYM)xYTGYdUlm5CXfaKUYoMiLZDu^r0g');
define('LOGGED_IN_SALT',   'P2)ssB3aOoKJ8nzuuNJRawM&tYc9Ir7fPWtgUjN2()Z(!hHEVoZZrZCs)oJ9UsyU');
define('NONCE_SALT',       'o7u4l^S5p!JJ6IjCDkgV(068ONIpnDmF2snDdg4I#X@0*q@Q85Zt7k#3H0*y7jos');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
