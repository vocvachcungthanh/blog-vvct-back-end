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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_api');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link  WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?|%[Foz7]L6m`%#B `wH_[w+Rdpx~V]gxJWB-%[2`0z^v@+.Y/&qlYQ D?.m-wrI');
define('SECURE_AUTH_KEY',  '#S0-xGeh9lD1>tyksVk$#dc-`YuI[c@)I9BZ^&I&zF}L`lOU|L Q?K9Z7;jma4W ');
define('LOGGED_IN_KEY',    '*XD%<nkGjqQJ FMB(>3|O -C8).6|e$.)TG4(h7aWZw&ghEphZlbY`R]-dI?VW|K');
define('NONCE_KEY',        'c9#44+<T_5,tL]e-?sc3z5UR7,1FA_;dg6ine!DsGDQF!=VE:~;KtDO#7;[?V?+W');
define('AUTH_SALT',        'Yc-NW1]@,|l9|uLE>2^9&5%zuv[7K!58sc?Qn3NJ~U=([^7GO{^aW-0@7Jxbi!H5');
define('SECURE_AUTH_SALT', 'G;c#zWrY`<|h8+j2Eh#M$-U2~Lg/*10*^e4Ro_Du$Bn=J@J$-h<g,Eq1{5IIX?sh');
define('LOGGED_IN_SALT',   '3!nKh2/71~=@um1Uz?*Dt+AN:Al)B0`=SXc|5zLt|jJKb|lqUB=ldb{__8_@-8TK');
define('NONCE_SALT',       'ufh|5+GU-4hFa*=xtX9szC5p)gsmpR>=O:0GD]]xkSdwqYg!|m2/q&),[ls.iat.');
define('JWT_AUTH_SECRET_KEY', '}5b5hgQq-k69IsiBrd0mk=6bk*KZWnal6pe+6RNG#Fb#rt4Bj{qn|nN_.ZUm3l+T');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


require_once ABSPATH . 'wp-custom-api.php';

define('FS_METHOD', 'direct');
