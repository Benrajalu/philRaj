<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_trunk');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '<R9m>lM5>ma_9Oe?ZsUZR:<dp~Ey_z-]{,Khu &GGwjF+2*|Z~y}{U[ajc$-xspH');
define('SECURE_AUTH_KEY',  '0=CUWg|n!0M%od}7$ba*^Ab 6eQ*b/3pL uIR1(1uifU>#.ww5iw!T`5wKUP9e&%');
define('LOGGED_IN_KEY',    'IuzKd>O@StP|uA#e-7ZYzJ)+vrM4-`N=OUsH1+Q[7b+ B0ua(p-n5|^`0A{xIz10');
define('NONCE_KEY',        '*B@O;[+$x$|]c5=%sNz-|.qr-3]P8I rP]fmAWwq93,~y+/?N/T>`caJx([U-5R)');
define('AUTH_SALT',        '=t4hi+$>GuUl$KdCe%p|l!8f+Y~E|2.u{gBQXS:v9:4T`~,VZhz(}EFI>5Q0rWGS');
define('SECURE_AUTH_SALT', 'n!Up_=Nt]Rtj-F<A=A)*^Nm%_MzE~~H}+[y*^hewpFmtk]/Vvy3[/06[ R]uV38K');
define('LOGGED_IN_SALT',   ']XEW|w3/l{=c/rB-CZUGRb7L|4itTANJho,) B:n8[-+RX6$J|@n45WDG-7KVT]+');
define('NONCE_SALT',       '{~~+iPb;Unr16nog{;{IR-=G`-Z!@@.m3]4p:(E}OE;:vxv(Qo+gbij-An~kH:qX');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress-trunk.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
