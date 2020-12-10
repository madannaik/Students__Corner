<?php
//    starting the session
    session_start();

//    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

//    accessing the variables from the loginteacher.php form
    $email = $_POST['email'];
    $pass = $_POST['password'];

//    creating query
    $s = "SELECT * from student WHERE email = '$email' && password= '$pass'";

//    getting data from databse
    $result = mysqli_query($conn, $s);

//    checking the number of rows, if its 1 that means the data entered by user is correct
    $num = mysqli_num_rows($result);

//    if entered data is correct log them in
    if($num == 1){
        $_SESSION['email'] = $email;
        $_SESSION['label'] = 'student';
        header('location: ../../Dashboard/HTML_PHP/announcement.php');
    }else{
//        if not then redirect them back to loginteacher.php page
        header('location: loginstudent.php');
    }
?>