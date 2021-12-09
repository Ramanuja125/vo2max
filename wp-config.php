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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6/Yi>eoLhx{QE<#,zqG=^Qz|6q:k>#~ssP^f4t5PX(7xX&g(%WclW-Y4a3?Z+m&v' );
define( 'SECURE_AUTH_KEY',  '}uKJ5a8?/cW<Qvm@t6X!^Mmyt.lT=m!}v:2m ukT1`OF3)XjC]{_1Y09J]];|6WI' );
define( 'LOGGED_IN_KEY',    '?LL~*:&N3KV8;Kq8(CZj!{Ljkkt.IUL~g!_VTg-k`{GUWUt6o>{l>v=&7P5;?vu7' );
define( 'NONCE_KEY',        'ii5}6HCMeB_JI,FO@lhiHzB;<|b~3FZ#|gbCUE*/JMk3W$<yf>{9Ps)8-;>c9`X8' );
define( 'AUTH_SALT',        'I^(|O<Ad1J(znlH3Xr9[=u8`<1[:6$|y)gYm3ht>{{wi;;2nKDP[G9e)^jd_(8uH' );
define( 'SECURE_AUTH_SALT', 't%Ut!M$_m`z-_#8Z-(~0:wh[1f);#3!ePCESbiN.;)M)bBXH#*9oqIpq(O{|wluZ' );
define( 'LOGGED_IN_SALT',   'l+0Nu~}h>Yb:#@id7ve,nmMw|jl,XXg*2IZ)-30WApUj(*)NTl+mI5:U^$z!~+bt' );
define( 'NONCE_SALT',       '}a e?a[7sOx-v6A1@dnk&sx|?uE%U+}{!^ h/Nrw/Eno-}qOfa8ruJSn@|q#qMY*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
