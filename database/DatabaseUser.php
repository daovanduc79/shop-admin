<?php


class DatabaseUser
{
    protected $servername;
    protected $name;
    protected $password;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->name = 'root';
        $this->password = '123456@Abc';
    }

    public function connect() {
        try {
            new PDO("mysql:host=$this->servername;dbname=admin",$this->name,$this->password);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return new PDO("mysql:host=$this->servername;dbname=admin",$this->name,$this->password);
    }


}