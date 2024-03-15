<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '+YM&h=A8Npo502N;Y)[__(FL}XkjlF|Eh@rfeJv s+S8}{8v(JHnV0O:~ajXaBAR' );
define( 'SECURE_AUTH_KEY',   '<M72|<kp~^(hE}4Rzr||Ws&|$MRGd*9Eb~DzU0Fu2utf}fpMaMh[*H|;=Y?d`Epu' );
define( 'LOGGED_IN_KEY',     'M{/9bMPYb`dP1d4 nEW*@5fW9!^4h:60|.SM,=v DmVT-Cunx3MKMD,(;jD~0ww:' );
define( 'NONCE_KEY',         '9:.k5+3gtvpGn()44X2!*be;xDS*XFh[:NBxY6;Y]f_FdxJ#}joN]kxTEEK_R%#L' );
define( 'AUTH_SALT',         'n)cCMgfl/$nYiPdVr#5Cwv.nbb$Vg7:Sa#Lfi:l;~ )}}P3$bcYz%6vYFBdNL2J7' );
define( 'SECURE_AUTH_SALT',  'UTF5ka0Oxs!v@!~7#%CKJUWh7lf,*:ib?=|hH_e$Fp<N|7|(,jbi*o3|VrDo?.rH' );
define( 'LOGGED_IN_SALT',    '}Yzp4 :GrSLz7-[02=[Wh9YD>|~JFr7Xd9_tEoE k/FA_HnxQy3~w4cxOvpVx3!%' );
define( 'NONCE_SALT',        'X_2Y@`QRo^w$638,^k{f#CI{3}My~3)<iCmGZ9[iDvnf>Z5oPSi6hV9/]?9E~MAn' );
define( 'WP_CACHE_KEY_SALT', '/R1e*j65A$SIE9o,4Qf(q,b6XG;f NAo8zCgEKr,N.#I|%V$:&R=0`_%S3<_?9%S' );


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
	define( 'WP_DEBUG', true );
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', true);
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
