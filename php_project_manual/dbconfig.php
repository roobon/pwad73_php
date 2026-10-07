<?php
    // Connection with mySQL

    $conn = new mysqli("localhost", "root", "", "php_project_manual_db");

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
     } 
   
?>