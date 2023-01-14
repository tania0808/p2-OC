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
define( 'DB_NAME', 'chalets_et_caviar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_7nXh/BR)@qx>(Td,?J.EB,>$*xXu=_s(j,)w$`5*^C$SZ.}Hl,RAr+%-6DA>F{k' );
define( 'SECURE_AUTH_KEY',  '%jh, EdBZ!b<;NG/VL@jiN@>E?/zI]yNFTA7]sgp0ps=n-lc~9wg*6Vm?FjH)+q;' );
define( 'LOGGED_IN_KEY',    'kKH(Nh{Fj&d1#D|qJ$#OZ8#aCV<%P.0s~)I#Pc$C[)@%39:{G(nf}[rEc#PZ)sFo' );
define( 'NONCE_KEY',        'vf/BUd.Bzq}k)CZBtlJYC0>m)).41cXvsQw:X>T};*{8]:DkDCO,fAd4gAVY$8^x' );
define( 'AUTH_SALT',        '> eu53rla^$us-Uh5poWLSj><paI;eipZAsb7cp WPLIhTiaHTD}0>[G;Uq)bydI' );
define( 'SECURE_AUTH_SALT', 'YSt9e>n4MV ?)Fk2(W(AA5aBxN?u^=i*.{7L8?&MAAV0nq b~Uoj=1[*xb%l/M/,' );
define( 'LOGGED_IN_SALT',   '8yy^u-$HNR8_[VdUH9}d$7*v0~$js5F]fO[-ViS!/zoz<A8Mkb].7}:lyU5GNzba' );
define( 'NONCE_SALT',       '&vg  m|=vbaxBw$)p~wjk=w7R@>E:G+d8T`^w&sO3DqC84}_NO]+>.g[kL[cf5EW' );

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
