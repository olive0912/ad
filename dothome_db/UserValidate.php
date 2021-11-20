<?php 
    $con = mysqli_connect("localhost", "olive0912", "uc0522300671!", "olive0912");

    $userID = $_POST["userID"];
   
    $statement = mysqli_prepare($con, "SELECT userID FROM USER WHERE userID = ?");
    //아이디중복체크
    mysqli_stmt_bind_param($statement, "s", $userID);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID);


    $response = array();
    $response["success"] = true;
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"]=false;
        $response["userID"]=$userID;
    }
   
    echo json_encode($response);



?>