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
define( 'DB_NAME', 'intersynergy' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WrD$%6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_0900_ai_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8{f|K!y~Om%;7~(B9K-62GMu6ka1n+0QCA:;+55P&6jU3X!]^{+:|cb~k8])jqND');
define('SECURE_AUTH_KEY',  'LdO} ;*L2Uw$Lw(iph5y v$xL/m`O2CQgY| p^R2:s:?lWcYynLt-ZYTk-2&!~-H');
define('LOGGED_IN_KEY',    'Yjf7j1+y0>Z1e@& {eosu+&N8`If>6 y4g?]$-w!rDnhcLRycT jA!isUsQ>;~4o');
define('NONCE_KEY',        'k=Qc;Ik5>]d;p&LicoD6 56LTq-h7#gt-n:@E}x;sXGe]k&Qf_W4|-B(FkBx-|L=');
define('AUTH_SALT',        '9^li*rY!HW;6`a$1T+G+Xj,VGgHFOqso1^|MgM+/j}ln,s8otDgwP|<5S+SY)Dr:');
define('SECURE_AUTH_SALT', 'HMhym@,y?Brvlg!NkFli35sJ23be8^Q:ze(pi5jeo{is`DDtdRh^nJ@0G!XWs={>');
define('LOGGED_IN_SALT',   'CeOmWX@L(/RMM1Dq7Mf+qIR+J;F`XV:$7-*CJ#qxkH`Y6eB:^PEPl |pJf3NiwhO');
define('NONCE_SALT',       'Z:LKIVZ`S<o__[4++6/ZA#t|1(}.*a&n;z~O&B/iWFE +=E|k]%:e-64z4H+FI {');

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
