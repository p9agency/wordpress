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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'planet9');

/** MySQL database password */
define('DB_PASSWORD', '**Planet-9**');

/** MySQL hostname */
define('DB_HOST', '192.168.88.58');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=tOQtm15&#SJAP9{Cd=b&CI:r:@xhPh*9+8Up&z6(4o|+C%1EPp><cBl]b<32moK');
define('SECURE_AUTH_KEY',  '.st?1-}GLU^#x^B&*Zl.]{SCKX m+Bp<-4,J94Bd+BrG+z|K%B_!fufFGb%6?UB*');
define('LOGGED_IN_KEY',    'tED}_Uaxaz G+.<9Z4Z0QQ0&nbKa$-YW>~lBl@R|K%IL960#W yfX!e9:_*/2Vnw');
define('NONCE_KEY',        ' BM<qI/<%G7!RSQUl<&ev7UXT;k0|hE&TeHcU,<6uW5~YVFfNiPF!g`Emrqh@^e&');
define('AUTH_SALT',        'A6ZZv|Ct`f/pCLeoN+2o`:[jJ;dmm3%]=Pw],uWERsLg;;:^QJ8!M933xK)ZOSM*');
define('SECURE_AUTH_SALT', '2m;kGWiG}-*~Y*6Oo,n`XC34LEyNWa8l Gsu*ZRg.}s8+ySb<&&])BoTy$BE:#M,');
define('LOGGED_IN_SALT',   'VcH9({_2&Z_ n.+#.X)%p0trt*Z fklhrD?R0aIx=[2TGTk[3KM9bp.b1#TwHY-A');
define('NONCE_SALT',       ' [4!l=yW1?^/.Y+f6qL|tSkLbaIq|GZBSgN<Os=IBXYo0A| ihDNVnAB=jtQ}qGB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
