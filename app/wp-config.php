<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pp_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-|34r|PUb8,M%:afJi{rKcB/+GnL]~XL@4W5W+bDG%RZU/UguZ0*OHC4!+_6~=bk');
define('SECURE_AUTH_KEY',  'Mtr.|Mp+8nCO?GcFxg9jD#c&v5~/.Sehi4>/:3ss_+_Hq`Imj222O.6Pn%d%GU7q');
define('LOGGED_IN_KEY',    'K56yec?h2J{mKSlBV[WWl!:rl> _cL9o5%aZ70&<Hz/Y#]ixL3{l9YxV7_GGRquJ');
define('NONCE_KEY',        'nr#9W@OA9b`3o2`.^m~*h{f7_qO<!8*iYgUPqKLc3& jOO4p]8KD?>Rhm0z}#vHi');
define('AUTH_SALT',        '<EXbob_N8;jQ[#$_(%fCN@rJ9)+-n.^#FoU6jJ|B9}H+d0v)0B|4Ci#CNJw|KR:y');
define('SECURE_AUTH_SALT', '-`v9~@CoSn;7aFv@ARBE_Fuy*S)w+B*)sPX9O`qqBZ9|85flrpT%TK~]`<EG7/hH');
define('LOGGED_IN_SALT',   ']C<;2^bml8E@?wJ:|_eS`}U3LT|j10NF-f}RR?b +>3|m|)mE#mL5Du>n[Q#$9KP');
define('NONCE_SALT',       'i=>]t0kG*WE<Gf6h]D,1Qu+VufXH-?|DN8o@-bl{L`q}i86Z]2LBdSh},17ns8U[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
