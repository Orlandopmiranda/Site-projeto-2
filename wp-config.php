<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_33700913_w536' );

/** Database username */
define( 'DB_USER', '33700913_1' );

/** Database password */
define( 'DB_PASSWORD', 'S.3pF3b(p9' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dcn3ygr1ygzb3fyqzvkrl3fqdgsodaknrd2plljgw1terqv088njnnrmpqxfxeck' );
define( 'SECURE_AUTH_KEY',  'tkz5lmwtbltu9lxqu6sadgirgtdrzsvi2gyvua6tevg1xp41npvvgxr2rvhylnys' );
define( 'LOGGED_IN_KEY',    'xhpyyk7oocdk4odlbkfjrkjymjv9inj5uomymdzbteh5icizvmriysrir1fxklw4' );
define( 'NONCE_KEY',        'zkcypu4tdmsiy8u3p68xppppjhxt3xfsw84si5kduwb6peg8lfan4sdyvwdhx3h3' );
define( 'AUTH_SALT',        'y8zl2c6f05lcpfbzohzuempvyk8f43zzhl3wb9augqniq1neyemsd6d3tcdjwpln' );
define( 'SECURE_AUTH_SALT', 'l79qsbrdtys3mkujvykjoe9iytcsjc6vuzilyxy19xeyqglyy40fby9bnqi3cj5z' );
define( 'LOGGED_IN_SALT',   'thhyjq82nbmj3yc8v6za4pvf7yjp3wtjbudu0ltygebt3ggb7wxirek5llzzvpfa' );
define( 'NONCE_SALT',       'c5xxxnutir4tayq4pdbjrn962gji2zwezqq2tjnhmlunlyifecfqpbu3vofm2ej0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp3_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
