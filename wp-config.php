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
define('DB_NAME', 'sekolah');

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
define('AUTH_KEY',         '(Ue|B?3nTL@A|?ous%%Z<H?D]F;i `l6F@;==jr/#ZZTh;M~k>@NX0]?O8+|;9|p');
define('SECURE_AUTH_KEY',  'Zkwm=c1G5l3UOS!l9Ds7:j;@tcMC|tI]$Q<@N-j}qGj[EE2H mf,j(25U/!BLf)K');
define('LOGGED_IN_KEY',    'y`uP7o!I*$R^qKoJy}M|qD`;Z4n{A?]l?j`>A&Fl4w+?h0Cd=KB/32DeiB}o.!D~');
define('NONCE_KEY',        '67~1Bdrc`+wd=TqKm,EP#P#4B73&LqG)Wcw7]l$$F~9|V17QlE$J+7GY,:L5G~AW');
define('AUTH_SALT',        'ZFi8Y@r,ou&g /@78q| O~}[HOireXuyab[FIpmX@,}08ku{OmJu;1G#3Wv(7b3D');
define('SECURE_AUTH_SALT', '0G`%nGht*k~9o;~;})v Q`6usVC9&k}>{d4}~[:c<!b<|ZzoDO%8-^VcS8S{VDP}');
define('LOGGED_IN_SALT',   'SFV8Uj.`4:uV3x!mNCp,LE#yf(TG[z|U+WXMU)A_rY5B3LCMR#^Kpf+hN.g+RB<O');
define('NONCE_SALT',       ',8f81KM.*4j4S)t.H1ms=GnO7a)7!Kc<5@vnI^jlF)<vw!(mH~v,<[$l.vcx471;');

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
