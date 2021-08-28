<?php

    //Class Database (Koneksi Database)
    class Database{
         
        //Property
        var $host = "localhost";
        var $uname = "root";
        var $pass = "";
        var $db = "db_kampus";
        var $connection;

        //Method Koneksi Kedalam Database
        function Connect(){
            $this->connection=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
            return $this->connection;
        }
    }

?>