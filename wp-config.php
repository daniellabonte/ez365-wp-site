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
define( 'DB_NAME', 'ez365_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mamp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password@123' );

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
define( 'AUTH_KEY',         'GmV)J7K/=qVeT-XX:z)+q^E#tGeCf`=SE[I HworQoO8FE;6>_?`)c4G/J]f:O0S' );
define( 'SECURE_AUTH_KEY',  '$-qFe{3J/r-zh2DnH9Mp~C17SnyH&F!J/]w*:7Rp|FeDMss.-[PlMn;zCaL-KYJS' );
define( 'LOGGED_IN_KEY',    'u_$$MU9f5GO|u4+|kW5*#W5I(CKc:*= []qhq*oQ2SWgaf!z~}=N0_la1b-%%0+A' );
define( 'NONCE_KEY',        '[KM7g;G`UG}!O&q{{Z*DHlX5(wwN/R?.$6H&scAfz!B;Gx!p#Kp$Z<b;LlB)OFUm' );
define( 'AUTH_SALT',        'I.X+#=YXYG{&H&?Qs%Xz%g_s#nX.~hGF4e[=fg*8w:faFgE-G**xxcy;w~p#Fkna' );
define( 'SECURE_AUTH_SALT', 'ec%8;9h,[p.Hc%Y<%x|R}[WJe2f<GBTH/`BVMjGQ>#:0XYrEZl}Uy7y+05n-;4e,' );
define( 'LOGGED_IN_SALT',   'tv+%pID$9H] $e%4It3-d[=E<YZg#+_&5u{6PQt{h tS!E8}DjO=-H`c(1XJX-F.' );
define( 'NONCE_SALT',       '}AVyE0;hg6:}.7*#6AzpNiM%`Ws 2ja:@B)Qx=i[`NQb$R(#w,i.bS](?3>-}:v~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ez365_';

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
