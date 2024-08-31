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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\gedim\Local Sites\projectnew\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']3jZ==0WGT*}tS!0hg{Q~5a{TMJOaWEnX7S#njXL1Anm&XMA6qC+~(na?8@.H=:R' );
define( 'SECURE_AUTH_KEY',   'j~9vnOuz:G0(4S+ul<b3)Xz!_]}^Fdlg/GG.,Qozu84kNXv$#XYIM U)^)JsTg&`' );
define( 'LOGGED_IN_KEY',     '[1v5YBfg,D;]D>z@@v!](Ouu*aGq.[-z/CWuX];&G{t$p{<kQh-ekVGEKpdB,5/?' );
define( 'NONCE_KEY',         '2.Ba5B[5@3n!k2+ J_SD}l$LMC;L_oJQJpPCss*%#e->b13R.i+)|6S%[bI%m.&#' );
define( 'AUTH_SALT',         '&fq8}]Y{6<*]nL#,s_:&&V0Xsp=3&u;-+ yi<[8)(FIr^aggJkFq<9}Yd_#=_M g' );
define( 'SECURE_AUTH_SALT',  'FvF$&^R}mQXi<9U9B/#*CN(<j&TqJ)sx#v0EIj.6~ERT/7lQmYO}pP9Id!HJOtlT' );
define( 'LOGGED_IN_SALT',    '!%V*e!oLg*2ev8Kex.P]ZWy6P>Z2i$oj>8]H}7gxGDjn5q|*SETImtsGK8T!}@I ' );
define( 'NONCE_SALT',        'z8ja)[2svC,|CO(`LX&xqZ^_x)[1sl-;LGz</D=:CgVM;O2i!T[mn1S}kR22-thR' );
define( 'WP_CACHE_KEY_SALT', '%<+~!.XJxh)`wUr7F`N4b~]a#!g)A]f=U!a9FPl,c!<76&y)o|xWP9ZlgTfJbS{B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
