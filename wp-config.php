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
define( 'DB_NAME', 'fastfoodupdated' );

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
define( 'AUTH_KEY',         'kw7*~G(!^6z m|V_.I`RJgt<^Eh5l!7%fP%pe6(*X^>;JafkQp?f=/YJd&e#. E~' );
define( 'SECURE_AUTH_KEY',  ':Ym=*ZvLp(k8/?6t* k^tN}3X42eRr^PW8g{n/A@Y?&-FN!tjid/=?PQ[{K,_{G9' );
define( 'LOGGED_IN_KEY',    'Q&#e{2Xj~=m@NNp&g-rLDOKe/Q5%+L3H=T+KRUxepec58RL[yuOYoBsseQ!rO=E-' );
define( 'NONCE_KEY',        ';L<:8){Xm(on`o%MSf#tRa~/ZS W&$q*6QRfXkUKHc_&8lqFoRU_;/d5?(;3Te=z' );
define( 'AUTH_SALT',        'Nxh=iV/[sy?IeX]g3^=7lW,o+p)+8+mwJ!=Jv)x$d}hDAK}AJ)c)#JapsemGB@x}' );
define( 'SECURE_AUTH_SALT', 'avrinAMLY|PV>npPC8d{s@em5Spd$X3R{qE:wfiI(4>0l1`0:Hv&Dz!6%u@!NBFW' );
define( 'LOGGED_IN_SALT',   'tk:l)2GT+=VWx&JJvd;TrzEp(fXU({GxT]Z+mr^5xz#zCAJai:h:eZZ/1K78FF^S' );
define( 'NONCE_SALT',       '!bA% >V1p&Rfx_s69YV3Yo0.G:Gz}SccSs%Hia|eI_Q+_2yG1q&lATm(:=Eugn3#' );

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
