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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Wowrocks7');

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
define('AUTH_KEY',         '$`AX5pxLU:(w/`|,u1J&ycroIvT4r>u|`R<7QW@1$7>Lg0ymM<R{60$JKD!0C/HT');
define('SECURE_AUTH_KEY',  'WvbVLf&{>5G*51}|/*A?D2qa)}TI{?X+a;LDuGq]PKDK3f[}ep,Lr3#W`[6cKm0m');
define('LOGGED_IN_KEY',    'oXF,Rwyoat%+Nr+#dn2Qg8DOE /.F{d )=?[U5~*TVwXBJ+;vsr=)A/.v2,cIo+I');
define('NONCE_KEY',        '<)TY&gygcBlNqV%t(0ZR^sl:#}mcF}Ly)]`,Ttek|qprwH:~^zN k]={EL`)?H^:');
define('AUTH_SALT',        '%m|B`N=~XbX[?:(Q>b*mW3UtyzN%QG_I:f1`Uu5t]b*.(Z=PC[_#gcjDiCv.G/}b');
define('SECURE_AUTH_SALT', 'P=9bx5JK|$x}SCq@}]9f;T P7cfVZS%:LD,uIL)Qr!&wv^j/YX`yx8Jdj1^Hw@LT');
define('LOGGED_IN_SALT',   'G/XREa$v6M4:!/T:1bzWm>SMsq2#UxEVcK;#ZKFdC>ky<5[%unJ~4wPT7_D *a^}');
define('NONCE_SALT',       '%Q$yWROmzs92%0}<4j@ [&Pwgo:]{f U~s}7qi[Biz:+3PTG9dyQ;$8CQ jU$,H7');

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
