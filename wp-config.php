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
define( 'DB_NAME', 'seip' );

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
define( 'AUTH_KEY',         'Gk<X6XR v48kmXMVsk;FN.jJGNOI |J>.=-a1a`5.Y<z,lMy$:2o$nVU{@7)p}>t' );
define( 'SECURE_AUTH_KEY',  '6%kQqr|pFkDry;DLLhf7C4: Cpy,+Z.TfYf+O%~YSO3;e~!ic3CEHQq;&|55?*xl' );
define( 'LOGGED_IN_KEY',    'V%gd>ozM;ppc+Fr=B/a$/3GDvjCIWw/NE[~1d9(>x>4?l@X,)Ry$e&2?GAJw$VC>' );
define( 'NONCE_KEY',        '/Sp7S&.r4f 7S,LGU&?*,qYQp;^[K(`PgAi4FAX=%bDTqj)NHQ5XH-3#..]XaDGp' );
define( 'AUTH_SALT',        'mB_8Pwd]vmiU6ym&MU=;T,MFJkAEL9@t{yM.mtA(XdXSu{DlG$M]0TCj}G*%YjhA' );
define( 'SECURE_AUTH_SALT', 'LTD.7G`wJ81jmRzJ``Dm+1}%34LyHP0J6gB0B4)8d5X%iF@qCR!0R,}S7PQO:uOk' );
define( 'LOGGED_IN_SALT',   'Q|tAbMcG}ZjKp;[bUbrCv,+Zs|7bOK=C2ME3D|:+/e&}qj=]hnuZ5jvu<UluAT<O' );
define( 'NONCE_SALT',       'c=Oh+}at]*hKch*pTy6s%Uwf1n(~grFve/0MYy:.N!^Is>.`DlVXLs[iB!jpcn5d' );

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
