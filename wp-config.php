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
define('DB_NAME', 'kltn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0iNt=ti,p2/>fl>:zi.<q|)xcf23hTK|N`t.}_ozk9{hM!]Wc9uNV.fkaHEaC-M0');
define('SECURE_AUTH_KEY',  'ls`vh$0Ey.=m#`-`0*o0{?,nyJrW&oVnkBFlsd.V&-XgH>;#i ~GZZd)f/N`b8}$');
define('LOGGED_IN_KEY',    'o? *8/Xm*.(Z[4*c)X^kwjmR4GS:A-)8zW?~/GEc9-zI(5N^)S*A2Dl;!OW)*Hl6');
define('NONCE_KEY',        'WSCV{tI|#Q?W<|I<~4.$z1O0$/:+5Pn~#0Va[DqvAZF,-$ZCSn$|hL6d3~zcbX(^');
define('AUTH_SALT',        'ymO{hQG%kU@;o|#t$K$-7H)f2Tg_Qk$u`.:~ap]-nQ0f-=j*|$0!2Y*c[ux&WUuv');
define('SECURE_AUTH_SALT', 'zkcR3`,Wo1%Uryjm_qeZ8Ik2CT0`35RAaDVnD1J!67.^Rh KvZ3mBY9v4AUaab5]');
define('LOGGED_IN_SALT',   '=q#tE9i_9tSHswp/6^(!] ?!zM%vd+{.G]j%t?@:=1(4IrE!P][J)KGM/D8[+ZkO');
define('NONCE_SALT',       'b;d1/KJbVn;+#%m0G<7cu?}23;OKZ#*dTmQ_D=@zjM#@n^6aEhAm:%bm7BUc`o+F');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
