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
define( 'DB_NAME', 'agenciaviajesdm_db' );

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
define( 'AUTH_KEY',         'or(*.2;-Nu67:W<OBCHvycF.Jyl(^Qt+Om3^K?ni-:FoisBQ96WWnY2?{-*Cc[;h' );
define( 'SECURE_AUTH_KEY',  'HaEZ)ZeDBL[Ob(Ye.ktolXM?Tcap7_BvUDw 5`WGYwya_HuOw.$k V~<n3Y=#YW0' );
define( 'LOGGED_IN_KEY',    '`)n:*;P8ZMQj+eSl8uzkLxArDO|@N5yjgWW^%bT/d#^yRcO`P-TQM1(dJ:jI%`)1' );
define( 'NONCE_KEY',        'PQ&ox: md#OAHL2&-x#A x4<9`;.2VM8TPR/NzM/oHneejA}#d?kDC07s<&D=|n+' );
define( 'AUTH_SALT',        'WYWB;l,Z{a/mB.2UelPyBc]Im}dnIQ}vc$ wVGdi9Z?R/Zlx*YoTcTfyKI7{_Oe%' );
define( 'SECURE_AUTH_SALT', '$.tS` y6jea7^2/h t7ejClUwP^EDX.z.@]ZFyJq6BreX%kWU(yTU~y_`hAodt8:' );
define( 'LOGGED_IN_SALT',   'F1ppbpF~W]-$C[ZD<)fWYh<@ $QHc[JR)_-e|I@mr`%<k$4|*15b4(gl^$tGym]?' );
define( 'NONCE_SALT',       'Y^kazEl`/fA>lsDM*-4{iv+^(NCxmHcLeND_(<p@RFn(i-ZkJoYUvN/rJ@=%<ykI' );

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
