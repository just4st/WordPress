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
define( 'DB_NAME', 'just4st' );

/** MySQL database username */
define( 'DB_USER', 'just4st' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wc5x6C~?K047' );

/** MySQL hostname */
define( 'DB_HOST', 'den1.mysql6.gear.host' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'GfSMcz)/0!2|_k/Qy~LAAj/^;$-V;;#9O3N3uhxtZYQ-!OaQXP3I@k`qAtPZ?$g2');
define('SECURE_AUTH_KEY',  'p9;&.5W~8E ;ki_G8P$Pm|MKJWh1[.wK3Sn:[F-^}JLQ<WC9JQF6zEX((mIpU>`Y');
define('LOGGED_IN_KEY',    'Kxv:H/O,Us6+6l%@K<t_]JWMo7}lmY,*>M)s|-b5v{ex(J|TM=i^C-<w@p8K>]S^');
define('NONCE_KEY',        '@fT[2K1{FRDL&NTOL/&|/hp+ 6`@xyT&.u|tFY2<sLiibQ4++%Rr=~-8d0sh>SuZ');
define('AUTH_SALT',        'JQ4zH-(C6,j|4G707mJQwtIW?8K-2e1Vg{HsWNX8`?8PBU!oSwUP%8r,CzT>Ox .');
define('SECURE_AUTH_SALT', '2u+ W1+}C= rdKU+e@N)qpOdhsq)]Mq7|4VAz*b/Fg1idPvFd/^G{>X7TK)xB*sW');
define('LOGGED_IN_SALT',   'Q`aqU+t8/@@)Nt]^H&]1MkLRcwKn.jzZ7qW~UJ968v.Mo,K6ZhMwk>Wy<5 Z|^.,');
define('NONCE_SALT',       'in$YgAbd*4UWoFpp5{JX$`u9EpFs1z Z4H[9!fbQE~,VmAnm|Iv31|T19c35{bd:');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
