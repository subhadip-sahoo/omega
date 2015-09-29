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
define('DB_NAME', 'Omega');

/** MySQL database username */
define('DB_USER', 'Omega');

/** MySQL database password */
define('DB_PASSWORD', 'Ome#$#5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ww `H?+h/0-1/XM?Fo J};fW=Xq;d@GYKqc&}>It_D>}]N>RTE| ]paEOLg],nLj');
define('SECURE_AUTH_KEY',  '?wbp`I&`I/_lojHCx*XO-B0 wWxxO}eI@@NT;a+X,F[+C+R3.`7[gOx0&=+t]dM4');
define('LOGGED_IN_KEY',    'k!Pc/El8,}}A#-zT?4{W4VBB(3kPc0q99~A(ozxt0.k(G Rf6|S9>b_|i78$ww`o');
define('NONCE_KEY',        '7$z^V-z0oh*2vu`,7|/[^CZi-=$!(3-*:KaDi^D{YSh,lpU[k7SEovbV]{4IBtw?');
define('AUTH_SALT',        '9Wax959qYnC>U*LO8Njb*qku`%pGd@!]YZ+{Y!k^ji_Q!u-247^<|<!z-TNwz|P5');
define('SECURE_AUTH_SALT', '8W16dQTr+c-dR^Nr%B|B4MT][^51OGO**sRa|VQh|~W]bP]M#e()+;w~(k.sGKW3');
define('LOGGED_IN_SALT',   '4ATjDBWF^s7r27FSOmr^AC(7Vo1-@m4!>6wU<#dg!V4]Fmek<eso1FGRv*BU0t(_');
define('NONCE_SALT',       '12]v*.K|>UQdFLK_QsX2h)s%({RpphK)=Z /V8FcI-mghZiA=68q: {-nm[a&4.@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
define('WHO_WE_ARE', 8);
define('WHAT_WE_DO', 10);
define('MEDIA_PAGE', 14);
define('CONTACT_US_PAGE', 18);
define('PORTFOLIO_PAGE', 12);
define('NEWS_PAGE', 101);

/* Dedine date formats */
define('NEWS_DATE_FORMAT', 'd F Y');
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
