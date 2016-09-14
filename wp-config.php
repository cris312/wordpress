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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wk6441264');

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
define('AUTH_KEY',         ';A):oqW 3c9VK(v9L6>4(b*|(Nc.I9 xytG}tO{PslH~n4zW$uOYRn3tTq0b5s}V');
define('SECURE_AUTH_KEY',  'l$sru-DL_hagh;I/C3Qg!VJV1!CP._gMv.lh<NZc8va;f:)OQ3.8;ApPhc%_(}Ik');
define('LOGGED_IN_KEY',    '@RA0org3rZ5(tgV_hM93XKfc#=[-1gxBrm;$B!+S$.~%%us+m5,O63`T9qeMmXaU');
define('NONCE_KEY',        '(P)%1T~Xq_*_(JL(|Urc}$&dQRYP-7Nxo%IiHmFgjveyFG/>>^#zjXQD-C=6V>WU');
define('AUTH_SALT',        '3i)D[QCu@18kSLpK7:)osez9@2L+2@uoV<}wX,eya) GQ?JJF~uxK)|ZPfCX`)!=');
define('SECURE_AUTH_SALT', 'wNr$r`nK{,0!;jvD:ox+/LK>BZ21PR&e_i/*zG$/V61FZtrU>HNabMvoLu_Z$=[ ');
define('LOGGED_IN_SALT',   '&qh5P&GYqWBn(wUa,X,le,puX)`kw!ECqyA9+K$FS1:.:g8#[J.t(@39FTyN<I9p');
define('NONCE_SALT',       'GmIA%l:?7%}8c6Fd.C1}*:3PX_Na[bYFw:^&!oFrmD$D<@Vc+*ZOu01<;bnBNU>6');

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
