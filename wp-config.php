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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0|uOQ9tp2/-+Id,3WH^xJAMkCWa!B)1D(IOpoAkHx%8#i@)0x5Vx3sG<m ?}hVnr');
define('SECURE_AUTH_KEY',  'Lbpn_YRB*`VLZr#eWw1O;?B%x W~oo8]CjvViIi65QI2[sjWR K!%X{|M&5_pA_S');
define('LOGGED_IN_KEY',    'xy|+g*Alh3M-,GTusd:$M~!+`<u`8u8u)ug-,}Fu`GIIDjs4PQL`rQ~f|0L5rC/G');
define('NONCE_KEY',        'gEq6j?s>+@I$iL%{FV*oxqVw pEB~~+k,t%YT8HE8efi1kHmU?7_5xsdeTrFq!d(');
define('AUTH_SALT',        'etgg)9wW{38`TSTsocsY&4O19eBo@Y]+=+1-tw9&B]0z;w@|g8U7fd]Y29,Lb]NQ');
define('SECURE_AUTH_SALT', '(va/ZlAcN5D27hAML2x]@vmRH~f|l6f&n6OymE9Z8f5m&SO)mB%7f&8%A&)Y}u)D');
define('LOGGED_IN_SALT',   ')Z#+ <?H4fp~kK|5I9zTF+gDu.~:w`rJ2H-uSt|3rRmYG.@|kD5gs]nT|MIE_{oL');
define('NONCE_SALT',       'xUJ Gm+r9(bvDn-M90S^I8kp-e~*;>&L<:*w=bd?h6p`Na-7`^}^&n3i-Udl`Q`I');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
