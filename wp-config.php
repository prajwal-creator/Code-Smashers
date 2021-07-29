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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'V<;LW!5urdhYl|THjz7Fiz}E2|/ds?L$L38qDPcW*xb*.I{,X4+AxyCHtc7LY|ER' );
define( 'SECURE_AUTH_KEY',  '^)X#gGAo/!n_iR+N7?~Sy3+LXV#z8`TkD={KPlAdLY(.%po(3tp@hZwhj~ok*C3Z' );
define( 'LOGGED_IN_KEY',    'R)Er`d5G54bk`U5JA1e&U =2~OsSPrL7!iw`ug]P(e}wrUy>EXhPL@2pgQ@,kq%e' );
define( 'NONCE_KEY',        'XqkqcjcJ!E>y,E`qVdT/]y>{o34zvRP=63zpp2RcZXM7|3|%Ph2;Bi;g3hm!qhfI' );
define( 'AUTH_SALT',        'u@_4C3Vv!tJ?-t1pmkQtT.JgaS@d31&&k|U(@uj&B3IF]`D!f!v|0QY$ci&(.mv>' );
define( 'SECURE_AUTH_SALT', '?r?i-t/; e[ g_N0^Z,N|Np^qBI{D._O!_V?fcaqt`ulx]-:Fm@?,g-[HFC:pN>B' );
define( 'LOGGED_IN_SALT',   'efA3ojaMaXS 0N2s9WJ75%m?FK<5vN4Cu-d/u%;Fi5?yN^;X?Odr$8g6%MVc_.(<' );
define( 'NONCE_SALT',       'j4ZP.w#uY)l,z:&.jLB4QS9LE#vhL5Z| vF4F^Syfi.)2}*R)7!6M ]K@/Q-T{)F' );

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
