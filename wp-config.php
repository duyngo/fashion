<?php
define('WP_CACHE', true); // Added by WP Rocket
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

# Tat tinh nang tu cap nhat
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fashion');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '=i_gDZR}qO$cDn)oR |DXpj-Auw?[nmG6g{CkVpyY@9q]fSI5+CGLse^FKa/Qm/!');
define('SECURE_AUTH_KEY',  'WIarQY~x}ycP<of)y5;pha!)K9LfyL33WQx>?%Y`K20#_?S@&/dyb#yZ]YxnXS5!');
define('LOGGED_IN_KEY',    's4v<T4EoaIUD3Yaez^+W+jJ/*.nciU[u^B }J`/pFH1O=gQ|~*~&ZxH$-2a>1?z-');
define('NONCE_KEY',        '{].Od04&>wk<-SJDv>NeT=t{tp2sW`XSIUhg?L_g(@e>D6t:9&fsJB&;:zOy0.R]');
define('AUTH_SALT',        'EfW?S9c=ON~UV]c~+~%254scw@#X;U{h$N^fMYYP9h(EK,X,.>;8+u>zr=^dU}/S');
define('SECURE_AUTH_SALT', '0pgfo9[7T3eznNOU4u9Rd$1`,PVlMf~K:K+-0gpcfPw7B,N{^eTOh *faNhKiJ:K');
define('LOGGED_IN_SALT',   'Z!?!*/-|m9Kl0.%B3rKQPYjHzW.+%^;;Y)-u)y{tdm=*72l9:gK#H?P>NRNhG2+|');
define('NONCE_SALT',       '&&hOz5,&?h1ms]+ql61s8,6.QBq5/q[`t (P4l6}f-AKT9YZ<y%3]NQvr@G]/60F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'er_';

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
