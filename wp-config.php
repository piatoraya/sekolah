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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smkn1mkl' );

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
define( 'AUTH_KEY',         '#D_~t`*vR#?7:g?l;=vNX!0r-yC5+%:]T5KRQM(6SE$EPt%]6EL9Hc@Oa.ufuh;0' );
define( 'SECURE_AUTH_KEY',  '[C+2Qj&8z?YIy}q{oi  #r5s,O9L[Wi-c?Afo5>7WimHOF3/2,3aiLmLL_{FeDDJ' );
define( 'LOGGED_IN_KEY',    'oY@gMRG|sLfn#.;#ISr+7WO>agYOycvPTx;v`C;4H#U5iZxC#:xK<cL2I^WaV%xL' );
define( 'NONCE_KEY',        'n`3=!89:U.RF_c9iGlC~=*~r29B]y]}L-n+{`J:ZOyhe<G#<l~6);4Pl #]8moER' );
define( 'AUTH_SALT',        '/BW+4s*sk>B=H2wzT~+dPo($XV6uEUP(tSSaBZv|NhUj!t$N0u~(w}e~inGfJy6B' );
define( 'SECURE_AUTH_SALT', 'N.Us)skr=+9s`Gf2ggXE88GU;n4T}<N$TY4)VHA}hf{&(qN.O,o4KXu=BLIi|WP0' );
define( 'LOGGED_IN_SALT',   '7#1^HA.w8*G1nq+xG6d:cCs5<@(6rc~(:Wq74Y(kdq9Prj*#_-Sqzc9~al9/}eIO' );
define( 'NONCE_SALT',       '6rp=q?)3r# ^Oahy+ha!RZYXBip!2yD.aQ?{F?|FJ,0e/I1r_b9LW;,vk+FS 0|p' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
