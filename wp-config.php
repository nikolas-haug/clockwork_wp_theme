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
define( 'DB_NAME', 'clockwork_dev' );

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
define( 'AUTH_KEY',         ']gi9,BCX+=-@A.[{&B`]&+czzd!d,f:d>oXW$ax JkR%Ya=u,aGGM^IQ=yJCqy_^' );
define( 'SECURE_AUTH_KEY',  'tVmN4o&,QD.R6~oVU+sltyj7ri7U6W/BA(w-@bjOsSN0y}KN;^P)t0`e}XCy)f|!' );
define( 'LOGGED_IN_KEY',    '^0Olh^RoWs;Ipl5 .)L3~CCoOqX*KeJpQ+iJ`!914 9a9@r:>vBH@C}@x2;%9uIz' );
define( 'NONCE_KEY',        '3*H&,Zx:fzt] T>)<n/B(A0ncdRWm PJcYo$Iz#0MQ-.LFAt}l|[JRLJs&.IQt-j' );
define( 'AUTH_SALT',        '|77%O_3|]DJV+T4n.:wvxzI{6gN]_Fz%PHA~&_ FFsXH`m/B*kitsJ%yE2[c5^<0' );
define( 'SECURE_AUTH_SALT', 'QQM)n<$#K14 yVU^^]DJ-Y!MW>_S|OMw)%F06;<U=]yj^Lcm)wg1`^3RE_TdXY0l' );
define( 'LOGGED_IN_SALT',   '|~+@r_etP;)1pU::-0JTPNmY8A#!O/Ck&*?E3GuE?< uSvhR?]^sQ&VJ=85x(8ss' );
define( 'NONCE_SALT',       'yGc`ZNSn%+*cdX?U>o8!j2=@iO9!RU,Fct/kR?aBew>.9#wyYL;/-2M5V.xOG26>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clockwork_';

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
