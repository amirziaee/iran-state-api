<?php

use App\Utilities\Response;
use \App\Services\CityService;



include_once "../../../loader.php";



$test = new CityService();

$res = $test->getCities((object)[1,2,3,4]);
echo Response::respondAndDie($res);