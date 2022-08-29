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
define( 'DB_NAME', 'College_Bazaar' );

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
define( 'AUTH_KEY',         'FygcltL&As;-5m _c{p61o$#a{E&Zk$`X&>aN=:R%4&WD.jLz8{?tL2KRKut;r`y' );
define( 'SECURE_AUTH_KEY',  'oH$@1sxV_T)u7hXs|zY1XG0+zh$%Nk|0XX*G;dxjBANeD9YLY*[eAy#.|]Qkk~0b' );
define( 'LOGGED_IN_KEY',    '32GG6q#;1&sta8(yPrj]9Zo% <prwNDM(#bcunJ$08NSJZ%C:za2o,_GJj6w+^:z' );
define( 'NONCE_KEY',        '~FEMp*at03UIvJfp-qqw2O)k76UnCg8*_wj>){()GSq1o?k>x_wMC!k=H7wn-$TP' );
define( 'AUTH_SALT',        'D(uB4|.`76q,}Ta1.*B%g`NGVOM6).qDpZMybj.JXd&E1ZH+Gkjda[$.N6]LaIl{' );
define( 'SECURE_AUTH_SALT', '.t=ySr)A&k9ba:}5;<&3E%s4OyWu9Mt*;KA@LE*f.S%vH|hF4u5%A<Nl]4OAK4~O' );
define( 'LOGGED_IN_SALT',   'O6C6Gs4QEpe.;u6NX_k85?w:Q6!$V:EUAr5`%ycYca[H^7GrUp|BWgTwdNyiG@d4' );
define( 'NONCE_SALT',       '{K/VJrKNL.!L]4 ,/Ieogy}!Me9`jyEAOo{UO`yLCEALZ;dS`wXW~;r,/uoLYV0}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'CB_';

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
