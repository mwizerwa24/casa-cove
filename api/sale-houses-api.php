<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT');
    header('Access-Control-Allow-Headers: Content-Type');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "casacove_db";
    
    $conn = new mysqli('localhost', 'root', '', 'casacove_db');
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $sql = "SELECT * FROM houses WHERE section = 'sale'";
      $result = $conn->query($sql);
      $data = array();
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
      }
      echo json_encode($data);
    }
    
    $conn->close();

?>