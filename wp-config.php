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
define( 'DB_NAME', 'lora' );

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
define( 'AUTH_KEY',         '{9qR( nXClA!<O2noq:^]*[.Dw%vWjvHOG*Ro;kfKR6pr_[*f!>&{T4q6qP{zbnq' );
define( 'SECURE_AUTH_KEY',  'DI+au8*i;6!v5oU6X[Tb4~Nmk:2!ZOYavTclDxw;y_%[qc]t14<kx$ZNK#1n(BSN' );
define( 'LOGGED_IN_KEY',    '.QGqdC/]m~%+&47-X,0`D<x=orNpF)DvFt<Wu;AQ~4(MWRHSvV E-o;dlB`;$FaH' );
define( 'NONCE_KEY',        '=q`dD338_?>G*^%83nEc I_2rT/gzz{IUp~29DN=Qu4H+}xk#j.?;gi*HCQyVZgD' );
define( 'AUTH_SALT',        'tBp,VX_W4fuY8w2@7<km^Pm.IUZX^>ceoUfg 7<>z_%`}c>B-eMj?}qry2hw`THM' );
define( 'SECURE_AUTH_SALT', 'CH(9^GEG 31pUs<>z@VE FjmZ<7X!m0YaKv:`V4snU3AX8+17vK,vTQ)z n}<#wR' );
define( 'LOGGED_IN_SALT',   'zc,3G]o=(.D?b<we+W0QnJem88K`sQ,R{B(-tQ}p#5ZRSQ;*79rK^`#9l^dL~5mG' );
define( 'NONCE_SALT',       '1F+,=-;q>UPF]aAgK-sA!BpsPrlJd[Q_V^^%;<|cH6.T/&]7k|,-1Z0})L ~S{*z' );

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
