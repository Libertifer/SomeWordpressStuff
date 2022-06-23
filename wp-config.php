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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ivan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bla1234' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=h46pr@BN#1Fgv|pk_3L1<>s^=*%.frRLEbC{jG9V%D vM+GHdtc*k3u|cLImAQ]' );
define( 'SECURE_AUTH_KEY',  'tyDy3:hb|lyt/5X!Ay97KS}%V?h3O6SP%j)z1kP*LMP~]9b}qEu7>/Bdna;E:|qP' );
define( 'LOGGED_IN_KEY',    'o)xDf=H4Y.]3((oD.OfU87Z&=rM=A3~#h?j_~aC2uz?ybgXlE%:qmCZ5,Xsp&M(N' );
define( 'NONCE_KEY',        '?n5AmsqK^AEjJZUPoWiTb3@_i6sCu9jQgCJ,D_?rxY0t@zIsyeKZ;bb!KXJLCC;S' );
define( 'AUTH_SALT',        'LU1?1,qTKT/Ll r2ck[87js&N$-tHpAVN3$hjqSh=NL^]N_TJE?i7$iqU2e)b~*T' );
define( 'SECURE_AUTH_SALT', 'Eml%/*I{]XglJdUW$ilGT4M=u(mIp?;`}fn?,m<{Z$?M}{/&oH@A1+nL^P@`/~9?' );
define( 'LOGGED_IN_SALT',   '_;~Rs_pD!-:~2XldsYqqX;.LNuaR%n?$|CgsxsGpB]p85 >IPRa7z27wB<g;^.B`' );
define( 'NONCE_SALT',       'GmJrmv-vDhw].^~i`%gD`fGKsc#H#_GGp]0GRIi1p][bHfhyM$17Jl2bHe:4k)q:' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
