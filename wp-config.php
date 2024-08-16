<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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

// Disable file editor in WordPress - best practice for security
// Will be added by iThemes on activation, but if not using iThemes, uncomment line below
define('DISALLOW_FILE_EDIT', true);

/**
 * DATABASE CREDENTIALS
 */
define( 'DB_NAME', 'fxstage_e8c0d0fd6f265e4ab6c30e58773cb87c' );
define( 'DB_USER', 'fxstage_e8c0d0fd6f265e4ab6c30e58773cb87c' );
define( 'DB_PASSWORD', '$1$salty$7LOuxaDQJJ1eCZdihP6kz.' );
define( 'DB_HOST', 'localhost' );

// Set to false to use minified JS & CSS
define( 'SCRIPT_DEBUG', true );


define ('WP_MEMORY_LIMIT', '128M');

/**
 * DEBUGGING SETTINGS
 * READ MORE: https://t.ly/3FRN
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'SAVEQUERIES', false );

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
define( 'AUTH_KEY', '0I3h]!{qigIdvT,RD2n`u~YZ)28>6^}y1Lz5=a $n N`2ymb{6Fp-)E?P!n>+Xfx' );
define( 'SECURE_AUTH_KEY', 'zv:|F/]OG8K_yqObkl2^N&#VA^;+*_)mA+-:M^=@g5Bx%qp4^bJHNSQRA:~t>04Q' );
define( 'LOGGED_IN_KEY', '*;/]MZZJ&YPgo.>)v*#9wUbEwhD.RlE`{f.nL;[E5ppj-9hEMc*>O2-=KR;|uXDl' );
define( 'NONCE_KEY', '[bgqq|^MWG8P>Pg10$-[ps+MDpYI(&y=mt?7w?PC#ayqDA}9@)6,Jw|:[>-|z<j;' );
define( 'AUTH_SALT', '@t3t=va-]i]r|>/N.,R }@vmx?AR_-s!M~<a]wp89av|Wvrb2[ztO.J45|5<b1]U' );
define( 'SECURE_AUTH_SALT', 'j+t#xTBY<4[/cp1h}&|F=]0{=2$#w3MKYM=JuJaDVU+,DY3=Y$%f]a:2{?wE?vQx' );
define( 'LOGGED_IN_SALT', '$B|HG0!t;7oZYAH2a]|t,[Ok BF7!j)vB[-ihIq,3CjGw6 D@^C]N>u6~X3N4^pM' );
define( 'NONCE_SALT', 'lZ.<;X=/<PGouT:8NJ+!{3h;v_/x8e}_CDVa7Lcx0=989EYt>U=g<&U{UWI{9e{5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sdg_';

/**
 * Change CF7 Default Behaviors: https://t.ly/YobE
 */
define( 'WPCF7_AUTOP', false );
define( 'WPCF7_LOAD_CSS', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
