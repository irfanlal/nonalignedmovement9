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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o>izJ<)<PoD-G%suN0)@yxnh;6Nmjk,&RK9pvfToF * CCCwSbRMxrMV,d9cESkr' );
define( 'SECURE_AUTH_KEY',  '97fn>BXo6v#e1Bg-@doRD1nz`7RuZkU,6b}6*_ttdzE2lV1m9on?YUh@j6f?S259' );
define( 'LOGGED_IN_KEY',    '6fy|xT]HpJ3|OyTSHTg4K}CNq[a[Ri7[6bsF,o=R12htJe5T7!v3~MKsT|J+_vn`' );
define( 'NONCE_KEY',        '|>4&gd]C) <K_+?4G|=aW>ZEr=k+k]9*nszq&+|l6y:U|bVIL*{l.>dsojN}C@yz' );
define( 'AUTH_SALT',        '!<@AkH64fvDQ_(<{1eVsA%OuXRj:h%@i[S?1^t-:=~h[@vr5d&fBy^GYMT 9#Ejn' );
define( 'SECURE_AUTH_SALT', '|8_|++[Zl:S-K6H;NZetgBLuak,y|/dTsP2hCRLx|$ S|%4]U#m4iqM~i)C]D:UY' );
define( 'LOGGED_IN_SALT',   'XL;zvHc&kbQSlkc<X5azG mKFTsM$*9.2vPYfVZK!yqJ}O^tKAp0,~;4JHyxw2cO' );
define( 'NONCE_SALT',       '1~9ihB0#T1,c-b2_=zVC<xk[yW^c&k[SQDW,rF&sXDd]LaB7*T7XaaSX.csVFXmS' );

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
/*
define('.COOKIE_DOMAIN.', 'bd41-160-75-113-76.ngrok-free.app/wordpress');
define('.SITECOOKIEPATH.', '.');

if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$list = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
		$_SERVER['REMOTE_ADDR'] = $list[0];
}
define( 'WP_HOME', 'http://bd41-160-75-113-76.ngrok-free.app/wordpress' );
define( 'WP_SITEURL', 'http://bd41-160-75-113-76.ngrok-free.app/wordpress' );
$_SERVER['HTTP_HOST'] = 'bd41-160-75-113-76.ngrok-free.app/wordpress';
$_SERVER['REMOTE_ADDR'] = 'http://bd41-160-75-113-76.ngrok-free.app/wordpress';
$_SERVER[ 'SERVER_ADDR' ] = 'bd41-160-75-113-76.ngrok-free.app/wordpress';
*/
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
