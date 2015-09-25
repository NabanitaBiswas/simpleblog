<?php  //configuration variable

$config['db_host'] = '127.0.0.1';
$config['db_user'] = 'nabanitacste';
$config['db_pass'] = '';
$config['db_name'] = 'blog';


foreach ($config as $k => $v){ 		//config key as value.
	define(strtoupper($k),$v);			//define aa constant.
}

?>