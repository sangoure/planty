<?php
define( 'WP_CACHE', true ); // By Speed Optimizer by SiteGround

 // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '0D~1~Um]uEKvvyh<T+6Sd)1+Vldp {K3TGST*wF`X$C^)S<m$a0{4wfd~BP!$IG/' );
define( 'SECURE_AUTH_KEY',   'cXLNDgS6G&z[2_NK3B+_L@&]@r?YKAwc/lX]0!7!W&;b =}<F]`=E^^:<*m$M!%M' );
define( 'LOGGED_IN_KEY',     '9#?hGyYD6%b`@i/77%m;S)m124rbqlhV/aioi3*EM0S`s/:EjBsGK>sZGY{C4a_g' );
define( 'NONCE_KEY',         '(Yd2zo}3j53eia]V)fac_Qo6,U2Ls-wI*3~p:[d&c:G:8Z7Q8C)v-myDNUW$s1U.' );
define( 'AUTH_SALT',         '^f,APS[#>=3i4h:[@?<zY?cY42)U8/<.S^w~(ju K=Xq><QnC&l>_5TB29fqg/Ul' );
define( 'SECURE_AUTH_SALT',  'HFVUNKTUWyPlr:MZ|`wDw@fjawqQJn>u#c1pdC72WvJuy|-00Ws30+/WkhwH/CN6' );
define( 'LOGGED_IN_SALT',    '<x#xhs&;QX|lq3$@[m)|=)*X-7]yWL#q)V5P;=<iGEyD_/(MX%3e=N%;:^cMKWw@' );
define( 'NONCE_SALT',        'J6cgSi]yz2.Mp||Oo/F:.re;G5E sbfsUpV8[qVG.yBS3EM~k`==#8o~L2hinS^5' );
define( 'WP_CACHE_KEY_SALT', 'vP_06:1+11xb*H.3-:?4UyX(h6MOzG+dQBc(w8W/AMmqh}Q=;=s:k@R0#,Qpp)I}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'QM_ENABLE_CAPS_PANEL', true );