<?php
require_once '../init.php';
class UserData implements UserInterface{
    $conn = new Connection();
    $conn->getConnection();

    public function getData(){
        $result = query("SELECT * FROM tbl_mywork");
        return $result;
    }
    function query($querys){
        global $conn;
        $result = mysqli_query($conn, $querys);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
}