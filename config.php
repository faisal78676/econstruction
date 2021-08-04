<?php

//Document Root
define('ABSPATH', $_SERVER['DOCUMENT_ROOT'].'/' );
//Admin Path
define('ADMIN',ABSPATH.'admin/');
//Admin Include Path
define('ADMININC',ADMIN.'includes/');
//Database Name
define('DB_NAME', 'builder' );
//MySQL database username 
define('DB_USER', 'root' );
// MySQL database password 
define('DB_PASSWORD', '' );
// MySQL hostname 
define('DB_HOST', 'localhost' );
// Site URL
define('SITE_URL',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/');
// Admin JS Path
define('ADMIN_SCRIPT',SITE_URL.'admin/js/');
//Admin CSS Path
define('ADMIN_STYLE',SITE_URL.'admin/css/');
//CSS Path
define('CSS_PATH',SITE_URL.'css/');
//JS Path
define('JS_PATH',SITE_URL.'js/');
//Images Path
define('IMAGES',SITE_URL.'images/');


?>