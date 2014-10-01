<?php
# Database Configuration
define( 'DB_NAME', 'wp_crandlecakes' );
define( 'DB_USER', 'crandlecakes' );
define( 'DB_PASSWORD', 'Kj9Jvx75R49dlpTz4ekn' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'S5M;I^3Sie<^JjyFbZr7VLZ`iY^q0nI}^^:Ry0AA]2y+F1F9Jmmxz}~|17Lh.I2,');
define('SECURE_AUTH_KEY',  '8sh3O[Gbs-fqS^UqIma_quEe4>b3M7gIZv{X.K|2h.^*jKl}i/to$?-G!@x_=)Vo');
define('LOGGED_IN_KEY',    'V4p`2?LLqGUK=q2y+3}4p?:~LXw_BaRILpwHJFZ:rbuD!X$=35{HL>o$b[BC+FDc');
define('NONCE_KEY',        '`_[7m-Wy-kcIq+Ma+4xpx-u5U^YOa?uCCb[6rkp*jAB<Dz8Q_!/SDA1VH84Ko$js');
define('AUTH_SALT',        '||frk*]_V)D(x;-_SO?k7>X7+ii|}9=}-byBYQdNV0zx-?MN-{9C-;j4IC7U{6mV');
define('SECURE_AUTH_SALT', '|,!ZvQ,rpk058KlG[=L.V(%Bp|;=v?m)ZmKB~{A:Aj3@eAQZ:&w M/&M>U_GwH`a');
define('LOGGED_IN_SALT',   '|#=j}Kn!GHmngu/E0h%l=aeiaJF6pVJ0-}Oiog@+T4K$:D^!MHXlT#(-K+qR`GbL');
define('NONCE_SALT',       '_fuVS@&$d0-{Gk #.58*q,u0K.lsm|+E_e$lK2!z=C]-s5w1:p^|iRvFa4hNusIP');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'crandlecakes' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'ad515b9bed9ea42b217b0d5f5d108d0c99b04c13' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '2811' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '66.228.58.140' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'crandlecakes.wpengine.com', 1 => 'crandlecakes.com', 2 => 'www.crandlecakes.com', );

$wpe_varnish_servers=array ( 0 => 'pod-2811', );

$wpe_special_ips=array ( 0 => '66.228.58.140', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'crandlecakes.com' );

# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
