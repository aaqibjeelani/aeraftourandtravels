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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aeraf_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'RB#}F@ZwTo/jl4RJu+VXQUHVT$HY}Gc^QW6|S7#V2}K@N7bMtN1<v*I?VX<18Sq2' );
define( 'SECURE_AUTH_KEY',  'P_#J=q1PZVCr({p--B4N5G+9<[838mhkr:2yPKAl1G&xfoQ/;5;-C8aBuWdDcc9D' );
define( 'LOGGED_IN_KEY',    '5lRq{}n($u*pH<8CC J;$T68g[NL.QL/ZcyJ!dr0=2iuwwabHg  R&dN-*+XAak ' );
define( 'NONCE_KEY',        'H)}W*]Y6VJ` WPoQ#~29GW|u?`22-dMg5vN=EKa8Z1TKvD;C1>ntY:ov(a7sq&Be' );
define( 'AUTH_SALT',        '(LZm7TGJ0.ck]h$_#:-?%ye)Si%^kt^xAi;P=![{HpG/0NSitrUA}e2e%R<;zW(q' );
define( 'SECURE_AUTH_SALT', '?-s+U#-,~1(8IiNr N@@c Wq{L[.4#GhA)xIH*PiUrO^S;/84&_QgPz;ZZT7KnVg' );
define( 'LOGGED_IN_SALT',   '|KBM:;X*/4<A&c~(od>ha 6qa.Cy#9qjnipQtgg>I,S}D:*!#pp@(PJkc}Qe_>Ot' );
define( 'NONCE_SALT',       'oKJ_vvN`;FoYUrQmFHcn(1xVyNji tUOe>,x?]W:2b1gMAfLVJK<,5l*;DaUC1}p' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
