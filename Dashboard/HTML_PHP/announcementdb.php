<?php
//    starting the session
    session_start();

//    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

//    using email to retrive the particular data
    $email = $_SESSION['email'];

//        making the qurey
    $s = "SELECT * FROM teacher where email = '$email'";

//        sending query to database and retriving the data and saving it in result variable
    $result = mysqli_query($conn, $s);

//        storing it in the form of array
    $teacher_info = mysqli_fetch_assoc($result);

//        free the memory after use and close connection
    mysqli_free_result($result);
    mysqli_close($conn);

//    getting all the values from announcement pages form(popup)
    $body = $_POST['body'];
    $department = $_POST['department'];
    $sections = $_POST['sections'];
    $semester = $_POST['semester'];
    $title = $_POST['title'];

//    checking the department and assigning the short variable to save it in database
    if($department == 'Computer Science Engineering'){
        $department_final = 'cse';
    }elseif ($department == 'Electronic and Communication Engineering'){
        $department_final = 'ec';
    }elseif ($department == 'Electronics and Electrical Engineering'){
        $department_final = 'eee';
    }elseif ($department == 'Mechanical Engineering'){
        $department_final = 'me';
    }elseif($department == 'Information and Science Engineering'){
        $department_final = 'ise';
    }else{
        $department_final = 'all';
    }

    echo $body;
    echo $department;
    echo $sections;
    echo $semester;
    echo $title;
    echo $department_final;
    echo $teacher_info['email'];



?>

<h1>wowowo</h1>