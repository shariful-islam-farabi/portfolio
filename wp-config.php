<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'si_farabi' );

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
define( 'AUTH_KEY',         'c}5*@g9p~wWp17KdjdS`{cZ8}kt4sQZTnH^1k-3 Wx-#.EmiYQ(`qO2Gqh<banL1' );
define( 'SECURE_AUTH_KEY',  'yP2d*Ws&~K~~w]gbJTvaMywmiq5QEVA`~`6.)n]x7W2},exmc~z Pwd8K??YpBf>' );
define( 'LOGGED_IN_KEY',    'p5kQt<Mf}0t?UR<B]m#kFXLc.!3&1YH1 84d-@gNY1bHIaskd@Z8DeFF.&kXHySM' );
define( 'NONCE_KEY',        'Mi*>[Pbr0($$cP2JpSu$TP%v&IAg~~1]rujBD/^cC6JC^6bFj)t.2HB~5)^~*.M{' );
define( 'AUTH_SALT',        '}F=KcnEPPc/E0S5S~BIoL/sU,hG3?r9?R8{(1-n^=Sah3!<Jg&W&7iuVDdMf3e!t' );
define( 'SECURE_AUTH_SALT', '}qYoW9vSGkeQ|`cw5hvTz]3|)b5K:lhj>B!o=3o&Y^7(9D.m}[.LC#1,XZE>s Ig' );
define( 'LOGGED_IN_SALT',   '{oF/_<*?EXmOV%ZMg=CAL>jy|01q~c#}~^,y9CVmpoiQ~W>Jm8JRI&|g5 x]f]oj' );
define( 'NONCE_SALT',       '1hRJXvA31y=YjrcXt>G;WwK3?UhwSLgIyZZ6MGH[)A3ihD f%f-kmS&y6<W+[j2M' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
