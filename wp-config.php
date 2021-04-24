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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_U4O>b}MEHFol[#fo3XWycG-ixX$<<iVH;FcTw1.k`CpBkupe$noG=K%F7r9@ T ' );
define( 'SECURE_AUTH_KEY',  '<@%]~E<8M?z#@uQP=3;i-w4R#!EZp@QmUT]bsFAi0(MT,;|,HMe2vxp$:!bdTJW4' );
define( 'LOGGED_IN_KEY',    '4|{LpA#e_lqPznHKs|+fuHgE$?x{:oa)nx2h@f pGUO%Fsx)#aLtuQoG0UM04#H7' );
define( 'NONCE_KEY',        's~s=vZFzVAs pk(9:&`p8a5j~SZZoA(l!uq4[x3uU#(M3S@oR(9_k`uMkT<Brq]4' );
define( 'AUTH_SALT',        ',(;^{c>mx3ku){vp(:mTU9;KrO(5(6+^R]`%}YeBYBJMN[LeoNt:?n~|Cxq<>ZOF' );
define( 'SECURE_AUTH_SALT', 'O0*@^d1S&ty)|4U5%384^cur>_*SDHVyaN^Ui+|4F84k-=b@ )4Beccd]2`~794A' );
define( 'LOGGED_IN_SALT',   'yOPbkm jW!%L]0;}P@a,|$g;Z8,vp4?@m!S}CgVG)Z(*,M-%~69WSEt^g~xKs&gu' );
define( 'NONCE_SALT',       '}=zyj&jRDA{g$E0F15qn]sT}36krRfhMHe05gPZ@Glvh1+B)Y$ud~?L_HAZ0ucxU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
