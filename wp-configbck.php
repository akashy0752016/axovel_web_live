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
define('DB_NAME', 'axovelco_axovel');

/** MySQL database username */
define('DB_USER', 'axovelco_sql');

/** MySQL database password */
define('DB_PASSWORD', 'axovel@123#@!');

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
define('AUTH_KEY',         'we|jmE|~KbvQ~[K$Vo_pP=[;jU2P0:{IN?KFZnGWMB_Aj5kVu+4[+yQRDQcp&F(a');
define('SECURE_AUTH_KEY',  'h(,1]1I8]E[h^4,ZU-)?@IRqP!d.C;6R8^WYpJPd+<P*RR-,5E=(j%b^g9Df@Lu~');
define('LOGGED_IN_KEY',    ':Fo<)1c!H7GWsr[fWgfV@Hz4F*S`B/KBWlv=D}uO n_l`(M8g(&45IBpp-M~Ut/`');
define('NONCE_KEY',        '!m}CKUwI|?>B.&@1#_imii~>_11d2dL#CK5BHyl9oS|:Oyw9$L>P/JF]Q^tb^))!');
define('AUTH_SALT',        '0-y>ax8&:sLwMqi y3jDD Qj(uDr&@|K{S>EeSVj7oO+.aw[h`Eq]xE)/G57~vS4');
define('SECURE_AUTH_SALT', 'NwV]+moA}TMG+1Ul6WO!6{W1X10F>v#*(#DpNC]FU5as{[<d)S53v^eF<cIZN=rY');
define('LOGGED_IN_SALT',   '#G|.IX6_FIkc374p8;PHOqZ nANTR}W(ODI(_ea@BNbpl2o+6%y=8mi39fA4Inrb');
define('NONCE_SALT',       '?MV-wUDZgv}p{~lM&T:JOu7d&fc48}hx{BbiG6qn_MZU--9pa4rOJE<zqHjd>^Sr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ax_';

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
