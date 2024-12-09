<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'orangebl_jvd-media');
define('DB_USER', 'orangebl_jvd-media');
define('DB_PASSWORD', 'cnfhns2012');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'V_ez:^20>Ezq.jHXJQ?7rhe!s&{$xHsqzI.wS~F #_diSZxPx8NZ|-uqY ]Bb@p_');
define('SECURE_AUTH_KEY',  'MUy|&>jv#X=;`+xnP&H_yL^*(2l)p>-n~Fu?wLnUb4Ivk;Sgm+a#-i!^e$QT&-yr');
define('LOGGED_IN_KEY',    '6QN3Tr48+G^(?o~MIbxX~hlz_MmfY/HMYUIT)l%-:%ii*&-Qxn#D1_rxJwYa!SOi');
define('NONCE_KEY',        'NpwKWz9`-EwEAuV`t47?:[OssYJQeh|+j+h|id}aT8<}+GCTIdM|T9q|!*]nM,4&');
define('AUTH_SALT',        'd8yy`+*i7O|LuJwtyT5%#a||/2(7<wb9i- $|qt7qyX(@}^i1J8nI6%uS-eXoA +');
define('SECURE_AUTH_SALT', ')& j$() C3:/j]IgpsO~v~a&;*OB,~;^Q.OR>1rf55q,E6ApG10W:^.dq(BsO#89');
define('LOGGED_IN_SALT',   'U3{/_ZOiymfjy}b6aq335d5!0kqWeNu6]l[jk_->8QcNV<4|.+!VKnyn2CX)*vQq');
define('NONCE_SALT',       'IOk>fh7j]]SVGR4WUH0(xlUcCuI5IQ]y;i+GEeghIoK@B[u+j9UcT/dHvFuWVavA');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
