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
define('DB_NAME', 'miamoresdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'z6Wd<i{-02i1g_mX-D+kslou,(1)C3;G</P-k(uOk8iw]Vt#9}Ic%>UdYI4*gzXX');
define('SECURE_AUTH_KEY',  '9Uop+)?f_+U0=xA*9G~Te>{N-^?AGeK?UG1]x9.)GPMk2Mi.t/_1@3%DZg6sE8=@');
define('LOGGED_IN_KEY',    '+2>}Wj]o^qf>iuJ(uFvqPcfVxiI1TA6Y[R&yo_>BR)=f$ruB;meV<~{EAEBD:&TI');
define('NONCE_KEY',        '~elT:cEza~ 1QDvSBrF6.fasZ!Yf;l!EiMjNl9+Y1i&/;&c0]N(-SwGGOgzPU+bo');
define('AUTH_SALT',        'eL@qR@Y `K>}B:{yS7pTtYrZ$(1? gfY};=)$ck=Q[wRXLnn6VCJQ{R?/1n[^>p[');
define('SECURE_AUTH_SALT', ')98,++D`S#^@hIonxxzV-4?7:s(K+CO^D?zw>3Rjred+]@k%<:L>0z`9hHpyxo]-');
define('LOGGED_IN_SALT',   'QeZIW5~?.iswY!HV95p*,Uyp*FGfI=Fc_R-c2uAK3ErK.?vs.!_<]jsyv|%DQ&h4');
define('NONCE_SALT',       'V!8sy?kK,9kXR$5_J}7lEFc0**eL?KWo6;!n>Hsb(f8{E]Q6z]s%(|*<WtyohuV&');

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
