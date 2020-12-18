<?php

    //    starting the session
    session_start();

    //    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

    //    using email to retrive the particular data
    $email = $_SESSION['email'];

    //        making the qurey
    $s = "SELECT * FROM student where email = '$email'";

    //        sending query to database and retriving the data and saving it in result variable
    $result = mysqli_query($conn, $s);

    //        storing it in the form of array
    $student_info = mysqli_fetch_assoc($result);

    $project_title = $_POST['project_title'];
    $project_body = $_POST['project_body'];
    $project_link = $_POST['project_link'];
    $project_image =$_POST['project_image'];
    $usn = $student_info['usn'];
//    echo $usn;

//    echo $body;
//    echo $title;
//    echo $link;
//    echo $image;

    $post = "INSERT INTO projects(project_head,  project_body, project_link, usn, project_image) values('$project_title','$project_body','$project_link','$usn','$project_image') ";
    mysqli_query($conn, $post);

    header('location: project.php');
?>