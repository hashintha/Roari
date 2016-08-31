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
define('DB_NAME', 'rfgd_18816767_wps');

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
define('AUTH_KEY',         'P<@3*yVI%+GcK{;gl]=Ld<uUY6=;@?YghcF=c2^]0xcrvL3C$1WbLNL&7_39Z?tO');
define('SECURE_AUTH_KEY',  '`hFzUi#PoQ/7qEcYY,Zs{}V[-:T-emo>Bxjb^*;.1?c~.^AMtIX[asqRPYt*eqj5');
define('LOGGED_IN_KEY',    'ylVbo.cXEj93y,#3pE#/nDdYn|D4~60lY6YaRA1qr8Eivfd~}d`9Buzi/1WXdFFx');
define('NONCE_KEY',        'F=pU%5r6zd,XlOhJejG&8#?2;&.pxeJw<f=W5SJpAm6qme3iR4Cp4=P;?);hj1lU');
define('AUTH_SALT',        ';>PcSQ=[4&f[c}f>>}y:{[s;}|^t+utWY$[6MSNwKq~$lb>RL5`,Q!b =Q[.l1^3');
define('SECURE_AUTH_SALT', 'OJy_4DQRx4#xu`6cgUfg~i6]8YTMc+jTOOy%*Cm;NjrUj8|FFON}z~BuiG .V9oD');
define('LOGGED_IN_SALT',   '>LA7amMyY?j8bP?LZdJBc|K+,Juk|OEsZPew0|bnfY^ V}Y#.!hsG/j|A@hxX`5-');
define('NONCE_SALT',       'H/ZHio1XK=D@vqGXMs& >kM53?J]hn[!IH,vVOnAp+pQ5EW;jr^#O-I-NjN+:;T~');

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
