<?php 
$mysqli = false;
    function connectDB() {
        global $mysqli;
        // на хостинге прописываются свои данные
        $mysqli = new mysqli("localhost", "root", "", "mynewsiteBase");
        $mysqli->query("SET NAMES 'utf-8'");
    }
    
    function closeDB () {
        global $mysqli;
        $mysqli->close ();
    }