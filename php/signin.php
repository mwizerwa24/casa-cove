<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT');
    header('Access-Control-Allow-Headers: Content-Type');
    $request = json_decode(file_get_contents('php://input'));
    $conn = mysqli_connect("localhost", "root", "", "casacove_db");
    if ($request != NULL) {
        $username = $request->username;
        $passkey = $request->passkey;

        $query = "SELECT * FROM users WHERE Username = '$username' AND Passkey = '$passkey'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo json_encode([
                "status" => "success",
                "message" => "Login Successful",
                "user" => mysqli_fetch_assoc($result),
            ]);
        }
        else{
            echo"Unknown User";
        }
    }
?>