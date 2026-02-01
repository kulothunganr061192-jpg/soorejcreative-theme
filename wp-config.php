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
define( 'DB_NAME', 'soorej_db' );

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
define( 'AUTH_KEY',         'fZ;OO(s&)T9yg<%qM>t7sU+y#dGAXE{tU_a{C C^Y<%J><}68(u,>B6ygo?pz?tS' );
define( 'SECURE_AUTH_KEY',  'Y5ki`fhJoIQg)(FoPxpxS4da^=jBw^W%h}3b,ZDhHOV/Uxsw% _m{4Tq4@>ggAy]' );
define( 'LOGGED_IN_KEY',    'Be{/-)f.`NPfaD~M J4SJ^s+VWpHF28;iV@,,9}L1ok-q]=etF+*Kp-$cYE}xZ:W' );
define( 'NONCE_KEY',        'H/LHY(n>D.m*h%xwm>:3]2updY$J==0pTn<dWW>0gE/{7R}E}4?~0*7(/K8+*KH;' );
define( 'AUTH_SALT',        'W((fgKNIfnO^!Qd$|%yf>>`TZvMYus8^&ScG*!X.$nT(+5)oUewc,ysW)[f(WLh|' );
define( 'SECURE_AUTH_SALT', '2-~TA,zX}[9Y(m#3)O%q>9stuz+</9bY(<a!$,R[iEJFw.q#;;yji)dp)T|hZsZV' );
define( 'LOGGED_IN_SALT',   'cu.Yrr7_`GDp*Wzru;Q]e;%.o:!7udH%6[u{]+(0od8VEYO:~7+kRi#]>N=fJDYQ' );
define( 'NONCE_SALT',       'LFK-?L33-gl$Noc7l2damz+WK0_r 7:{A,/-kAnIaM0{ gXZbaP2@YtSmnIUV4tv' );

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
