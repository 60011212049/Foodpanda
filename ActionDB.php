<?php

class ConnectDB {
    public function connect() {
        $dbhost="localhost";
        $dbuser="root";
        $dbpassword="";
        $db="db_panda";
        $conn=new mysqli($dbhost, $dbuser, $dbpassword, $db) or
            die("Connect failed %s\n". $conn->erro);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }
    
    
   
    
}
 ?>