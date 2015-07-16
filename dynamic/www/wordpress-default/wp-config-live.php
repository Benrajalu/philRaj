<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sugarfirdaddy.mysql.db');

/** MySQL database username */
define('DB_USER', 'sugarfirdaddy');

/** MySQL database password */
define('DB_PASSWORD', '010987bR44');

/** MySQL hostname */
define('DB_HOST', 'mysql51-74.pro');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'I9hMY^ <}?rhlvr7-47UqAbHD$)Q}6g1aou|P_+?o63/`Z[R}JBnC[4h<m?rT5WA');
define('SECURE_AUTH_KEY',  'n/A:RWLH2<}}(Xgh>+4I}:ydf8UHwrT*v+N4-1 |9]}0@M4[x[|lIp#uOVri[m=.');
define('LOGGED_IN_KEY',    'yuue;H)8[q^0`Lr//#uh|v, 5|1_)c?w T||_HNbrrX)YO{}XE_}~xd<xuS&wfj|');
define('NONCE_KEY',        '0,1P&*.zAO?O/m|4nZ3&|TUI|vp}aU6qG+aABS$N.=HCr;TBi2*8y%WX[l$1[%d`');
define('AUTH_SALT',        '3ZTb*l#7Te|r{WJ>gyHBxT;{}|1]d?*>`cmP9xHZfB2n-lQ(MYjq-G%AcT~3vuxj');
define('SECURE_AUTH_SALT', 'u]$((4?ezrWEj8VfEc/-W3#|U)Zf@2v3wf=>hA6L?YU>+%p7;myWn@sO2s;~j+1|');
define('LOGGED_IN_SALT',   '-uvVhOLU;QdnsR;$Kl=RVCFzB7Uj_VW $cML^)FJs|wJNUKlOZj.tm>s+W{Q-QU^');
define('NONCE_SALT',       '5.`c>h~P_QU_n<Q>W:jl>-/Y9ht{MK`B.cLmW-REjHkEl+e?&>73HG{$he1ymfd$');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
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
