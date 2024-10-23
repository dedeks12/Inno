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
define( 'DB_NAME', 'innoverse' );

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
define( 'AUTH_KEY',         '7ck&e.ARfi<~q#W7C?p(j*sE[z73& [:sgfJb;2+<3/6zbmCovTc`ai([34-8gR0' );
define( 'SECURE_AUTH_KEY',  ';i}- f*Sp)39FrShMF`a3RHUf6H*7tvPk6>fQ;sA9De0~c@svsI%Rs^:Jm6H6Cf/' );
define( 'LOGGED_IN_KEY',    'I?RnGf!euhs/Y` 9^yAy2jA_3?cYotK|~l{)jL6;1PuA@c}PF^ylj(`hj/,r:.j%' );
define( 'NONCE_KEY',        '}0u1^yn*0eH9cD[voz0i]hG-V> Gk#Mns5yjXcyaY){H6p4q%n{~qp%eZz8j~%=D' );
define( 'AUTH_SALT',        'Tb90&`r!:!%~M}*>84^m`V9LIu92G9L9,1-N[_]{5yM6Q#rkMS8vBA4*1{+=AY?]' );
define( 'SECURE_AUTH_SALT', '/HZdk(YPM^)iEgCPQV:o>rJ!|b^A&St?)1&f<shJ3,6V0tyWUhgddbRZGt Mu19*' );
define( 'LOGGED_IN_SALT',   'vi$cxB|t7TfxpsyzRUylg2xU U4/rhXDPbnE v.IN9xu4Mc#7{l3]dUlgASV[-0)' );
define( 'NONCE_SALT',       '|tohF Qy-(a{/4Vpb}YbNS9|bM?q;{9FmixMjow3y;5@px;RwZ7E)OzA%l2a/QkF' );

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
