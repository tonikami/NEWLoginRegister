<?php
    $con = mysqli_connect("harisss3hari.000webhostapp.com", "id1781011_hariss3hari", "abcd1234", "id1781011_studentmentor");
    
    $EMAIL_ID = $_POST"EMAIL_ID"];
    $PASSWORD = $_POST["PASSWORD"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE EMAIL_ID = ? AND PASSWORD = ?");
    mysqli_stmt_bind_param($statement, "ss", $EMAIL_ID, $PASSWORD);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $USER_NAME, $USER_ID, $PHONE_NUMBER, $EMAIL_ID, $PASSWORD);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["PHONE_NUMBER"] = $PHONE_NUMBER;
        $response["USER_ID"] = $USER_ID;
        $response["USER_NAME"] = $USER_NAME;
        $response["EMAIL_ID"] = $EMAIL_ID;
        $response["PASSWORD"] = $PASSWORD;
    }
    
    echo json_encode($response);
?>
