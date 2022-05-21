<?php

namespace ;

class classdb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructor

    public function _construct(
        $dbname = "Newdb",
        $tablename ="productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""

    )
    
    { $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //connection creation
    $this->con = mysqli_connect($servername,$username,$password);

     //check connection
     if(!$this->con) { die("connection failed: ".mysqli_connect_error());
    }
    //sql query that creates database
   $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

   //execute the database query

   if(mysqli_query($this->con, $sql)){
    $this->con = mysqli_connect($servername,$username,$password,$dbname); 
//create table

$sql= "CREATE TABLE IF NOT EXISTS $tablename(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR (25) NOT NULL,
product_price FLOAT (10),
product_description VARCHAR(50),
product_image VARCHAR(100) 
   )";
   if (mysqli_query($this->con, $sql)

   }

    }

}
