<?php

namespace App\Database;

use App\Database\Database;

class Crud extends Database
{
    //create
    public function insert($table, $value)
    {
        #code here
        return $this->connection->insert($table, $value);
    }
    //read
    public function select($table, $columns = '*', $where = null)
    {
        #code here

        return $this->connection->select($table, $columns, $where);
    }
    //update 
    public function update($table,$data,$where)
    {
        #code here
        return $this->connection->update($table,$data,$where);
    }
    //delete
    public function delete($table,$where)
    {
        #code here
        return $this->connection->delete($table,$where);
    }
}
