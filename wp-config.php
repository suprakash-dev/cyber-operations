<?php
# Database Configuration
define( 'DB_NAME', 'wp_cfrdevwp' );
define( 'DB_USER', 'cfrdevwp' );
define( 'DB_PASSWORD', '1bJrIJRohToXiAiLeuoF' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '_#AzmvR.E8FpPX3JHiPFJ8&cC#6)hg%.Lk96)Dz8WA#7Vrt08R*c?x&*gv=P6zvH');
define('SECURE_AUTH_KEY',  '3F0o9sE6bSlk&56fmUv0LoMABnlZ*87xruzP(alWqW.B5^f~hcPur6WpXe&=y99(');
define('LOGGED_IN_KEY',    'VW09sGDVcDRB$K,+Jp#exp)Dqg18jBEL*MmZBh#P+Jb,8_G*t4!LfOO+58W5hx(2');
define('NONCE_KEY',        'ok-YtjpG~?30z0a1^nNb,spMOm6@FLSqf~Q180dFbS_I5ZoziIju@s,Mz@3i#k#(');
define('AUTH_SALT',        'EQUuZUv5lrcyb8iB7F2uNZ7*VttZb9ZsjDTsElIje-l6#y4RK$0%z%J2,qgj0mc@');
define('SECURE_AUTH_SALT', 'yrMSC~KZ^r2~_kH(RArqjqArk5lp,$)^*kjf=,_P&st4LZMr(vZoQO8p38!PonhC');
define('LOGGED_IN_SALT',   'CcCy7KmATBmDxMYmYq4@D,Svd-cGIchryuSFAH+LcnfAM&#IOA@qxvs70s*q1hYm');
define('NONCE_SALT',       '(rE2Wqbu%%SRBxC^oUii$L66.&eckT.2_PYnls9DoquaNv4ewH$RMf^F9&nr)Qzx');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'cfrdevwp' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'fc27ef80ae4b4d56da86e9a887ecaea609f5d25f' );

define( 'WPE_CLUSTER_ID', '400231' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '34.75.52.122' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );
	
define('WP_MEMORY_LIMIT', '512M');

define( 'WP_MAX_MEMORY_LIMIT', '512M' );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'cfrdevwp.wpengine.com', 1 => 'cfrdevwp.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '35.185.15.138', 1 => 'pod-400231-utility.pod-400231.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
