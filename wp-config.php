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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wrlddesignscreations_trigma_us' );

/** Database username */
define( 'DB_USER', 'wrlddesignscreations_trigma_us' );

/** Database password */
define( 'DB_PASSWORD', 'W@#@g45v#@d72R' );

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
define( 'AUTH_KEY',         'Sv-l$-L;qU.D46)JiVzH9`c{wnj5}(IJ:0xqw%hyI8$G/K>[;i`Txc>LD8G:&;AC' );
define( 'SECURE_AUTH_KEY',  'Iire<RT+YrpMcw(mk]9?<[kR_q!QcC*C>e@I>^t!0PM*:c?{jQ3]G~[Vc<Ly`UM3' );
define( 'LOGGED_IN_KEY',    't`T_,2%)L~5=JeWSlUhacQJLbSrpmXl.pYqx@3)Fn-PsI=|p(W}AJvF#3lg9J]0&' );
define( 'NONCE_KEY',        'K1sS1LZs7/IshyXo3#MKyR_`kV?yII)+/,g%|Xy,=P~eypDWk^ie:DN+,--Et_7}' );
define( 'AUTH_SALT',        'u&egh@n0!ep8X3tg[DDL{4`TyJ5}*J^P/s(h:qSw.,Cn@zYK#fM[O>%M,P6y4T4_' );
define( 'SECURE_AUTH_SALT', 'U)B^d}}O7aXf5(Y?eXKh4vncX,)h,jRGEAY/vT4V-%3hd/ogf};cwG(#:ny}k6uG' );
define( 'LOGGED_IN_SALT',   'ek4/Zmnec-X&7hqo*qxBlj7TFp._RWzNN92x0`e/|rOXX#>/IHtm%z??bmr0ug;@' );
define( 'NONCE_SALT',       '7.LFNJMe3N+Gzr&`S}8{9|BfEcen4=&sM^re,jMDv65sTrE<eb%U|7LG7Vg/ <L0' );

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
