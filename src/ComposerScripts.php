<?php
namespace  PS;
class ComposerScripts{
    public static function beforeInstall(){
        echo "Composer install is about to start".PHP_EOL;
        
    }
    public static function  afterInstall(){
        echo "Composer install is done".PHP_EOL; 
    }
}