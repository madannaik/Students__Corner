<?php
//    starting the session
    session_start();

//    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

//    accessing the variables from the registerstudent.php form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $usn = $_POST['usn'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_POST['profile_picture'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $sections = $_POST['section'];

//    num is just a reference number
    $num = 0;

//    checking if there already someone exists with same usn
    $count = "SELECT * from student WHERE usn = '$usn'";

    $result = mysqli_query($conn, $count);

//    if count is 1 that means someone already exists, hence they will be redirected back to registration page
    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location: registrationstudent.php');
    }else{
//        if no one exists with the same teacher_id their info will be registered and they will be redirected to dashboard
        $reg = "INSERT INTO student(usn, first_name, last_name, department,semester,sections, gender, email, password, profile_picture) values ('$usn','$first_name','$last_name','$department','$semester','$sections','$gender','$email','$password','$profile_picture')";
        mysqli_query($conn, $reg);

//        sending the email as a session variable so that we can access all of their info in dashboard
        $_SESSION['email'] = $email;
        $label = 'student';
        $_SESSION['label'] = $label;
        header('location: ../../Dashboard/HTML_PHP/announcement.php');

    }

?>