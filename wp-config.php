<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define( 'WP_CACHE', false ); // Added by WP Rocket
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "staging_new" );

/** MySQL database username */
define( 'DB_USER', "new_new_staging" );

/** MySQL database password */
define( 'DB_PASSWORD', "zs9O%g017" );

/** MySQL hostname */
define( 'DB_HOST', "localhost:3306" );

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
define( 'AUTH_KEY',         'x`S}cLdA8D^y/f dV[6.b@ EX2n<,#dG%)t[#8in-jvMk;d|c)#[Z.@]@=EEJfm`' );
define( 'SECURE_AUTH_KEY',  'Z$S2da$9m75YV[TLEh(%!9X*fe17bq=x_(0-b1({;vDY+n7,%KAY6H%f8&sB7D)r' );
define( 'LOGGED_IN_KEY',    'TM1oTIfF+,ejp5A+W(pP%,8I9- 998H[#]*(Xk?wdwTJB.DK0d15,UL+LRKunvih' );
define( 'NONCE_KEY',        'T[Lw0Qb+^2P+<A9wu T4??;MhPe+[7kIY&,S?fb#sB#3f{DH5?dGpu>i?@1X*9)C' );
define( 'AUTH_SALT',        '?Gr3C8NXK$bD,EAfwnZ%E```G IZ6Azn5Bv3LSTbj$E[+RkS@BZ|M$yfrA`uqItI' );
define( 'SECURE_AUTH_SALT', '71*&^bJ.v@sy5x&%4`,!dTH$]oMRr8C{1SZk4#&qlvLRCVNwi}BY3A!7g)@.Quci' );
define( 'LOGGED_IN_SALT',   ']/I,L[T;+jgNu9GB7UU+Gd?u&`XAXq=MG5TPo}-D@;9)32:[i7W>dH<Ce5 [?B2T' );
define( 'NONCE_SALT',       'yJm)/8h&H3OWqDv,qnT j5sl<=fy Dp[CH<dv[oA.*#%}3024`&XdgS{R@/~VY{&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

// define('WP_DEBUG', true);
// if ('5.103.120.186' == $_SERVER['REMOTE_ADDR']) {
// 	define('WP_DEBUG', true);
// 	define('QM_DISABLED', 1);
// } else {
// 	define('WP_DEBUG', false);
// }

/*KINT debugging*/
require 'kint.phar';
Kint\Renderer\RichRenderer::$folder = true; //show kint on bottom instead of where its called

define( 'MEDIA_TRASH', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );



//SKU search error workaround
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);



//Enable error logging.
@ini_set('log_errors', 'On');
@ini_set('error_log', '/var/www/vhosts/vinforsyning.dk/httpdocs/test.vinforsyning.dk/wp-content/elm-error-logs/2023.log');

//Don't show errors to site visitors.
@ini_set('display_errors', 'Off');
if ( !defined('WP_DEBUG_DISPLAY') ) {
	define('WP_DEBUG_DISPLAY', false);
}
define( 'WP_DEBUG', true );
