<?php

namespace App\Services;

use App\Database\Crud;

class CityService{

    

    public function getCities(array $data)
    {
        $database = new Crud();
        $result = $database->select('city','name', $data['province_id']);
        return $result;
        
    }

    public function createCity(array $data)
    {
        $database = new Crud();
        $result = $database->insert('city',$data);
        return $result;
        
    }
}