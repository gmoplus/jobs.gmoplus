<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.3
 *  LICENSE: FL6F68BDWXG0 - https://www.flynax.com/flynax-software-eula.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: jobs.gmoplus.com
 *  
 *  COOLIFY DATABASE CONFIGURATION
 *  
 ******************************************************************************/

/* define system variables */

define('RL_DS', DIRECTORY_SEPARATOR);

//debug manager, set true to enable, false to disable
define('RL_DEBUG', false);
define('RL_DB_DEBUG', false);
define('RL_MEMORY_DEBUG', false);
define('RL_AJAX_DEBUG', false);

// DATABASE CREDENTIALS (Coolify MariaDB)
define('RL_DBPORT', getenv('DB_PORT') ?: '3306');
define('RL_DBHOST', getenv('DB_HOST') ?: 'l8owc48k8kcsgkog4s0swsg0');
define('RL_DBUSER', getenv('DB_USER') ?: 'mariadb');
define('RL_DBPASS', getenv('DB_PASS') ?: getenv('DB_PASSWORD') ?: '539mq3x88uQXlmpBYsHAB33yoiU2VDyPnc1jqZstxKmafFhqiwXYNcKq8e1QlyTV');
define('RL_DBNAME', getenv('DB_NAME') ?: 'gmoplus_jobs');
define('RL_DBPREFIX', getenv('DB_PREFIX') ?: 'fl_');

// system paths
define('RL_DIR', '');
define('RL_ROOT', dirname(__DIR__) . RL_DS);
define('RL_INC', RL_ROOT . 'includes' . RL_DS);
define('RL_CLASSES', RL_INC . 'classes' . RL_DS);
define('RL_CONTROL', RL_INC . 'controllers' . RL_DS);
define('RL_LIBS', RL_ROOT . 'libs' . RL_DS);
define('RL_TMP', RL_ROOT . 'tmp' . RL_DS);
define('RL_UPLOAD', RL_TMP . 'upload' . RL_DS);
define('RL_FILES', RL_ROOT . 'files' . RL_DS);
define('RL_PLUGINS', RL_ROOT . 'plugins' . RL_DS);
define('RL_CACHE', RL_TMP . 'cache' . RL_DS);

// system URLs
define('RL_URL_HOME', getenv('SITE_URL') ?: getenv('APP_URL') ?: 'https://jobs.gmoplus.com/');
define('RL_FILES_URL', RL_URL_HOME . 'files/');
define('RL_LIBS_URL', RL_URL_HOME . 'libs/');
define('RL_PLUGINS_URL', RL_URL_HOME . 'plugins/');

//system admin paths
define('ADMIN', 'admin');
define('ADMIN_DIR', ADMIN . RL_DS);
define('RL_ADMIN', RL_ROOT . ADMIN . RL_DS);
define('RL_ADMIN_CONTROL', RL_ADMIN . 'controllers' . RL_DS);

//memcache server host and port
define('RL_MEMCACHE_HOST', '127.0.0.1');
define('RL_MEMCACHE_PORT', 11211);

//redis server (Coolify Redis)
define('RL_REDIS_USER', '');
define('RL_REDIS_PASS', getenv('REDIS_PASS') ?: '');
define('RL_REDIS_HOST', getenv('REDIS_HOST') ?: 'redis');
define('RL_REDIS_PORT', getenv('REDIS_PORT') ?: 6379);

/* YOU ARE NOT PERMITTED TO MODIFY THE CODE BELOW */
define('RL_SETUP', 'JGxpY2Vuc2VfZG9tYWluID0gImdtb3dpbmpvYnMub25saW5lIjskbGljZW5zZV9udW1iZXIgPSAiRkw2RjY4QkRXWEcwIjs=');
/* END CODE */

/* define system variables end */
