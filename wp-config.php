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
define('DB_NAME', 'WA_Academy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?mDB1lP0O8`NnL;z3L/L_=;om%SJ)]%G3|oO8tkJ{yti--$PTqoEEMisDL6>C}#|');
define('SECURE_AUTH_KEY',  'UYb7jE`aEpzsHeb(^TN9!TD,&|U`mMq+DjFW~-*L3GZ+y|h/t*)d6@kr7(/E<L%*');
define('LOGGED_IN_KEY',    'z7dx;M=_%L=5Yo!H&$W(4@cZ6@yQ5Fy#uE2u2$&hCAbu9d?W?UuEC_ygr)s 2?PK');
define('NONCE_KEY',        ';_cLXVSqGE4Vp(97r~&=BHxmFWlJx6Dv&3]3x$u%>:)bL#wl:j4Wg3dvt>ZRJLg#');
define('AUTH_SALT',        '46J=E]vv-(wq:lkGh|%]?mxz)`gs+:l}jn;,T-ctX:|K$ZvtmTY6~czA.Tadz~Ju');
define('SECURE_AUTH_SALT', '_~8yq>h:F,pD)_aFXW+)qMU~tfmyw/}-Usp}mw6$;ZNbrgYI6nB7qm#V MbAXka8');
define('LOGGED_IN_SALT',   'bqdy]3Orb7` F^K`U5@(QMq-q7:+7TM?O]?/hIp8A|6p=WekhNKT5-m%U#X,$)T1');
define('NONCE_SALT',       'Fp;{#zPtHShGsq^D xW9n]Te],q= W%`|n}:<Kd]qdAY$B;<)j84_,(D=3t/UKhN');

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
