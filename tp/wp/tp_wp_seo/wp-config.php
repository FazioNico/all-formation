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
define('DB_NAME', 'tp_wp_seo');

/** MySQL database username */
define('DB_USER', 'zio_demo');

/** MySQL database password */
define('DB_PASSWORD', 'A123456');

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
define('AUTH_KEY',         ' 1ZIF*^|.>n;vluM2+U2^$Xu6I9lw#_{TYB:/#jHA77Ox?L8@JyOWXo&IdkQ/7K:');
define('SECURE_AUTH_KEY',  ']XN5s?*w@JI1]VrRv<?HR$>&g`~W2wpslj;LeC9Kv;RjFt;^`driB~C49>8T{pIi');
define('LOGGED_IN_KEY',    'u>I+7Gr+iM2O=|b&!0VdMUxiC{*PB[)V/q-; m(EcPY7o?UaWNj;S.nK,(6|M|8D');
define('NONCE_KEY',        '[-u 3>[v;(7>4;5K]+{Oq_6=#?+U1U_W$nU8Hh^X0ozSILCsr$3Ka}>xDYj<SAD.');
define('AUTH_SALT',        'M_w$OVe%P$D:ff$U1e$7~Zc/6H$!3kvU`Um+>^B6WwTZ%hO>P+poSRdo3d^&Kxs`');
define('SECURE_AUTH_SALT', ']O~cxZ.X|d.RpK{0b$+f%frC?)3.MBMivbGv,eon;lH,g#5ojxey;]r;wHDA=<`4');
define('LOGGED_IN_SALT',   '%bpskx)vpi(-cxyv7]5[6BuANk,Q*kWsCYF@]%^hDroLRf2.+Ii~Xi+X4ekr4%/3');
define('NONCE_SALT',       ']kd1KpNAW<RJ2)ea&-ZXB&P+p?Zx$mAG/sXk@_BCl!rNz4~2Z&y|Kc{UnPbceyjo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tpseo_';

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
