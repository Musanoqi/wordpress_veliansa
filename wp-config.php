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
define( 'DB_NAME', 'newdb_veliansa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F0Q7JU.,i=`9sTI,U,7by/]vay,ex:7DF|%)+7@9!M/c h3ZP!e[),=X~7!.cb.6' );
define( 'SECURE_AUTH_KEY',  '?g5dz nGyu]ZNQt6IGafF8+xVJFL{MGTq<*FBEkHB=J~8z}nxgh41BS,S#>,4<iE' );
define( 'LOGGED_IN_KEY',    '?7P3l7}1H+7.Z&8]s>-x:Y]DTGbX [zjUE_,uKpHW@?VT9Wu*EVFy (i^#D|+;Bb' );
define( 'NONCE_KEY',        '_Bj1h?AN::[Wa3<7Myp(zRA&^!fpTaf{EU3F-?^X4,=!,e_:[@WFjZFIT=R7U-tS' );
define( 'AUTH_SALT',        '^%_G]YC/jFEw7B39($,8]N|,]x]l#SGPnPEalw6Q1BQ0o</Tw[tyN0+&=Xp8 .sw' );
define( 'SECURE_AUTH_SALT', 'R@:y46fiSrZSGL{BqX3}=.WyLkx!Mk4I4yV/90;HyLwEV*vxOd(Y;F{t@N8:|h7S' );
define( 'LOGGED_IN_SALT',   '`hZQX0#mk8C==,A6jL.{o_qEso~p[gRbuk7)o$FV1UF9Q~*BO{.4 s>FZ)&NJ#08' );
define( 'NONCE_SALT',       '?IDug;-WNwGb7+q}y2H!.8hA<-HQFI#kDuSU{@bgfHezqnlbqEYhSq?J8Uj4|{?1' );

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
