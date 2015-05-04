<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'roverlink');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'lwYd.qzxH$ckA>xn8|_^DZwpD.p*M|[+}D*}tMg:]@TMs8m(1-C|EXS|jwueB7w!');
define('SECURE_AUTH_KEY',  '&x5IUX,d#P~nzNol+1MtDd+`SOe&W^!2%+Q82t.@,}#S+$.N[;(HzNgqRTr46cTZ');
define('LOGGED_IN_KEY',    'RNL5t8ck;Kk;@O^_iftDs6RFBzE>u4p]#dT$hZZ{9j6(=+vWqGlFghT?*%l8^|zK');
define('NONCE_KEY',        'N=|6OQBa*Ex-i+yzSfh[vDy_HM#U~bAl2Q8%%GI6ImV}0b_*0WNgQfu2DYM#L_Vk');
define('AUTH_SALT',        '/v}Qp@!Ue~CfhG$Sm<)NcM)4BcV7|9~Butqf.Wqz*57#8~DPMZ9u@a<Je+T*&]c9');
define('SECURE_AUTH_SALT', 'efpmA|X8#[l`aZY*jF]C@BOHl{QSp9jnF!D]di$tYB1vzwX2w=GFOVN2zy-?q-S!');
define('LOGGED_IN_SALT',   'm+^3^1r<g4[n(fM+I]3!7r`2+AO^{KM{]lD$F@J-_zjE?|ug#Wyj)k7o8s+e+Cw`');
define('NONCE_SALT',       '<jSC5+*L@AkHS5|=M{{jd>ZvJEHk#hIK.}Y?NiNMn*e4S@^qthltPL:k/Catbx5_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
