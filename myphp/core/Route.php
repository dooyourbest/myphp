<?php
//解析路由类
namespace core;
 class Route {
    //分析请求
    public static function parse_request(){
        return substr($_SERVER['PATH_INFO'],1);
    }
     function restful_config(){
         return array(
             'index'=>'Index'
         );
     }
     function route(){
         $url=self::parse_request();
         $config=$this->restful_config();
         if(isset($config[$url])){
             return explode('/',$config[$url]);
         }else{
             return explode('/',$url);
         }
     }
     function dispatch(){
         
     }
 }