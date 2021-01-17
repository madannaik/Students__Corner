<?php 
// echo "hello";
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

        $semester = $_POST['semester'];
        $department = $_POST['department'];
        $subject_name = $_POST['subject_name'];
        $subject_code = $_POST['subject_code'];
        $module_name = $_POST['Module_name'];
        $module_number = $_POST['module_number'];
        

        echo $semester;
        echo "\n";
        echo $department;
        echo "\n";
        echo $subject_code;
        echo "\n";
        echo $subject_name;
        echo "\n";
        echo $module_name;
        echo "\n";
        echo $module_number;
        print_r($teacher_info);
?>