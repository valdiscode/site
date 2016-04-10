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
define('DB_NAME', 'theming-lesson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'sssrcn>DO 3Z;#*|P2+5,09T_F`ZaiiM3@^<rB_`+$bCm(vr972 Q<u,-^dy:pON');
define('SECURE_AUTH_KEY',  '=Zro1bKQ#:rz6IuZNNwh+B-pRy.ZX;Jt6A,Jsd[-+x-7(H,<}</Ls!X<Z&o :BpT');
define('LOGGED_IN_KEY',    '%R9/L9m.;`~CVF=_^seWq|fZ-N&PpRvON#.Hk4)tAr@e%kN4SC/R|b1::2U-01.V');
define('NONCE_KEY',        'b1HL+EmH>>5S0cf =vZ}]59tt|ia~Oz%EH4#@D[^KwFe(S[t}uQUw!cZ166Tofb,');
define('AUTH_SALT',        'e{|S`+lTl!3hj`B<H[5B`n@Y*;onT6SONPAsUCCw :p_AK4<8W|Ve|C-3OrV*5[?');
define('SECURE_AUTH_SALT', 'V-3WJi/E#;(p(qnedPL;HxB+i+pK_L^IyYTsy*j~v2IpZmu0^b5^? z_>Jr0w$b+');
define('LOGGED_IN_SALT',   '&KCyCE@B]y5KV}P[)mKYY&ULI.3nN5:uT:9Nv~U1;_TPa,Y1g%OAZ/>_(yGn)xI7');
define('NONCE_SALT',       'LV4;&b~O?dJCI]_&/>/!2.-vMu[vO!?6xGbq.[)s7]IXWQz:-? fzp VXVg}4&B&');

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
