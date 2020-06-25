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
define( 'DB_NAME', 'win' );

/** MySQL database username */
define( 'DB_USER', 'Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ABDO@RAJA@' );

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
define( 'AUTH_KEY',         '0E~;k.L,r4 aFtOoQXnMCXy .Z[2z:qfKSEo@$mNM@b V8-ox~`s2_BW5,j6&**u' );
define( 'SECURE_AUTH_KEY',  'o(;zXOe.$z-Oc/l>`sTOte)[9NeLY;}/Y6EGn$GWwStY8le*2Gu(Vv1K?@KiTjPF' );
define( 'LOGGED_IN_KEY',    '|Y,hR@$IO$<%sx[k;sTQa1A~q<}ju5`/Kv%ETbo)?S8J8Gc{cQkNds&ZEhIH`8-J' );
define( 'NONCE_KEY',        'Lb]crRZ.))zOSm7bhYc0R`Mb|Y* ww&lYT>&MJ3# )2!lGo?#aUvIt7tzxWrdJ?^' );
define( 'AUTH_SALT',        '@)@/30C+8ExaE*dJXuxy2sja%vMjc<nti-+LfN)/uDo./lI /&1g6LV[n9.!#Q%x' );
define( 'SECURE_AUTH_SALT', 'jEf}eqNM4<,_jJ>%Z-92 ds!P~v^b.:kO<(nd&,`..bt-(,G0Ja^JA|W): /CAZM' );
define( 'LOGGED_IN_SALT',   ']V|+tHMd(?ceA6WmNr3&[J7?V8rPG.~pH|InYG.?ufbW@trC>rFwX<qXX~KQ:&ql' );
define( 'NONCE_SALT',       'h;hhP_iT59UGbSE%^C/9dM4Cv2KnYS?gwf(_~>k<n+Umyqlf@Fa9IHy]PgK72lBo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'win';

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
