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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'thang' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '-#.?z!4Jj7j`n#lfF;=_?2OEz2YUKG->r5-vL7[E-E.6.i3}:Bu.MV%7%bQ~<!SM' );
define( 'SECURE_AUTH_KEY',  'iSHTdnRy]@LC7P$DKA7H>P1;YjS^4;>:g^Oy%(GrLcPtZ*{gH7R:c{u*J}|.b-xr' );
define( 'LOGGED_IN_KEY',    'VM Feed-TZQs<0om{5:$KYtJcp9MA,2tG00L-h.p@B4 8`)(I{>LKn8@V6SQm%X}' );
define( 'NONCE_KEY',        'wfuLxNK(Gbg8e[.|Za!OUV26Nxn#5*|L#~kgVm?HfEpG<r|5w0-=ag>widxknRAr' );
define( 'AUTH_SALT',        'WM4ICmDDDfY)?{C[7D<Ms6jGclhOzhw{)fb8Qp2yx7Qcbb`v*m.[4?re~h2ajM*4' );
define( 'SECURE_AUTH_SALT', 'T,AdDp^5.X1mT(A4LnuP+&Q}JWJ8j7OTk)~MxZlKQ!TdYP%s~]PEr48+_vUE$7[r' );
define( 'LOGGED_IN_SALT',   'rS7f#?$qRl&;xA*_+<EPH%/Z+ln^5dS#KnV+(Iaz;1Y13*#3&7X,5c[#<x$ENi*B' );
define( 'NONCE_SALT',       'Zm -AXj[*? t|n<-f%w/D{TD$35U+cz8Ezq;xE(&,t#uM&_;|b >r96dJZS TDJq' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
