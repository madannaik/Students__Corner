<?php
//    starting the session
    session_start();

//    making connection to database
    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

//    using email to retrive the particular data
    $email = $_SESSION['email'];

//    using label to check if its a student or teacher
    $label = $_SESSION['label'];

//    the data will be retrived from the database depending on label
    if($label == 'teacher'){

//        if the email is not set it will redirect to login teacher page
        if(!isset($_SESSION['email'])){
            header('location: ../login&registration/LectureSignIn&UP/loginteacher.php');
        }

//        making the qurey
        $s = "SELECT * FROM teacher where email = '$email'";

//        sending query to database and retriving the data and saving it in result variable
        $result = mysqli_query($conn, $s);

//        storing it in the form of array
        $teacher_info = mysqli_fetch_assoc($result);

//        free the memory after use and close connection
        mysqli_free_result($result);
        mysqli_close($conn);

//        printing just to check if its working
        print_r($teacher_info);
        echo $label;

    }else{
        if(!isset($_SESSION['email'])){
            header('location: ../login&registration/LectureSignIn&UP/loginstudent.php');
        }

        $s = "SELECT * FROM student where email = '$email'";
        $result = mysqli_query($conn, $s);
        $student_info = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);

        print_r($student_info);
        echo $label;

    }
?>