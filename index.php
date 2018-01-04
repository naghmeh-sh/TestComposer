<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require "vendor/autoload.php";

function  my_autoloader($class){
    include "src/$class.php";
}

spl_autoload_register('my_autoloader');

$app = new \Slim\App;
$container = $app->getContainer();

$container['loger']= function ($c){
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("/var/logs/lms2/app.log");
    $logger->popHandler($file_handler);
    return $logger;
};

print_r(h("Sasi joon") );
echo "\n";
$string ='PadMe';
echo \StringUtils\Strings::leftPad($string, 10,'.').PHP_EOL;
echo "\n";
echo \StringUtils\Strings::rightPad($string, 10,'.').PHP_EOL;
echo "\n";