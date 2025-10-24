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
define( 'DB_NAME', 'Task4' );

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
define( 'AUTH_KEY',         'Fe(YpVzX9Yoe?kQw(51oup2,S*3jm)?ktT$e!]Mt3=+e8Q5hbR(8@,!9D*[|ysT%' );
define( 'SECURE_AUTH_KEY',  'g mi0B8O0[qMh^29?~P6L!t&,eW(-5J_#S)7]`|N4*4Fs:p#0b/u8PJ.@m!GL-%*' );
define( 'LOGGED_IN_KEY',    '}wU%tNSPu4(TmrP[{^6cR]=y4JU1Z[DsH_uv1OESJjQa:h4.REaV CGD/Q2+qf3k' );
define( 'NONCE_KEY',        'W:lMT2]+S$xzs4nNh>X6qi=}wUt(bfM1]FSd!(FI8^3{p^b5W>xs[5wzY-q8X_`[' );
define( 'AUTH_SALT',        '[p&YbebBY1V22h nL=?go-yW$TKJwp?bvYyqiK275z)R@b,FxeupM|aiK..@<l1J' );
define( 'SECURE_AUTH_SALT', 'mN|M7D~o4;!GX%D#}@z](///>!:]dmi`QZ0*Dz<r%+BHMQ2OP7>U3TW^ZAl_,!lv' );
define( 'LOGGED_IN_SALT',   'haJyuir:$0PjTu2c86s}dqcBf^rJGtELc,$8FHb5<6(*H}Nas*~Om%nKa>ZR6x!C' );
define( 'NONCE_SALT',       'S&$uAln:Zftvt:AzW{Z{)??{`rwa6#mpvPC#o<*2LcU=f_Z.!]S}5Lzpsq*+U&yw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
