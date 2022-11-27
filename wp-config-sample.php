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
define( 'DB_NAME', 'flawless_db' );

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
define( 'AUTH_KEY',         'j~:4=c^|:_wH} i&4upERN8y0Y6E8njz7X#UclFpoEWQwPl`bBX(PqW<ktY.=3L_' );
define( 'SECURE_AUTH_KEY',  ')pA@Z<}o}uh&JyQFrGhZ)sfB9O$u,r+QlDR-y.jA|Om(9AnIxTE!G:^|`e$!5W4a' );
define( 'LOGGED_IN_KEY',    's-5<1`@.|S^5jRMq48KSuk%$FyRDyg-4_tfWR$.KoefTDFdGF:K~Qx9M-3`HkQ~_' );
define( 'NONCE_KEY',        'I2v`Q<zR!#!Z}(:8E3$HxTt@%:0s@BxmbN-d,Id[{j[3R:fU)[iUg$,(U5+$A=YE' );
define( 'AUTH_SALT',        '<!flYEgiwm|ogckeMTvS:@Y]l!%k ZE:[LVA~3|@JaK8L#~$IzTi?y)(]/3mY.K9' );
define( 'SECURE_AUTH_SALT', 'VZF;.~+TstYewMw+0a3:q_o;^Fz/=d3-{?i-i#,bI/cU(CQ_:1Kbo)DvHulZ6rO:' );
define( 'LOGGED_IN_SALT',   'q]8groTFX|L*65H&g[DdUIgK=[cBx5h./Se5s4OQ2RRmcJr/~a06/l+&`< 5RMOe' );
define( 'NONCE_SALT',       'z+&.~U `FEQq8LG^bV~I-/Z`AT6)WwpEP1ztj]O}}T3mw5K4[T&WOH=y4O/#GYsK' );

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
