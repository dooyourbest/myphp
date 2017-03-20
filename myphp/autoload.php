<?php

/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2017/3/19
 * Time: 21:49
 */
define('CORE',__DIR__.'/core/');
define('APP',__DIR__.'/');
$load_array=[
    'route'=>CORE.'Route',
    'app'=>APP.'App',
];
class autoload{
    public static function register($load_array){
        dump($load_array);
        spl_autoload_register(function($load_array)use($load_array){
            foreach($load_array as $key=>$value){
                include $value.'.php';
            }
        });
    }

}

echo(autoload::register($load_array));