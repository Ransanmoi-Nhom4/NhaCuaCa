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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Haroro2004' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '*YJM=^j^7XitXM{h@eZpVvC~>y9G!:5aV*9(!R![)|G?f[vBirs+]n&RmAkE[={K' );
define( 'SECURE_AUTH_KEY',  'LX+1W NTqt(y)6.#,W ^B0TkWeUmp>lqzm3^Oi^(;`TTHTI_oDXW!^U?g c3F2}5' );
define( 'LOGGED_IN_KEY',    '6Y$iy}u#e]]4b|CZp=E=nL.~.d/0z+@9oQ1<pS4<8f!$X3@$R*]j9l>-Y#GF;j`3' );
define( 'NONCE_KEY',        '3knP{>9MTnGS%7g5~@lEyre8rUy57/5vWJyYYGEfZ#1Ak#LhRhK|_3kcnW0R,?kH' );
define( 'AUTH_SALT',        '!2-d/YjjQ]$PnY}BGS5K%QL}6*J^17Vod<;8Q-fK%5y7q*|/B2ROGr2KFu~.**({' );
define( 'SECURE_AUTH_SALT', 'd4NOmdxMq*Ok8AsshT:kqyNQ]!Og!&.T:TtR_Os%o][#.2=e569zbIy;KgPdNVPd' );
define( 'LOGGED_IN_SALT',   'p:<x)rzsN@$CJ?PS1^`(+k{O4Kr&<+bwr|&3t:#!{J#a)%MU8vO_MrREH!6aNzj]' );
define( 'NONCE_SALT',       's,SWRJ~B(;:(M?n,H)ydsx%A!Yd9VXZoW6cAN>+5Lj&:sUP_&& nX$}d~$TcCL?R' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
