<?php 


require_once ('DB/MysqliDb.php');

class DB 
{
    protected $db;

    public function connect()
    {
        $this->db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABSE_NAME);
        if(!$this->db)
            die("Connection Error : ");
        return $this->db;
    }


}