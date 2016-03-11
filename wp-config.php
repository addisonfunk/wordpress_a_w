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
define('DB_NAME', 'aliveandwick');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p%-g!v-[4Z7`+3A=+{jeh(WCof|oqA7por9JdxKMd$/dy6<+S_RZAhj}`peZZI/M');
define('SECURE_AUTH_KEY',  '>GqoB^8pg#.jfy*/L?#;/lE`!oPY<tRS^%&H,ur2>x|2ohJemq*bD$+`}]pG uA9');
define('LOGGED_IN_KEY',    '9ZTKj/jS(|B1.Wq;tza6+hZBE$OZcLsnoMs)(&Fp,N*6z2G=o/L$><2+T=SX4$d[');
define('NONCE_KEY',        '$3Um(eV;?~pwr3jF$Yn0+~PO*H`f_NXZZc<sL6I$p3]5BCM9Z?SvA?{2k34[h.v3');
define('AUTH_SALT',        '&qhU&vw-I$NcC0?T,;9vPx{<(Ju}aOegwn)IH8./OT5nr,1hmtvt=a@sSq.Y%BiR');
define('SECURE_AUTH_SALT', 'v[{3aj-`|Tfq*`+QZd^9(|Lq}+}Q$ZFF.6|sB2#KL^()PH,9a{A5%v<xYw|l^xmS');
define('LOGGED_IN_SALT',   'qB]nL.q5%)?$O!jDq*`C1:4c{8p-<]%[/=.i9p#59?ivL,lv1z;t^O+<PQKkWR3}');
define('NONCE_SALT',       'v`WL|IG ,bI+W-qI[q1xQ?6&O-]U(;k5u]k%J3?R*tL3~|S(h_Pjx5 j[u=^V}[=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
