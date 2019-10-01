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
define( 'DB_NAME', 'el_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5C58u,^,0Grm*yV5%2|)W)r6MXm]),p~TCR6>:;@oJg=;5lG%Hsh)W(xV..MyQ<r' );
define( 'SECURE_AUTH_KEY',  'Gt#_|N&n71y5{7{7*9~BVOv<P;<dTPE9y!duTv93G)!pciDmE>]TN-|wrg=h|PoQ' );
define( 'LOGGED_IN_KEY',    ',*d!XAVAyIb0#)lV3e8m@k_[Ide2Z5&Tg}IUELkw6l=iroR5CR?)#nkJ aKkWLPW' );
define( 'NONCE_KEY',        '.XoKlFH!KZ E8_l>x,PyyUb$I{Q=^[Y>YKgBy1t0!t>=rDLg6C|$Z4S I2z !Rr_' );
define( 'AUTH_SALT',        'y qxnf<&[k+:PfU:*.2N(}]2sE48%]ijv?&8lH6w4GLu~ndRD7w)hO+5(M<qFs/q' );
define( 'SECURE_AUTH_SALT', 'Vf&@THC4+70=r]fTx o`Pu<i7:4k:#iw9JbEuJ_MOmpq#Y1+r3w2=:Y(QS}a8]$r' );
define( 'LOGGED_IN_SALT',   'b+qe#x!0Cws7e->[P_<gX^}hxd;xQH0Q$Ke~0)Lqzg96Gt-D*sM[K<k%!:{3eP|0' );
define( 'NONCE_SALT',       'j6}-mI}2*U}`Y!:w9bog8Sw|FK@$ R]_[AJOEZp9#}pt3P8g}*p#iWYa*Fd{6>2q' );

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
