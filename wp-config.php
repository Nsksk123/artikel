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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'artikel' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', '1admin' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'cSk*!^8.L^l~{d)e2#(P4^K-jF:uh!/oJ4W(?N%dARe?_RsIMePMW=TLg~PNEP_g' );
define( 'SECURE_AUTH_KEY',  'I-wN q&sva`s1:(_{Th(PC|q&I_ng-S9Wy`Lv7Q4PQHc.(dA)Rf.7oE]:??Viok4' );
define( 'LOGGED_IN_KEY',    'e$c!~0o:cUzr<g&tE}p3{)!%13l`BzQH$f1FV8R<`.UK<}{.!Y)4e_=MEba:Z=s4' );
define( 'NONCE_KEY',        '>u%V/{yjuEeW&OZ^/vXfg=:29aH3j37s%L+}(=,wda^K 5>h*6zJuZ((M0#OUP#/' );
define( 'AUTH_SALT',        'f=AE3$Tgcd4fV5L@`$156xPVRm@#8zhF[OlAi9g4kfk6?ppzMon~SAwc.D./kbz_' );
define( 'SECURE_AUTH_SALT', 'JoTK`Pp4v-]&X+dlj=%4=Y*cGm)J:7W><e3U/*hao<7&Tx.,r$F^jl@2$-gh,aNz' );
define( 'LOGGED_IN_SALT',   '2BpIU]W%Kvc*(1g?D}P<hONZ7Wu0|i=6O~nu4Dt_wc1$]}+A;i1det]~k2_OH*qs' );
define( 'NONCE_SALT',       'H<xSb_<qjaC8(ws(boTAvf)qwpHSgY*5Pe4Rts%D(4l~%f`.<$yx%mR5}~4@3p%O' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
