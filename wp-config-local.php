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
define( 'DB_NAME', 'hublabwp' );

/** MySQL database username */
define( 'DB_USER', 'hublab' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PwdDd5OGsFx03ejM' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|t7{*]5N-1+#t+G3<J=V7ck+.>7]s=3#pacIEES~hR>-R(RIn#M|>bDU+S.X@D7v');
define('SECURE_AUTH_KEY',  '*~b6gFof?2$(P&-M)otG1?)|l-;mMid%?LsblyP,3f8p2J-.P%;:QNd<8jE 3@yI');
define('LOGGED_IN_KEY',    '6EE@g{d:Q.qtlX`j}&+Ad_^=xR{J+TwZapsumoS+2*_> BD+x=U6:OZ&7Y,UdqkX');
define('NONCE_KEY',        '~zRI|ynYoGr!,pt8DQe{+ +9TE/2>9O6fTs5V*8,:#(#9n=zXkNY(|=9Y/xMiZ5p');
define('AUTH_SALT',        'M3vepE($04LW),Zn|Xbd-!-(p1(jHxMnfV?8&_/Kqw<X;`#X+d33qgRL0B1%k=La');
define('SECURE_AUTH_SALT', 'PI<cL~A+j+<FWo$2%t/{2z*Sg-f#:v4S{I&|Lc%II-f0U^dQHeP@q&}V_O]}2-2%');
define('LOGGED_IN_SALT',   'A80[+n!pcDr?o49*^6_p/dEBKl:~{+?^iFB0H0DXJqxJg,pRCKC>G1)A72)K|EWj');
define('NONCE_SALT',       '.pbM]<j2]5]1l8gZ2eE:~F3$1tqzI&Tx=*#%g0jI$j-m[;|tRe#1?SREVZzfJJRA');

define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);

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
