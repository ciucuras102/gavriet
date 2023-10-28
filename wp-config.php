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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gavriet_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',>yffpr+BEtgG%6Yz5{d-q3*s8{tx2 eMa Hhd(ZvIK,MfeWi<~KOCoV3Z3byMi+' );
define( 'SECURE_AUTH_KEY',  'bVm6TKP`R;}P_9dS U9A#p.-J`mq[7.X{?([A2hA^C:pdn?1~r.q4$+XJsYD171R' );
define( 'LOGGED_IN_KEY',    'v<[SAtMYqhGs(cKMsktY|;SOjEYZ`Te8wVR-qm&/#ee|?ZArq:j|d!9Vr2ZwwMW5' );
define( 'NONCE_KEY',        'nq=t;4<sW(&isc]:84 }RuWdGbxT0bK:|.:[I.^5T2O9ADarcWm5asV{UExO~j&C' );
define( 'AUTH_SALT',        'S,CnWB3V9C&V-k`kHuW>Xj$&FgU> taD&bV~We[!a4VdUs2nHRc>A*|r_&SS~z/A' );
define( 'SECURE_AUTH_SALT', 'mXXBX6{J#$/&{u!~.{W]:?_HOqX;!wVDDj^7~y6&p0h.mBJp`<Bl*MGx!wu.k8(W' );
define( 'LOGGED_IN_SALT',   'V9g0MAcc~hzT-~_pFW]wwx=FIFbX@Y9`2{n9;Nd@x-w*A38k![z&|:ru`bKT$bg4' );
define( 'NONCE_SALT',       'c_9>ev^~y|Y]C(%WvWT+p] U1D7#+tc9/u=k~.N^x3Z3z#F[RsV5|pAf}a/jT4#Q' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
