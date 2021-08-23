<?php
define('WP_HOME','http://103.226.248.62:3000');
define('WP_SITEURL','http://103.226.248.62:3000');


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


// define( 'DB_NAME', 'landing-page' );

// define( 'DB_USER', 'root' );

// define( 'DB_PASSWORD', '' );

// define( 'DB_HOST', 'localhost' );

define( 'DB_HOST', '103.226.248.62');
define( 'DB_NAME', 'wordpress');
define( 'DB_USER', 'wpadmin');
define( 'DB_PASSWORD', 'Koolsoft2021$');


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
define( 'AUTH_KEY',         'PS1&;_0%fSCDX5|,V-%8[lzoNWAtPuoHL|Q$U2rnAm56eqFXoAvGSW>#9bt;9fOb' );
define( 'SECURE_AUTH_KEY',  'T|C?Xd)|A=H{aS=[[&qWHcW*)=KqxB081h_UBe,JB*aK6o~sUV6=E+<uRK%NOTv4' );
define( 'LOGGED_IN_KEY',    'mVg*|jX=&5K*UJrFR$L{cjOp#,)eC@Ic2pMOG/a=>#sqM$]MtE@l5>6xN8U`[]W]' );
define( 'NONCE_KEY',        '5EU:sAdjDKf;P0E#AZV;$&`qR+rCR9yBynd_{_s%vs+MKa4]7}^^N>$VB;W(V!xd' );
define( 'AUTH_SALT',        'p&Srfuwy#Wd#6H`2>*=|f D1JNHN =uVm;r)UMe&-]|K[D)3hp132CgK[2tU?d%y' );
define( 'SECURE_AUTH_SALT', 'aEP.KR|0$OY--#_=rJW8,5bfDQAE mC*)o+Br=optQ=*x]XTd%I[)=k^-p5?0^w+' );
define( 'LOGGED_IN_SALT',   '[T[)9RhUN1g*K{p01gOo1:L3_WW0ZOZR|%@V6C>5VD&l)Jh(2TB( GyFjym2LNU~' );
define( 'NONCE_SALT',       '}KKh;4-Up^3tKcVP!V8MB:i]#+@{@d%Gk;7RF?guf?&k*`^Pjq%7!&Jsb)6S:Xpy' );

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
