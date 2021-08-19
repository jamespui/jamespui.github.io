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
define( 'DB_NAME', 'unifi_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';<#&[2_8HJ|gd}:qTLE`;T7~~z/(:y+v7n7vFarm[uLfg[R,yu`B=(:FCG[|5i[H' );
define( 'SECURE_AUTH_KEY',  'J~@,O4qExT5-,G8fj9*Wt-SotP&XKA6~e xJ?}pe`-dR5~*LzIzd[%LyB!yuJxO:' );
define( 'LOGGED_IN_KEY',    'h@{Qi<]qaZPgUF=7?6[B@R.AdEVVh_wFPch8^N@xP_@4,+NrHWhlW2mAT0%:RINw' );
define( 'NONCE_KEY',        'QhkD8PMOFq8F`@P- }{@gZOTS!B:q/fgLfJ*0T/-jfT)f) fJR<t`hv c0*!Tt0M' );
define( 'AUTH_SALT',        '.b77XZAH1cQV[0*k$,knu8K.Y%Z^eiBBLs#CxfTz)E1>8[!/^4Qg06|:f4yZtCj0' );
define( 'SECURE_AUTH_SALT', ':WuhIzDP&;[FVkM;V+A=n:O{o)GgcbA0uy]><!Rt9.bb19[ ?*ev`7eYk$p:U-@~' );
define( 'LOGGED_IN_SALT',   '>Dz670]%Db5VQT2ljbHP2)fGDnF;:dpQR*9Hs#2W-r[Z`f~{S*!*o4]:1GQR:hr(' );
define( 'NONCE_SALT',       'pSc8zQhu3[dHU)t, hr=Q>_u3A*YK.dZXh@(qvajZw**W4p[6=5jxG<=r~sO2Y Y' );

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
