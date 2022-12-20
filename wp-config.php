<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vinceszarka_com_db' );

/** Database username */
define( 'DB_USER', 'vinceszarka_com' );

/** Database password */
define( 'DB_PASSWORD', 'whB4x5Dc9bnAFd26GERH' );

/** Database hostname */
define( 'DB_HOST', 'mysql53.unoeuro.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yPJ k)?5l]T-*B16bfdH8_RyZ-$Rmk$f3h?xP,(@Id+=@u[jakd]!Y1(O~D3{2fn' );
define( 'SECURE_AUTH_KEY',   '43^I5B`!uO1%h#/L;~YA}*ls*R}rmT*o*zO>S`xX*r?rw.>J4tXWj#RP)Ur[O(SS' );
define( 'LOGGED_IN_KEY',     '{bB-#kA1U#%fbI^Xj@#+;b/3tP xU>:5LJxJ,CFp--TaB3Ap?>JXNq96WC[kpe.t' );
define( 'NONCE_KEY',         'Ez[r?:_Zty]:RP+iO__,1G712SozokbLF/H4Q^rqc4Z?EGmqc*KR7`Q/6wU[Bmc{' );
define( 'AUTH_SALT',         '&i+FEKbH2v-:;4R)E_W#HQ?tzCcO*?21e;`s4lJ0e$/`SKzu=t]w5)fO!eLxrKwb' );
define( 'SECURE_AUTH_SALT',  'J;~u@D+k~R9!_+VTO`Fh]e^CY?QPz|Ylo6NF]]tvl}I<@K3v+AW.k,V kQSvo3{6' );
define( 'LOGGED_IN_SALT',    '8[B^s}Z6Llo_W?TA1QJLbp|IN6$bPYMpNO*Mw/o()m]K9,BP{GT*#pVT(YU*J>j/' );
define( 'NONCE_SALT',        'I9hVF*suD~d7%C1A9C(YH$rqqgMq||Nb3eCr:b?>n~f>fmXs~jr72W[TrYkp9U9g' );
define( 'WP_CACHE_KEY_SALT', '`BBRmZ[*rf NCZgP(:`)y>|ZX.{& Bq}%yMem|Nui:=FJB !n}2S]_tQ1`[$pT94' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_d5cc330fde_';

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



define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
define( 'WP_AUTO_UPDATE_CORE', true );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'vinceszarka.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
