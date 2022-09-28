<?php
    class Connection{
        public function getConnection(){

        //Create Connection
        $koneksi = mysqli_connect("localhost","root","","db_bio");

        // validation failure
        if(!$koneksi){
            echo mysqli_error($koneksi);
        }
        echo 'getConnection berhasil';
        return $koneksi;
        }
    }

?>