<?php
    
    function OpenConn() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "applications";

        $conn = new mysqli($servername, $username, $password, $databasename) or die("Connection failed!!!" . $conn -> error);

        return $conn;
}

    function CloseConn($conn){
        $conn -> close();
    }
?>
