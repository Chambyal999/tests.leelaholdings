<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u364876456_wzKIw' );

/** Database username */
define( 'DB_USER', 'u364876456_K1jxh' );

/** Database password */
define( 'DB_PASSWORD', 'G2YxEeyulF' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?:0lR3/2D=U$m32.Jr2vx^S45wL<+qS[yG!*fDmvnpj*cbn^$19er]=P_.pbPy_a' );
define( 'SECURE_AUTH_KEY',   '%gSf^T6,4_1y}*Y__h|:-n,>yh5SJeaaa15i*P2S[]4-y6RhfFM/)jGWR[{H4d2k' );
define( 'LOGGED_IN_KEY',     '}-0U,lT-P1TNlri}1fFMQtf%nCa%Wqc/%VQ^Pj^ &N1xIN~*,W?)sPDlk)4[h1;F' );
define( 'NONCE_KEY',         'hb1-&JK<%yV+1-DBfIM$q:U*ei#B;A)7G+TCp{N6Hi/Q8kOYoaQ3*~[77|S{q-_=' );
define( 'AUTH_SALT',         '{ve2LfJ|TmxA?m%pTe~O%h=^^!Cbww<Gskt.BvaBd)_%V`@9nM?f2ro^IufTIsLu' );
define( 'SECURE_AUTH_SALT',  'M/0C]#D0+y^6Y}k^t]lSHYq3zM,*|x!H$Zmx F6HrD)ZB`u|CF!Rz|?t]*8RP}!N' );
define( 'LOGGED_IN_SALT',    'MP8BoP_KQggyt-0;`[R5#+ n;tB?gbi|1dJdJkV0sU,,(Jr+cTkbYr)w$.5eQ){G' );
define( 'NONCE_SALT',        'R-Xu*6P &[WN0J#0s*tt6$!h_baPKPBhc9qe#3x*<[!h;F2Rs3 s8|az!N`c8HSN' );
define( 'WP_CACHE_KEY_SALT', 'in/.Rp1tzb|g5`eU]J!?/ wd~.rXWIl]|]XIrvqlV>ZumN2}@)@5>Jh<xP{z{(J%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '161940ba583c3cce0d6229a10208d704' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
