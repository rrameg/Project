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
define( 'DB_NAME', 'saintpeters' );

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
define( 'AUTH_KEY',         '9pqeRsWrIiGf>uS.ZD>VbG}`<Cfx3!4I,(*U@Dh2E>+_B*7~B-VAK+PoTi%pVf t' );
define( 'SECURE_AUTH_KEY',  'i7n,d<1#Y8qOdHv=+MO;A9/N<PI%kMK1`!bEWkkS_>hB|BYt+A1Ew61-FE![ro_U' );
define( 'LOGGED_IN_KEY',    '>IGih<P1h@^-7~rrj:Fe6Yw[D=gGssM~)B9&O/Vm*Cp!%8}JTZ8YNVEd0rlKtr@P' );
define( 'NONCE_KEY',        'sXN64Dt~3 LnAi_.#!0 s3Z(w*Wmlnb);g:Nn^+@b&* <ViJ*N02#qLH&hC7+ })' );
define( 'AUTH_SALT',        'F8[S.D?V5Xd<u+o4BV@zlmRMt6H8`Pn/XH<F I5jRkTWcFE >_`M`k3}m9~Vj#?R' );
define( 'SECURE_AUTH_SALT', '3h3i+j2 ?*>*0f2^d=hLYmMC]DvPS|,+jYJkmXazyUEf#~ij@n5IF2mT7f3IH2D>' );
define( 'LOGGED_IN_SALT',   'aN7jmK5SfDv,JLjHwO}d`g:Iwe#2F?)O8N*}_.Sg]~0b!Jf0OO>-M)op].yP,=*g' );
define( 'NONCE_SALT',       '0J~F*C<L _WIfW&44(yc_ jJ&2F%|u/Ohi*i}y=!2dE$O6.@Lq^mWW$!RGb]u0b@' );

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
