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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elektro' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3xploit' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D@yI:3b@={kO.e/>i2phA/*V{RAFMH[:TAY3yAd5$h8UmAhY~3kT]):OPhH&DeE-' );
define( 'SECURE_AUTH_KEY',  ',OjNhvaj7R42C5hly:T ^`E2>-b#e$Src6b`|^3&WMzyx825sQx;7UkKU/^IbEje' );
define( 'LOGGED_IN_KEY',    '8%A<,U>WZQuxTjmw}k{P7v,(*[X&4-%{kA|M%t>^v)6T%Wl xjVo=&,Q%z|Qk<BX' );
define( 'NONCE_KEY',        'k:o<irvz4]l6RCq0!I8,S7OPNw=mFaN^B(sHl]0w4UwO:qP7|jE~zGW9;KHASC, ' );
define( 'AUTH_SALT',        'Y1Qx*}xC6-F(puX{h/ I)vFoRV+as,W1^a~lQf(fg%QX7BJRT&!`*K4cvfu`MKeA' );
define( 'SECURE_AUTH_SALT', 'PKI@&nT+u6<L:V|uEu6fZ]dB~fx}pmq)_Wy[2G)>T+.k4+Zeb]/:ex}#AzJ(y;cF' );
define( 'LOGGED_IN_SALT',   '.?lbUO{{ubM<~_6KpYeSJbL@bSR%kOBIXetI#Qx*:ju0_`Ht-.d>pqIJuZHap~Hq' );
define( 'NONCE_SALT',       'AM-18y0O?#e+=Z1g6WG4D9FR4v(ku(E&wb`Ywnj?{gzzh.Ow[x{F3sS,vV)=Fs+1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
