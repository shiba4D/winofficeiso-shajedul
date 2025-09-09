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
define( 'DB_NAME', 'winofficestore_iso' );

/** Database username */
define( 'DB_USER', 'winofficestore_iso' );

/** Database password */
define( 'DB_PASSWORD', 'winofficeiso@@2025' );

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
define( 'AUTH_KEY',         'DqVm]UqW[u#l||RLG=85*H$C~xp3uwyp~V3K~]oM<sIi1k!2KG.$gYg;zX>wH814' );
define( 'SECURE_AUTH_KEY',  '?)yY]R+v]xXo1/q,P?hVJUbvraBGyX8@TtkruaMw=Z?qQ>!!~m:g&nP9L*q%9dp+' );
define( 'LOGGED_IN_KEY',    '%1*.wB~M6V|4DE*;W2*ExqZE[f?bv36*q^&>EU[e8JM(p>/>2{H8S_=&h0[W{C[W' );
define( 'NONCE_KEY',        '+89p1kyVsTvsq6;l{h5tDzId;H7<Uol7z !|,Ys+R$[|O7BS!(Nz.12b@hjd_qwZ' );
define( 'AUTH_SALT',        'HP#Su=VM1*(,)wgP1`z](pA%K}[At9k=/_S1!8=fII?Amm+l_,QU&G?qMX}Gv3n/' );
define( 'SECURE_AUTH_SALT', '*[6w}-!qFo.>@</v7a<[OU$#pW3*lZ.6*xQd74r]-l/x tx$T/7NBcYiNF;5eeNo' );
define( 'LOGGED_IN_SALT',   'p{dTM]j^jg:L)xS/Ql6Eva*gfop|LdZe^l 8w+npe*a(2gipK:?hF?gG9W40q3PR' );
define( 'NONCE_SALT',       'X=] lyj(q)[h}Ke(|fcWcqY]agDNm&^j;V@t =|8(!.Z@ jt!=u?vbAZoSXumMK ' );

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
