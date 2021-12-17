<?php

use Medoo\Medoo;
use App\Utilities\Response;

require realpath('../../../vendor/autoload.php');




$db_config = include realpath('../../../database/config.php');

$database = new Medoo($db_config);

$request_method = $_SERVER['REQUEST_METHOD'];
$request_body = json_decode(file_get_contents('php://input'));

switch ($request_method) {

    case 'GET':
        $province_id = $_GET['province_id'] ?? null;
        $data = $database->select('province', "name", [
            "id" => $province_id
        ]);

        Response::respondAndDie($data, Response::HTTP_OK);

    case 'POST':
        Response::respondAndDie($_POST, Response::HTTP_OK);

    case 'PUT':
        Response::respondAndDie(['PUT Request '], Response::HTTP_OK);

    case 'DELETE':
        Response::respondAndDie(['DELETE Request '], Response::HTTP_OK);

    default:
        Response::respondAndDie(['Invalid Request Method'], Response::HTTP_METHOD_NOT_ALLOWED);

}