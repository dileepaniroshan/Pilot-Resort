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
define('DB_NAME', 'wp_pilot_beach_resort');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'EnS)}^7sWtIIu-pDm|7o2`=y!ieJ|a#QE{{7D0J9^P]Pnn7Fo~k.IqsaU{A^M;Fh');
define('SECURE_AUTH_KEY',  '+cl=t;GT2nkQ%nk7=1Bh_))P0p/b*EtDZ/cpYSZ?A.}PfJqc#s2Btpks1j$wn1B#');
define('LOGGED_IN_KEY',    '<}&?NWpnXfJnNZ%%aKR_I!J]#0V*(+O%(i-7k/Zkn{!}oN49[07zV%Qh@G<4F9?W');
define('NONCE_KEY',        'IN#wAQVJz<XLS^2`s6YFGu,L/.);1or.[*sAEo4QYZZ;OMGGcMb5HX#rfUR|%Sc-');
define('AUTH_SALT',        '/%J5_[./*g1SnW@)p?9dk5j3x,WBEre|Y@W1_uEbhV Ag_y>;[]p<~[`FKq:PQcl');
define('SECURE_AUTH_SALT', 'AULh>wI9(d@C$).2;qG(]^v4($w,z?e|#.d$8Z>NS]$|o=TcMxf1Y;N;P3,meVhH');
define('LOGGED_IN_SALT',   ' `sEVRe?xGR1EJ89tF1:/Ny%j6m_%e&@2I{])I@}&vtyvR[27ixohP]2DZa}kC$:');
define('NONCE_SALT',       'MuR%AH)T>ERi7->pxbMWlzD[,4jmgNPizuez)X/H|mJEf4E6v^V38t?`8;scIgU?');

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
