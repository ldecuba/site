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
define( 'AUTH_KEY',          '5X2qhLd.En!@)%v^ 8~;D0^.q]Nh}ZxwE&,(wmljJQvpFc}|R?RX|:Gd}Q,X:.N|' );
define( 'SECURE_AUTH_KEY',   'EG&!M4,5|yFr+KTwA`D{|GZ<Cu={tdQ.|@_3M@0jg0l5nx:`pzvobCvFN0+99f+v' );
define( 'LOGGED_IN_KEY',     'S4(=3^<Mi TA*G7F%#JnkVulRB@)4,!z+CHv?Wd;$!4Zr i]b|xYSH>2!q*y/3AV' );
define( 'NONCE_KEY',         'N*K*15`@ak!9DR#]YU#SP-KS@ HEudptX.VHN|dRgC6MnjvJCDQ+./;}ZI*f:|VI' );
define( 'AUTH_SALT',         'c8#%Z>1l#<&P~3^@HA5oB1^i(~n:;)c|qeIY5`#Cm; b2wq{Wd$qP/U<#NH_KJ@N' );
define( 'SECURE_AUTH_SALT',  ';tEl@k{(u+UktozY*_vopR8FT1|,zsH% }{SYE|sh~nemSx%d13[7:k2b!vT1L%J' );
define( 'LOGGED_IN_SALT',    'ss2@@[9jxG591mD^IG;loRlKkc5^$sBnM2xaeF=#90``$gBf^k%5VK;GbQF3&DJk' );
define( 'NONCE_SALT',        'M~4//<XVx=[x1gFt~ >u~V}P*h;;]SM:)+5FFxJZdU:H6F,jPGa*B}rFBKp[l)St' );
define( 'WP_CACHE_KEY_SALT', 'iGC{A><Xy/tMVV[6E#@2szha1B?a5-SflKwdFQi-d%7qx@Ai%k,>W/,&y`,gbNQZ' );


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
