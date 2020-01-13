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
define( 'DB_NAME', 'new_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         'gRy:YFbbk;2j&2n,/2+g^t@t.<k<8=`wE`H/1CACc/Y2D9(:*PRLCx?<&;x^om<t' );
define( 'SECURE_AUTH_KEY',  'U6# 4OR,AV|FRHQH.oWaRS4PK9T!=/f!*D4LyqB 1+*K81bKnAy,e`DSylpxqbEf' );
define( 'LOGGED_IN_KEY',    'xvB~9 *CkA4g#;7 GFZZEB ;3?+~L qL/wdUCX~WA9yrOb0J8-ujHbv/N1LlCO(:' );
define( 'NONCE_KEY',        '$E=@~cB}{JXat!3&iOdpJP)}7_oAVuFdf&=Y-V.R(ILsXcc)w|E$[.J-u6)4+mg!' );
define( 'AUTH_SALT',        '.e,9PzP)Ltod/lj=[GHg?<-=j02!R8!46o2N)%/h+5a<t|TpQcUA(NcpQXJ-9Ezs' );
define( 'SECURE_AUTH_SALT', 'nQH`X;,|bCJM7U{lbtNzJ,Wxr3eL,@tfS2p~a8E_S}>D6<,xmW ziw4zAkw {a^9' );
define( 'LOGGED_IN_SALT',   '>N9,gmWxyeb4 y${<ph^{l`f@*p[MpGFbOWW+o*XCQ1=F0/2+_z}xw/:dYw3H*^,' );
define( 'NONCE_SALT',       'im=+clZSNi:`rSM%7+)tz4})}~s(uw<zZC&5mhY-CkfIN1/23]6YhV06+;lda@X^' );

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
