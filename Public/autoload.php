<?php 
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'APP'.DS);
define("CORE",APP.'Core'.DS);
define("CONFIG",APP.'Config'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("MODELS",APP.'Models'.DS);
define("VIEWS",APP.'Views'.DS);
define("LIBS",APP.'Libs'.DS);
define("UPLOADS",ROOT_PATH.'Public'.DS.'Uploads'.DS);
define("JS",ROOT_PATH.'Public'.DS.'JS'.DS);

// configuration files 
require_once(CONFIG.'config.php');
require_once(CONFIG.'helpers.php');



// autoload all classes 
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload'); // false




new App();