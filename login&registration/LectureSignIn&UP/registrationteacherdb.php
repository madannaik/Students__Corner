<?php
//    starting the session
    session_start();

//    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

//    accessing the variables from the registerteacher.php form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $teacher_id = $_POST['teacher_id'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $profile_picture = $_POST['profile_picture'];

//    num is just a reference number
    $num = 0;

//    checking if there already someone exists with same teacher_id
    $count = "SELECT * from teacher WHERE teacher_id = '$teacher_id'";

    $result = mysqli_query($conn, $count);

//    if count is 1 that means someone already exists, hence they will be redirected back to registration page
    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location: registrationteacher.php');
    }else{
//        if no one exists with the same teacher_id their info will be registered and they will be redirected to dashboard
        $reg = "INSERT INTO teacher(teacher_id, first_name, last_name, department, gender, designation, email, passwd, profile_picture) values ('$teacher_id','$first_name','$last_name','$department','$gender','$designation','$email','$password','$profile_picture')";
        mysqli_query($conn, $reg);

//        sending the email as a session variable so that we can access all of their info in dashboard
        $_SESSION['email'] = $email;
        $label = 'teacher';
        $_SESSION['label'] = $label;
        header('location: ../../Dashboard/HTML_PHP/announcement.php');

    }

?>

