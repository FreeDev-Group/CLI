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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+9kz.BA_l{{}5<;p6pxP[*PQ8[4{#GzeP2WUryrVo: /u?nVcpwxCHlg][8O%D8|' );
define( 'SECURE_AUTH_KEY',   'o2]ii~.H-zEb[tO}{Z2XY#1CA{Hw_4h0UO$Q@DdS9-f*]c6+tR!=q5~q(HAw:w[v' );
define( 'LOGGED_IN_KEY',     '}3&B@$fve:k`UbgTL>j/[hZ8@SM@U6v{bOKnX&pEErL]?2^biLn@;1c0T0-p&RiI' );
define( 'NONCE_KEY',         '8(D}0K4z+uty@HYqzW_tGnLQ7AlWT,K;+*Y~Rb/bhgFf}Ct&2fweq>JB2ZMq|<,g' );
define( 'AUTH_SALT',         't],_a+8!HPUa~8E532rN0K1Ws[PkYtP7UFXWNhK1r-n*0n rnlYV</Y!4(vm{>:M' );
define( 'SECURE_AUTH_SALT',  '+N>%JW1QA$HkGu0G$95/l9s)cEdL|Tk>^6-m`8-nlxn>{O&dtZTC6Ln&d[a#i0N4' );
define( 'LOGGED_IN_SALT',    '*:)VE{0Te`qchM.9A-,wZ=Ub2WRyb;6]~KJtGR]K%Ugs@!cMZ22?ILqa=USQ[ P7' );
define( 'NONCE_SALT',        'E$jqoB~J6i#,S8,/< XG#/~4*Kpw;(:ehz5gj~}x,~!<V,cPyY&(Lokb/-Ahf#4X' );
define( 'WP_CACHE_KEY_SALT', 'nf2#;)s|re2_=?-Ix[CGJaO0K2w4Ls*kp.;JBb#( QtFbbDD?{?_-`a`)<dXH;|>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
