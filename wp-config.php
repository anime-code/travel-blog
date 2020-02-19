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
define( 'DB_NAME', 'blog_travel' );

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
define( 'AUTH_KEY',         'f_/p$j)p:9|nyNs,C/m#@%<#59qJm??pZg&4|g>n]|EN@}jQ=s o_DP3~Qu1V#j3' );
define( 'SECURE_AUTH_KEY',  'vx,7-1v1.}w^h:}fih?Lm5 2s9U@L-!.$o-LpXY=-kzOR48g4qiF>{Jxm?CqId-o' );
define( 'LOGGED_IN_KEY',    '%HVN1)7P++u?k3( y|wOAjT~*QfMO-YTEa!`bb-Hdw^lb?p8{5=m=:`q5P|0j_AB' );
define( 'NONCE_KEY',        '-/@p*1+(CdE~$5R.4)g74z^T6DMxAPw$Q}h7.Bc8_3r332Y=(*0RRcC:nte?YX&n' );
define( 'AUTH_SALT',        '@adj`IFY,!u##<mlegPAE0r)dc$<cjae,UL3gMATV8~9z9uBzxET7?#ia9vK@W-=' );
define( 'SECURE_AUTH_SALT', 'pUI]$u5S!m-v*.n8Wm6FoZt,k1b~g$A2S{8+D&pKEbqpNK{/=Xo1)84wg!Wped8k' );
define( 'LOGGED_IN_SALT',   ')lCTYY?#0^F.Bc#QT}6OlP<Htyl`GB1rZ?U_Q/r#Utwc0CS$U<We&.1~U;CRHGB|' );
define( 'NONCE_SALT',       'ZIVOa7ssEZGE_tn%}s!;r<|_g}sy-4q.1?!F:bN&M`=PB~q2,bo*_eIn]#x%WCg/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tr_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
