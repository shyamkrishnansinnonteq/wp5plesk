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
define( 'DB_NAME', 'wp_djur9' );

/** MySQL database username */
define( 'DB_USER', 'wp_cwm59' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Xm_B#@y8Mila5J0%' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306');


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
define('AUTH_KEY', 'Ez%_RDaZ1&7;bmdhI2]Q/Xn-cI7kT08a0N;_L+6v2g18y2W-%)79~!G82c9g%8]7');
define('SECURE_AUTH_KEY', 'JKkD_r1@r0lNS1/K[Iyc%r2hV/*n:61c~-~4P:29Rrk)D01XBY0+b6%CUVCH8G[2');
define('LOGGED_IN_KEY', 'XPsQ4K7%j-]1SN1qKmE++2q1h;x4GU]n9d9%J2NEUKL+Y024;WvGm#BD+4Zf/!jl');
define('NONCE_KEY', 'u(a|G(%;[3i*rJ+uy~VdRJF4t162fqdkKoD%1O1YAaR/8zdQ!51/rbcF:0d_UW_e');
define('AUTH_SALT', 'nHV0yhOJK]oDx2[~!JdWzI0V_~]KN84YF0o36:KkK*o+10nK!oyC]B6L7yw~wB;;');
define('SECURE_AUTH_SALT', '/a365A7~D(a|k8rvYX7ukBx659#bH:2Zqci[5C9QvIVKX7F|s0!*aJ3%X*-_[5D-');
define('LOGGED_IN_SALT', '1[jU5h-4dv3!6(021@;*9!JKc+Fbs@+50S-vvx&p8qIuqD)J0w/n0n8#aJb;4z57');
define('NONCE_SALT', '[QtqJ24r!6Bk7O|Kr]%q[L9H]X98]4|BwlBXp#F|7d[|;7327Z~07Q~D;PF*QfM#');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UOoK9Q2aT_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_ALLOW_REPAIR', true);
