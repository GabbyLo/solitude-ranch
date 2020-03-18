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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\solituderanch\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'solituderanchdb' );

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
define( 'AUTH_KEY',         '};>q$$/Wrs{Bj}tcyZdr$Xl4wR!O!AP)_0^ib#)Iw+@-vnSX$j4H}yxc>V*r0i-G' );
define( 'SECURE_AUTH_KEY',  'm!-b:Sm|Jp`D&I&` ?;x`I:eH&2_L6(|#`:abQtmp?i3L[AuzDfJAmgd.NDnX6AS' );
define( 'LOGGED_IN_KEY',    'C9?7en]sca1MOyn2[Zi$%&V7<n>1U5rS8q:K.`X=VD(uk}L{M0[`,+S>,/9^e$r/' );
define( 'NONCE_KEY',        's,VnqMyKv[`XPU4$gLnVnc>`6#-x/AxqXf+&{cs6}}A)}H<w1DR>J^yXefx++#3%' );
define( 'AUTH_SALT',        '>gI1TE9VP5#qea=,;*lMY9f%AZv.-IEDsz25]%,g2Hty{1nVMg.~% Yqj92;iv|W' );
define( 'SECURE_AUTH_SALT', '&>B0~|f_F$=wx^PmFn?3L0nu(#PLMWreNM@.D-nh=lp.?Q1O-j3kr)w6bB<dPKw.' );
define( 'LOGGED_IN_SALT',   'iCyy11%m=RPw8_*+bjj7xOG0X%oU-Oh@7-.-Q,mC|O#WBVsg(?nqJls+!zjgdIS)' );
define( 'NONCE_SALT',       '?)em%^ue_JDP`jJ,HxM.w?v7p=[bg=:v{;tBrM]WS)BRqI^B&x%-srHg8fSL.,$m' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
