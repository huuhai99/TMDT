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
define( 'DB_NAME', 'tmdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^16C%Cxj@]#*~1eyo|(DGkk^$7v)C9zK=z]V6aYV4ej5]pxWzb,6:t6G-&G)89Jo' );
define( 'SECURE_AUTH_KEY',  '&Rwcdf0?xAD,bI1@53m1]Oc$jY!|d2EXksl0=O2irdj0qmS:SL_afuvN}g}x,~bz' );
define( 'LOGGED_IN_KEY',    'wT:EDV-I$X9W$@^6Q3AW&1jZ `pm&@-tA8! kJOU%c$^FxgdtNaQ8`4fzxP&Y)vR' );
define( 'NONCE_KEY',        '+G2>pV.,8[#Ecnk~W+|/Tp}eP1n]$.VY}-O.Ks8~T%|1=SbvpBzi)wTA/NG2d7|x' );
define( 'AUTH_SALT',        'P0,5~}{Po)oyIpZ_Fz5g&=iWAzSN&b#*#{~,?IjK4WKs=O?`nsb=62Wt*>h]]9{c' );
define( 'SECURE_AUTH_SALT', 'o7k;IY+&Lw?33>w<K=L$R-=&D{4x2@65o@2]bk#KmROiQOah[J}=0ybq?+!@|0<;' );
define( 'LOGGED_IN_SALT',   '<U[Oa0#{G9(3X&RcDp>acgMyW[pH]4r<xb+!clNQ?!@^Q&21a(z8i#-(.zl+%p~-' );
define( 'NONCE_SALT',       'Uj4KxdiK$Ke8?z/c9wHNQ=k?wGhzYZy66ATC2?VylI%qUI9?<,`_T$59N99{oM/d' );

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
