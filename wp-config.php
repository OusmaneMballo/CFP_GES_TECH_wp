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
define( 'DB_NAME', 'cfptataguine' );

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
define( 'AUTH_KEY',         'I&J6@HDXE-z0w?]9jCD3/@Fq<Y<f`R&8AEr0l-O@fvbp)8JCZ#6bzc?T89bivD_F' );
define( 'SECURE_AUTH_KEY',  'F ^]DhTWI?n@3<,`(iD}av@+.tmNbFr]&ftLmcv%.n|UUgi?CN#0~~Hx#9Z3@.a$' );
define( 'LOGGED_IN_KEY',    '`C E2Nih0JnT#e _ I@RI>jnJX(#Rg ?1!9(#}UlehjN92ssfylFq$HyZPl%ymd*' );
define( 'NONCE_KEY',        '?zUKpj!%?BTVodj$j?*Nm]+NeyURG#$k-fuJ3KkT2Rh`NpH,*Q0q>Gh0UfaM(PrG' );
define( 'AUTH_SALT',        '&r$>? aNwWl?-$oNW1$f-ADqga!^>%w;V@kXI3D&qbCD,&x$4FkX;X(H>%lSq8Q|' );
define( 'SECURE_AUTH_SALT', '//Ka#XXg/@`h[nLKYKnN>#jnT =!tn5#Ure+^m@#e6EsQoKbD XWB{ K2A,jM~q3' );
define( 'LOGGED_IN_SALT',   'k#[k!!i)IVdL2^w8dNPmOcBC_`X!gsk(=Kd1?_*9(.Pjb-zYFGsC >C4ZQ5J#8#t' );
define( 'NONCE_SALT',       'xG3$}X!kX1DaZLcqaos:LnqFBNK(@B >DFVpUi-C76He6~E}JVc~P+jE.jZm0.OQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cfp_';

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
