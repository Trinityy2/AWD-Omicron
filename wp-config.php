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
define('DB_NAME', 'omicron');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Ctt2r.Wgw@MIwcl|IP<&Kc2;Aj0XUH.j+o.dvO.jw-~K|WDWR0Kf=hoxSo%`k*^>');
define('SECURE_AUTH_KEY',  '[w[_/SyCB;R.+rErZ>a$0C@b8(5hb7vOk(^Sk!a_.e^)<1C,{Mt5=>h/O@e}K3yf');
define('LOGGED_IN_KEY',    'b`=D-2Y3&twrotUa@r/0/zRXFrMG^|j)?/i70ZWE>;j,|oHJ/t~N >E-S;pk1aE%');
define('NONCE_KEY',        'iqQ1cPFAKU6UmA=.!&oL[F=G]~{w,v3FYnDJ~LBF=-pB}9k?^~9WjJRrr67K 0|j');
define('AUTH_SALT',        '`{3Sd!~gzVG(K]hED2HQ)lI$2xb>dUis4E0/~E&+0?e+K4#JEkEIU,Y._t+t$qn*');
define('SECURE_AUTH_SALT', 'fTk1D7M.W,@`R dhbYXY>Zn{JUsl4r2,iH-ne=E}^AK2j=G7b##)qkQ?YP=S7tUX');
define('LOGGED_IN_SALT',   '}<}yYR3oBX}eAXj^-(L:@D_5H}Y<o0XSX#:yi>bH$Ub^_X`yz~fa|UKj5etANV0J');
define('NONCE_SALT',       '+r1yvti*w,cill}%l`HFtPj>f_D/QgQW*%Xp=D}yLfSGs{D`aTpDeZ5@]wR |iBI');

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
