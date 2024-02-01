<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'talal' );

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
define( 'AUTH_KEY',         '_Lc*PaZaA3{Mir69e(>*VwwfRCZW/ocf#ullhev{c06Z/QL$fbGz@6r&SzN8oKzV' );
define( 'SECURE_AUTH_KEY',  'o~L-]ufv6xjkH!,UG}jerSmm5|+N-EW&h>$!ZvKr&bI}eG]h=U8.wgS(Yq&-TgFn' );
define( 'LOGGED_IN_KEY',    '`Z&brN$%Hu}y&T;=^Astqh^UqTu/%`;yQi@Ij0:V:mw_0Ah[eSklvZpP}492gU/ ' );
define( 'NONCE_KEY',        ' 52$=].+W=pngx(h]fT%D_#cm/Pu0pxI[vr5_&2je6dsNYwR`wr^lw}*^YrP.E=k' );
define( 'AUTH_SALT',        '$K<(_6>Ty(1X`#BK42NRyh:(/(*0Ve&4u7j=p3qt2DbW5uw<sE7X403]ZomMzw22' );
define( 'SECURE_AUTH_SALT', 'f-LQ(dRF;Ju)q`zt|W|H2JAj&MDA[?exxS/#0J g2&ox(Zg#dVw3@(@UMsnB#a``' );
define( 'LOGGED_IN_SALT',   '0KGfTcAeyjlr_p66kzZibh31TZ_r&abEx$l$+vU@s9Mp#dYV9XgEQR&<(fCWUxq0' );
define( 'NONCE_SALT',       'QimS9m$Zw1Fe:0fHhGVYum^d-=yH3%F:eIDhTwDA(W*R[u8pz=GXng7mWFL}VyAF' );

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
