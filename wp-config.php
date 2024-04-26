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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hn_store' );

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
define( 'AUTH_KEY',         'h4Lqek~uTB|&JR:mc.$ZVTK]r~#y!8gD%Y-Y$x.K]{YQ2:orqiA]N!qzJ>Kb#Zo^' );
define( 'SECURE_AUTH_KEY',  'a.*!%~8&XO]P/Bp]|ZEr(VT>EPm6m}eF%1x;rt@Ng~`f5ImtJu-~2/VW_f[cIa<F' );
define( 'LOGGED_IN_KEY',    'dYk4oqANk*orq,Y^L=vgAsbGheWP6(;:{qL3q|F*%.R>AWVZs!/8~OxCV#nlxD4N' );
define( 'NONCE_KEY',        '@aFT(B99W6u}4+_1+VV}x2PfwFNd?d`w0]s`c*3y[Lq^`D!zcMKp[)l[&Mkal7{ ' );
define( 'AUTH_SALT',        '?|d!#J)k5C?t4mZG7]{vh;52Du9R|A!huvWiT]g`Ab~*P(Z5{gw<laG@D)qi qxp' );
define( 'SECURE_AUTH_SALT', 'D&<r5@:C9M+{,[d&_C4n#KdD]Y1cq%n6wrvY%NY=|3Ml!p%=2JFsD/s|25)VVh+~' );
define( 'LOGGED_IN_SALT',   'UzS!lp9ag5@)=Q2%bpY .})4t#Rqk2$/n*I2}n>GW&>aAj(X_XN$ie[LIkdH`/O(' );
define( 'NONCE_SALT',       '{wFKwiYPA_.oSs*E_#Hf_wu&]K/0 ^ 5Y[!(4[cI$1IvTvV6~=Al8} fO0K[BJ(,' );

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
