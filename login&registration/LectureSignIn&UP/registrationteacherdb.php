<?php
//    session_start();
//    $conn = mysqli_connect('localhost', 'raj', 'test1234');
//    mysqli_select_db($conn, 'studentscorner');
////    $conn_error = mysqli_connect_error();
////    echo $conn_error;
    define('DB_SERVER','localhost');
    define('DB_USERNAME','raj');
    define('DB_PASSWORD','test1234');
    define('DB_NAME','studentscorner');

    //connecting to db
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //checking connection
    if($conn == false){
        dir('ERROR: Cannot connect');
    }
    echo "jai mahalasa!";
?>