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
define( 'DB_NAME', 'testWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '2-fyAREYja.?<d(s]kct%K-szY_b`u{w>@$T.| AhM)T8z%];k&Th0Ue=fY&TFPP' );
define( 'SECURE_AUTH_KEY',  'E-vlb@w!X_}*x7eYHnTsfy>]t>-1i]bz%sGEA*+K%;cv8iQs%3CPD0Nd]`ajTMu1' );
define( 'LOGGED_IN_KEY',    '{D(>oJN=1j+l_^bP[e7U!5_Rdv,P}F8G2mW26:,s=9RpDZ95G.KxpeL@-{!V.jN_' );
define( 'NONCE_KEY',        'l;{tUf5//9BEyNgvo)aqk2*Ju.Vifh .ouP=6s,AT)G ic EDDqQoopa= z@cNjV' );
define( 'AUTH_SALT',        '5jW)^HT$bM},eB3yJ1bj<Kh)blyu`/?c]by<2/Uw_Ew@r4(,L0{{tt:nz}e316#>' );
define( 'SECURE_AUTH_SALT', '^}*?P=6DBDUT)*x;f6hDT4z>DV qcl`:7ww#~GqEMCt3T#qH>rFZ-ioKPn.IL?h?' );
define( 'LOGGED_IN_SALT',   '~_Q1VEZ@9VU]?tesY!8WT1(tu# p}?KV6;`K.JT;l1K{_ ^cIeC2@WL~r|irKkO5' );
define( 'NONCE_SALT',       ':nh9x8bZwd%|ho#Jzn6z(w1} cve K5-k2LByfsMy*{/ss|<gIRUp{;zHG#A8NZ?' );

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
