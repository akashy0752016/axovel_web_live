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
define('DB_NAME', 'axovelco_web_live');

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
define('AUTH_KEY',         'N9F,.V[~p- &knE@_4}(;f6UO>eBK^&P(T<8E%)q$<:2#9xT[FT^]IN,KB>3a.<3');
define('SECURE_AUTH_KEY',  'z<jlGWm)V,MnHV(c lh1t8G`};h[6Myrw5~~k*K`KkuV^8U! rjiKDv-cDR_`3^{');
define('LOGGED_IN_KEY',    'Qb7AB.kYC*;V,I@TJWUkGfb+/I,e}`|K#~u(738!SY@V#V*b(`?[k8t-24R$3%P#');
define('NONCE_KEY',        '~z9H@a2odroxQ!$*v}e$F<zl0a3JD:EaN9.r8b4WQ .AXRKCZ#%-w1 gVumVo`M=');
define('AUTH_SALT',        '[*QE<18pze7<Z{3A%a_UR`W&CjW|87uNzbqz3(*l%x$Gx>[IaKwjWf?c0*VE2]9j');
define('SECURE_AUTH_SALT', '&ro.e$e-8~fvJz+(|kbWh2fb@Y`EOy%F>:LUq5Ew7pfz}o`(-)f.RhMQ%ayU,SyK');
define('LOGGED_IN_SALT',   '2l_p[4,NyxEUlpXdL*z|FX#-9:7G~ODk>BjzD$3Mv3ScW7nF!) /6iA/0/rT s#2');
define('NONCE_SALT',       '*8Vf)$U N{K^=A~YN$6CmDbB(LZbcTU qj!;^!TQ<?#^!SMFsi7D8e,*P.z~U4Bd');

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
