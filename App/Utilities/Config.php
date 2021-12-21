<?php

namespace App\Utilities;

class Config {

    const CONFIG_PATH = '../../../config/';


    public static function load ($configFile)
    {   
        $config = include realpath(self::CONFIG_PATH.$configFile.'.php');
        return $config;
    }
}