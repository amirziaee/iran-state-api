<?php

namespace App\Services;

use App\Database\Crud;

class CityService{

    private $database;

    public function __construct()
    {
        $this->database = new Crud();
    }

    public function getCities(array $data)
    {
        
        $result = $this->database->select('city','name', $data['province_id']);
        return $result;
        
    }

    public function createCity(array $data)
    {
        
        $result = $this->database->insert('city',$data);
        return $result;
        
    }

    public function changeCityName(string $name, int $id)
    {

        $result = $this->database->update('city',['name' => $name],['id'=> $id]);
        return $result;
        
    }

    public function deleteCity(int $id)
    {

        $result = $this->database->delete('city',['id'=> $id]);
        return $result;
        
    }



}