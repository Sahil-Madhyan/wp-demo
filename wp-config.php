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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codesmashers' );

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
define( 'AUTH_KEY',         'hEitC#y#|{W#Qa`HNYxR<u|?R>F0P-A9B pnC6ryNXq7+Y(Sw`P>D0%/R{P0{mj}' );
define( 'SECURE_AUTH_KEY',  '&%(eMLT)3X.Qj,]yGNS)G5>w^)H#v.Vr[4V5L_b<h$*a{{Jv/.|npMetsB<wJ^}d' );
define( 'LOGGED_IN_KEY',    '[Iv7$3wuz.t`hRWbbS*w@D%L9!R_;bjSH4$Ax1H8K& AcqjJ|<F$<1u;)k7l[Uq|' );
define( 'NONCE_KEY',        '6(JsN~/{p/PtF&wnxpA^g`5JV,f5g!TvP/l!Jj}>Y6<)Y|Ll?vBN~9<Mq50~$0PG' );
define( 'AUTH_SALT',        'DX+(k1GPFh9En%O~wWonXW9<h?QZVW])I;y8]R`[?>y?icS;/U(}ksM}]+^DbmSI' );
define( 'SECURE_AUTH_SALT', '<Zh$;R4r-)Y7bv1%1*+jk]0f>pCm6.Af~G$Y[[ zrG! Lr9pe=3N(DrcQan+Zd(b' );
define( 'LOGGED_IN_SALT',   '|hgA/BXOlZV5vb};wfN+]m0`_l}61l;NGhE-)Z?{5}B?uQ?j_;mQU=|aB_:wb@=_' );
define( 'NONCE_SALT',       'nfpVfn{IR0<r_0pwj%RHHe80JWn#nbfPp$uVA1$ 1$<g>L1(?`1s}3$_Lf;+s|`Z' );

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
