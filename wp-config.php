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
define( 'DB_NAME', 'hubdevel_hocwp1' );

/** MySQL database username */
define( 'DB_USER', 'hubdevel_usrhoc1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@kDub@i786' );

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
define( 'AUTH_KEY',         'EahXo?s1l2qExM_iLk/jaB:@VCnQh[r*A: 3@V.{,#9Ef;Zm?e2ekD+1qek,s@GN' );
define( 'SECURE_AUTH_KEY',  '+rjdDZWf^]o#t;p7&TfWry,6<~fxrTajTRXVX(8U.DDSanS4;4]^V@m}^7E7sG[v' );
define( 'LOGGED_IN_KEY',    '-Yytcnh15_PJ]lt2KC*[G[^Z*NrrPOaM)r=8w,uqPZIgGSJGu!,,xJ7K;tA[:aSp' );
define( 'NONCE_KEY',        'Xt@%@Bci5JB/EYP-l[yq*cbFn7H3q:n{=&;UeuH?w}<(+LR5t[(KtN]NifDpf]7g' );
define( 'AUTH_SALT',        '$.;GQ`hj2IwaD4uqVe{!8d^N|a3(6;Ii>`Dt6w?} Xii#}k_dUG8*aphU<B`gU]G' );
define( 'SECURE_AUTH_SALT', 'f-niPoS)50`hazV{99&~4s>d Q0o%q8VK34b%R5*]%-TW#Y1i2q:I/#0C}EbZ1W%' );
define( 'LOGGED_IN_SALT',   'Mk!Y |:@/i[R?+#,q;n~^}]2:5(|Hn`n+~I]o=W++Fl6x;IN PkPC9K%%^1maLYd' );
define( 'NONCE_SALT',       '{R,sA<1b6?rBQ-y8G@<}(KAYFam?*[~Rf(x;a~j-k[(I+6%%>{3N7+9[.z8idu>y' );

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
