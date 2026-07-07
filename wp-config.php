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
define( 'DB_NAME', 'p-319092_kaz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'w~yf|-3snvJz[24T8W6vb3A_A3#T~C+B:18d#1epm44l2BM!;%JeO-]y-*G5p;1N');
define('SECURE_AUTH_KEY', 'A~33by717a1RL2_7#F6t(@1EkVue_k[EX35oMN&_))i8Q*0|FnOP;J6gGUx9ZhKf');
define('LOGGED_IN_KEY', 'PTSGm+2:QQ6RLe*-]6U)|2ld-xo9K-j64aq!976B)6rR5AczhtC[&vgza99p3/W1');
define('NONCE_KEY', '7m#3Z4e192@86805|#)w]:&H3Mo]#q4/;3O(Y]4jl9V:28)Mlv+S[M13Oeb6)f@1');
define('AUTH_SALT', 'd95_o|6pf/lm2~K:LMW@aH|CEN916f4#4A:4#k)HQuP#v7r9M;f5;y:q69(0cQHA');
define('SECURE_AUTH_SALT', '15e3-SF20K[%jJ-/+cx@4+Gfwk2vwM%TLw1fA2957xh||r9K!1]!s5pp7[7/d@@:');
define('LOGGED_IN_SALT', 'D#[@oZO6ELs+u&eN70~]o+[En*k3dg!p(H+!#]c~xf!c#qv_#HRoEUnHG*jO9|q/');
define('NONCE_SALT', '8R3i%d[N[*0F:0W2[5[:BI)TRX#&lYlTak|As)pB3aC0N#H7Y36UER:eH)527Q*;');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZKN5mzvzJ_';


define('WP_ALLOW_MULTISITE', true);

define( 'WP_AUTO_UPDATE_CORE', false );
// define('ALLOW_UNFILTERED_UPLOADS', true);
define('ALLOW_UNFILTERED_UPLOADS', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
