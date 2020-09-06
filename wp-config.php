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
define( 'DB_NAME', 'boldlydigitalja' );

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
define( 'AUTH_KEY',         'T<KWK+1xW8i0;V.?nu5)QaD[JoU~$3OwMw5%X_zwPB1h{nGtW1J/Ro2vgJO-shb>' );
define( 'SECURE_AUTH_KEY',  '+2ZVM587/vww~}-|G1g0a1AOF._73PDQ??&uq#w*G_fBd+@]CCrQJ7q[tY]AV5Em' );
define( 'LOGGED_IN_KEY',    '],k6q*098u?:4_U0fxES8c@]71.hlbLYPlhxx(^S( aC[;Zb-d;;nBv2$r`]#+-[' );
define( 'NONCE_KEY',        'UXho8pC8/XIqP$!:.>=Yug06$JG]#;hLP/hY_~&ry+;-T{cGq)NdPem#7|QJKd-Y' );
define( 'AUTH_SALT',        '2]!&tnYXP }$>Lzd%(Lb]{YMot;~j=o5n>*zIj/1m>CX%^}@;#Y !NrpoW@N>i)~' );
define( 'SECURE_AUTH_SALT', 'A;bGnUGnkt!8%vmulxbaRcPH2G~cMY&#SJs8CGa@,X2.DX%23;HhRoyRdQl}F`Qq' );
define( 'LOGGED_IN_SALT',   '?+40{Q~ $4f4_9E4 &*uu$bfx($yU!-qA];$Au-mW;vL#b57<qW%FQnp_lX(^b{v' );
define( 'NONCE_SALT',       'TT[i:=Jw)UZdq@{8x$9,Cj5R!1>|}Hi[hQ*s^+@z49q@X-nzyXL(/sqzka[ ^cOt' );

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
