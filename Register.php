<?php
    $con = mysqli_connect("mysql40.000webhost.com", "a4794786_BUNNY", "Bhargavi321", "a4794786_OUFEED");
    
    $Email = $_POST["Email"];
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $RPassword = $_POST["RPassword"];

    $statement = mysqli_prepare($con, "INSERT INTO user (Email, Username, Password, RPassword) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $Email, $Username, $Password, $RPassword);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
