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
define( 'DB_NAME', 'wp-server' );

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
define( 'AUTH_KEY',         '%`iE&%XT~vKy_@P {H<!I;Nj#a9=#B9Ct~7Q|5}uJ2#)rB#~+{JeX~Y21bj_D;{:' );
define( 'SECURE_AUTH_KEY',  '#P#2FZt&@++naXNqrEl{FWB(<(N!yM3xCx>8=[h&EzeXyR.c&`g:=Zo- :k5.0yX' );
define( 'LOGGED_IN_KEY',    'teW;7cj{V9/;&,k2;Zd04/+v:+[S&mm*(d>Ih@$^!gh8`dM>QM(1H5Y!D,|/PCF]' );
define( 'NONCE_KEY',        '_e!E(evCb]oqT#(@jINsD]Ou8YP`CS cSG,8(sC_nfN[fFUT6r[pb:,C;#zP2 xl' );
define( 'AUTH_SALT',        '{J@YHZ%&Bi70y^J_MR47ej#;V@hVcO$DWk]-35g2-|qH`z)|N(:$V~l#1orz rSn' );
define( 'SECURE_AUTH_SALT', '~#6}YxM/|I]!fQqW7Vkk,{9AU&r(Bu}0|R#8i:G|)f^ Ew-xC:rvMJtZXHxd33#>' );
define( 'LOGGED_IN_SALT',   '9p7l!dyEWnkGHr_E}e*[jJ2FZ6tyymIfGHBl`TFpa/,|I36^S+S+_/`VT|Ou-p<|' );
define( 'NONCE_SALT',       'S5on$ml4K0:cVRE51cl^zCgQ2SIm^dZnpuvORjI=(k,&T&UU49KH/-.&v].veQ% ' );

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
