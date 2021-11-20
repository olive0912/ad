<?php 
    $con = mysqli_connect("localhost", "olive0912", "uc0522300671!", "olive0912");
    //정승환 닷홈 sql 접속
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];
    $userAge = $_POST["userAge"];
    $userHak = $_POST["userHak"];
    $userMajor = $_POST["userMajor"];

    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssiis", $userID, $userPassword, $userName, $userAge, $userHak, $userMajor);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);



?>