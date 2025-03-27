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
define( 'DB_NAME', 'abhi-singh' );

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
define( 'AUTH_KEY',         'kgbI^?9SFz;Yirk9[uJj?gzb<~ 3>}8kLat6yqwa$16A=cR`PZn`S=Rpt7_eIZ5N' );
define( 'SECURE_AUTH_KEY',  'a1^ v,F>Ko8v=_Mh@l!8JIYf|zjg$UMFeWoY0{j2t=v/F>8VL[D>z(~bp-9-20hh' );
define( 'LOGGED_IN_KEY',    'i YCPFCUxV~FM~yG~.Fja4e),s 1@_M7C]C{o30hXIrKpldw9)k?@/z#Rw12Gpbw' );
define( 'NONCE_KEY',        'bV4i!rDWWdgOD866IqYNcHT=()l!FTo)a0y9XoA0W?LX2R^Q-cI%){5g1$zL@l5f' );
define( 'AUTH_SALT',        'z11kt8Stpx<30Z[w!X+dB%-OeN[ve])l[6H+,{F ,r{`J`}ZO=`8Q=!Ddl1YZ&/*' );
define( 'SECURE_AUTH_SALT', '8KBFYX5|0F~M&C5TR2dd)@mj}G35]p?P<_X5UF}l5bmEG=TJ2ZFL^`Y!Z7m{fwk.' );
define( 'LOGGED_IN_SALT',   'fFW+0=pO<aLxw!~{J}] }+/3a0s[ =$s/k026.E.R!HKMw$ma_SKn>4NwbqGpv0H' );
define( 'NONCE_SALT',       '=z?HA.|W@q?+o?R^-yTy4K3y}v[w^9@gxs& #Cu{X[<RO>%RLtjOtU80w+Ty-NEo' );

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
