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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zMyU!y%z*L#,!7Kv04yi+*MytA%KI,g/p`9wC[ex H^Zu4lz_8^0y3,VwRHV(;DN' );
define( 'SECURE_AUTH_KEY',  '~0OXT-C[l0vX/v1k/+b;EQI0n(5;k@$6(&iXt,em6)_iN9{-JV ]d%&TR.Y<[=>I' );
define( 'LOGGED_IN_KEY',    'Jt1*L1HiO&^/:fCB6Gi_|&Eqp,G7RU]@J-@<@<;e=OGB^^eKz+@u]ERiJO[g@pSx' );
define( 'NONCE_KEY',        'c6z+@phVS(D?G^(yf-QC@s&:po2|{t67K`DWtNX?KM@b+*uo>y(,J*T[ +?w*iI^' );
define( 'AUTH_SALT',        'zkBN#x}7x,!M`no_d*v=S`>DW{7nd,TQjzSmOqm~UrxHeS $UB%%o~-^gK@oypD~' );
define( 'SECURE_AUTH_SALT', 'QI7t(HXkgx(m^6QL][b^v*T* /*fCTFOX/@)Ty.`$%-(i<u$-G7?Cv3>.Bm.5`ro' );
define( 'LOGGED_IN_SALT',   'D%bQSkrZVEy7M5l$hP4kMj1Uk]7~=j>M^D#]jSOXP7+If|ls0|7:BiIh_#ON^r<z' );
define( 'NONCE_SALT',       ']n;}h(C2#!H8 {bbfV[2Fc#CEc42)(D*]NEb?OzU0F,|Q$p/C=N=!,mYl=OT5nZz' );

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
