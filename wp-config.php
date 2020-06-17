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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Dc4y[>a~1}6XIT;#QX*.RK!aQZ;{H]-7u~=4Q53m9wFHMJ9wuIr#|*~Wbvx(1T.5' );
define( 'SECURE_AUTH_KEY',  'jQLI$T}[3T#OWeZ]zn2;cNe?AUYK6%{gJpdA.yPpFV=NkFzCE]tf4IeP~z9-_g|>' );
define( 'LOGGED_IN_KEY',    '^iKr#Zr`/4jNLhZn>WZ-qQ&X5#f=TIpnCi!t3(Bl~XWCBF-<68nZsY6x/cEANnB1' );
define( 'NONCE_KEY',        'jINH3)/4@TmIWmte>iLUd$|vp^lXi86 umHue]oberw{V40&BbJ]T,x[0#n%el m' );
define( 'AUTH_SALT',        '}N~xQEt:QXQ1zU;Jy0*Js3aE+jx6,^%o^+m`m8d=KMDib@G1dtZh+FgD $6W(Q4_' );
define( 'SECURE_AUTH_SALT', 'Nw<SA}tf.*8u_2AEF>i<1%6oobPjJV-nawCHo6& e^@sHFX4u@bkXBlW?2=HW:_p' );
define( 'LOGGED_IN_SALT',   '1;h@S% ~ gcl}[-^ZQWR=D)xl%QEX/$.~Vyvdl19m,R/(+S%ky1v>%r0LB9QtuwL' );
define( 'NONCE_SALT',       'G,d$n|!^6K44I;a} pnkE:bY*NI8<wdGR3ynoF%+vfPu)0+cTGcC1xsWHmj&8qUj' );

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
