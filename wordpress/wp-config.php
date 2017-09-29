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
define('DB_NAME', 'mydemodb');

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
define('AUTH_KEY',         'S{poa`ua].d`C,j}i<#H1[M>==L&012?6VT`7O{JuW^@)N=zQR4QMf),gpo*BshM');
define('SECURE_AUTH_KEY',  'g.Ok 0;AYv,{{f.$f&,-~}IC_ZN9fUGfWx)<E:8-J8AQ$v,ZP#X):TEDEo];*R<N');
define('LOGGED_IN_KEY',    ';q6~=DIQr{7u<;[Amc~NyR@MQfZW^F9tc).<Sw3:I#RaD6WQdtti,&ftNYmgt>}N');
define('NONCE_KEY',        'y<2Ls~)ZwN-7)ek6N3u{0K`q#;Zo60i~A- 8;lVdS}]j`SrGqi3Qmu]$)T<c%j%U');
define('AUTH_SALT',        'GrBOfp[>-5~,ox6k(_<X %m2Gj;#8:r <2%%p8hP6@fK $_.D%[?)^LuxRhz;Jbd');
define('SECURE_AUTH_SALT', 'M 13]]^bgL)5,lb@N@rKZ&r]hdrr$Y&jye%F6#=^{_Wsp,x|NzZdH]V7~=8GbYY&');
define('LOGGED_IN_SALT',   'p?Gtt;`9_TG{TWkP8nyiVgKv2W32:{Dsr^guDT-;U;$BSbrk#}l}&UMWs{xu:c?}');
define('NONCE_SALT',       'h2&-.a/a`[PsvT]=<^N ugUBNDU),aYJiohpm !Z9R>Y@.2em0`:9*((?.H?BUFx');

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
