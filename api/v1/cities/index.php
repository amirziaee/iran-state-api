<?php

use App\Services\CityService;
use App\Utilities\Response;

require realpath('../../../vendor/autoload.php');

$city_service = new CityService();






$request_method = $_SERVER['REQUEST_METHOD'];
$request_body = json_decode(file_get_contents('php://input'), true);

switch ($request_method) {

    case 'GET':

        $province_id = $_GET['province_id'] ?? null;
        // validate data
        $request =  [
            'province_id' => $province_id
        ];
        $response = $city_service->getCities($request);

        Response::respondAndDie($response, Response::HTTP_OK);

    case 'POST':
        // validate data
        $response = $city_service->createCity($request_body);
        Response::respondAndDie($_POST, Response::HTTP_CREATED);

    case 'PUT':
        [$city_id,$name] = [$request_body['city_id'],$request_body['name']];
        $response = $city_service->changeCityName($name,$city_id);
        Response::respondAndDie($response , Response::HTTP_OK);

    case 'DELETE':
       
        $response = $city_service->deleteCity($request_body['city_id']);
       
        Response::respondAndDie($response , Response::HTTP_OK);

    default:
        Response::respondAndDie(['Invalid Request Method'], Response::HTTP_METHOD_NOT_ALLOWED);
}
