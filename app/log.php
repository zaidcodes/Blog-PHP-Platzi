<?php

namespace app;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log{
    private static $_logger;

    private static function getLogger(){
        if(!self::$_logger){
            self::$_logger = new Logger('App Log');
        }
        return self::$_logger;
    }

    public static function logError($error){
        self::getLogger()->pushHandler(new StreamHandler('../logs/appError.log', Logger::ERROR));
        self::getLogger()->addError($error);
    }
    public static function logInfo($info){
        self::getLogger()->pushHandler(new StreamHandler('../logs/appInfo.log', Logger::INFO));
        self::getLogger()->addInfo($info);
    }
    public static function logWarning($info){
        self::getLogger()->pushHandler(new StreamHandler('../logs/appWarning.log', Logger::WARNING));
        self::getLogger()->addInfo($info);
    }
}