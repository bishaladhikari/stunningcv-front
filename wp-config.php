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
define( 'DB_NAME', 'stunningcv_front' );

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
define( 'AUTH_KEY',         '-p}Y?*V!1Jvi4;FAS@idABO31|/l!pvBEo07^++D&IK|s3D:(D5DM&m! W/F*UWs' );
define( 'SECURE_AUTH_KEY',  'jrS9it`RUOJ. ^d$Z!v;5l*VI83pnP]O^*NaS5VD-@#]|Mi4*F3)NS$I7dgSoh[+' );
define( 'LOGGED_IN_KEY',    '785LkJh~EWO]Az>!oae}.uW0Xu2>~aw*dBx!Tp8U|1bKG076#hDKS`D,QCH4K6lt' );
define( 'NONCE_KEY',        '/*]SOa%d8<4$U:6z(p1O$pPa^!~dt}4eu,!4<G* xZPK>ruT`xS!Tv+`]4&+,3*G' );
define( 'AUTH_SALT',        '0!=>A$Ume/9?,zPe+]5>5aGAB7o{{Z`,TU.f}+m@%!S@eN2A!{d?{7$@`VW&lXHu' );
define( 'SECURE_AUTH_SALT', 'DY%WqS#i%J:e:X{=uX;|r%L}gLfH$UIisyG1v#.74dE<o*BV//%2!`B=X;Y!_t#-' );
define( 'LOGGED_IN_SALT',   '^rUx%>&g_j`~r)m&<*im-73 l0rw5xlg=]&jf4E4v0Ns0]zk?=K[k(JksaQ@rTQ7' );
define( 'NONCE_SALT',       'nfT46xu}_Z}F-$3DO Vy%_!zGd|J4=9c,0??kEcQ+Aob?3P/v2$Plws#!# :4UKR' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
