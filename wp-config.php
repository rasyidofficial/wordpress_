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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'I0d=xGU`;?nS9h`F}.o-3PKUB/ QCsN)59eCAs@uZo1v(P7moh9}gC^y&J]bcVL>');
define('SECURE_AUTH_KEY',  'rk<5X~$q$f^$VJ2$}%#3D]QIahvByW]5|f%v PdQ^J{%N}_[Pq(J8v-tY_6%`n7*');
define('LOGGED_IN_KEY',    'I]4uh[Ci*$w,3a3*>:y&}`) 7bL89eE-4c.@rJ^W$$U#`Y%xlyK!pnt[8{PO|yrl');
define('NONCE_KEY',        'F</{m|M9@~:-MhaI0#xLh4UNj-**_)r}Hhp-#u)bF^W_D^vK+Yg-Dz6gFqM,jxt$');
define('AUTH_SALT',        'S7owO6N=f>vK%Fnf<7?,qC?)<E^VS4q4%:9vrsYKD1Ib%9]jcc1OU!%X`<FQ=2Y%');
define('SECURE_AUTH_SALT', ')+z2M;Ijh^wB@mSYCi1Y#$2yfjJlI(*H>S5J&1}nI=WK5BN9i^$HPi P2?x,((bK');
define('LOGGED_IN_SALT',   ')y4/{!a.s`,!,M>_f6Ya^=?BX&Hz*XCPasT(LyBJEcy:&A_VMX-ZkZs!!8Nny`WW');
define('NONCE_SALT',       'q>{km*ZU;Px0%ON8Pn_OWlz7^ZSf+gGV[06JtM&GiW;T#Z9TWu )@hEV, u[WVT7');

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
