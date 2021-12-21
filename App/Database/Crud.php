<?php

namespace App\Database;
use App\Database\Database;

class Crud extends Database
{
    //create
    public function insert()
    {
        #code here
        //return $this->connection->insert();
    }
    //read
    public function select($table, $columns = '*' , $where = null)
    {
        #code here
        return $this->connection->select($table ,$columns,$where);
    }
    //update 
    public function update()
    {
        #code here
    }
    //delete
    public function delete()
    {
        #code here
    }
}