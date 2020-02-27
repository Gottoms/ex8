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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ex8' );

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
define( 'AUTH_KEY',         ']Nv b^rn<xZcb01J%~roih<cq57.XuF:BY3GILy1asi/ rbji*wJ;wBp~wRyLgD[' );
define( 'SECURE_AUTH_KEY',  '+MS{8GhuS?JGQ<M)mf@LNNq:A@d1{&%FX,eFQ@WgE?Hw6m^E_)VPw{m!VRX3hOq0' );
define( 'LOGGED_IN_KEY',    '=y?jBanzBYy/#=We=S`vZt32X%~M)=Yy^qMaCA3LhiTbM4fJh}BpRnm3pr<$WtFj' );
define( 'NONCE_KEY',        '`>fF]i+c |JPI%+cxryr.Z[2>~+0txX&r@+kjjbg4FKh1j*`qNNn(M:B4gp~5q=_' );
define( 'AUTH_SALT',        'Bvl;_zCU^)e5reULl^ASdYD?tYoPct0OeTNLSP; ZV*gr8~$RwX 2XHH}eX` B0t' );
define( 'SECURE_AUTH_SALT', 'R@pSI$1{]OxQPOybJ%&h&>VU!k#E+$S&<y^NWkH04pJAdwSoP}`r |368eJJ,Xfo' );
define( 'LOGGED_IN_SALT',   'mYPS)]bDeqm#*~u>5<~trS~9-)A43,~#]h15H.]d|ZZtU%]_V-w5@lY$[&nP!|1:' );
define( 'NONCE_SALT',       '^E1Q~-[-#n(r4G~TN-[/ F3<1Vd!XJaw4/5?sr5K|uoH,Xj({K7{(%M.)8Ep;[b@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
