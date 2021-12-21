<?php

namespace App\Database;

use App\Utilities\Config;
use Medoo\Medoo;

class Database 
{   
    private $configeFileName = 'database';
    protected static $config;
  
    protected $connection;
    public function __construct()
    {
         self::$config = Config::load($this->configeFileName);
         $this->connection = new Medoo(self::$config);
    }


}
