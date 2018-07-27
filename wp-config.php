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
define('DB_NAME', 'theme-download');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '76c{Qvm/eq13HMaQ9m~;L1M$-up:KAxkZsfD`%1r&1W-JEN^E_DlC;b0vnjac9aP');
define('SECURE_AUTH_KEY',  '.FuxHT6SrA*X=MCw4)3F+Wp4MVEBxo%Fd|W5r>Fp[T+9R,txi8E4;:rcyX(u2y])');
define('LOGGED_IN_KEY',    '6$`KRd4|C}D^#O* sS`c I*7r<WdqtAE9o5YEsvkos&m{*w%04dr #OpA _DZzG_');
define('NONCE_KEY',        '8P(9.;K3! cY{378}FL`9 *3;4H&h_^R4ZL^vKXpx04 S>tbQ0JP64[n(/o`INE-');
define('AUTH_SALT',        '@a9`@~qe2!cZiq;LZj%PA_,PM`^LUEKEE@V}Sfs`YtD6SENr]WBU$pgb$,?e=yMH');
define('SECURE_AUTH_SALT', 'prPB?qi0&AF]@=,2zz7&ucj7;DWk8kpR;RzR,],xb0[;hM^+2N.(.2S2ybK[KVnW');
define('LOGGED_IN_SALT',   'K>m%[o[r~Qk>rajhjZ+gH&`faH>:$}FHPp7@x_EA7|HJ$U>dDOLV4q^ei}[I?#99');
define('NONCE_SALT',       'cp2vvz7Qa;~KVw9FWJn/V2 MouH3tTcy]3&H(^tGLAfivVPe=hgH.73:w{AOKX}p');

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
