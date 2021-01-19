<?php 
// echo "hello";
    //    starting the session
    session_start();

    //    making connection to database
        $conn = mysqli_connect('localhost', 'raj', 'test1234');
        mysqli_select_db($conn, 'studentscorner');
        $dataBase = new PDO("mysql:host=localhost;dbname=studentscorner","raj","test1234");


    //    using email to retrive the particular data
        $email = $_SESSION['email'];

    //        making the qurey
        $s = "SELECT * FROM teacher where email = '$email'";

    //        sending query to database and retriving the data and saving it in result variable
        $result = mysqli_query($conn, $s);

    //        storing it in the form of array
        $teacher_info = mysqli_fetch_assoc($result);
//        $time = $date = date('Y-m-d H:i:s');
        $semester = $_POST['semester'];
        $department = $_POST['department'];
        $subject_name = $_POST['subject_name'];
        $subject_code = $_POST['subject_code'];
        $module_name = $_POST['Module_name'];
        $module_number = $_POST['module_number'];
        $pdf_name = $_FILES['pdf']['name'];
        $pdf_data = file_get_contents($_FILES['pdf']['tmp_name']);
        $teacher_id = $teacher_info['teacher_id'];

        $stmt = $dataBase->prepare("insert into pdf values(?,?,'',?,?,?,?,?,?)");
        $stmt->bindParam(1,$teacher_id);
        $stmt->bindParam(2,$pdf_name);

        $stmt->bindParam(3,$module_number);
        $stmt->bindParam(4,$module_name);
        $stmt->bindParam(5,$subject_code);
        $stmt->bindParam(6,$pdf_data);
        $stmt->bindParam(7,$department);
        $stmt->bindParam(8,$semester);
        $stmt->execute();

        header('location: notes.php');

//        $pdf_insert = "INSERT INTO pdf(teacher_id, pdf_name,module_number,subject_name,subject_code, branch, semester) values ('$teacher_id','$pdf_name','$module_number','$subject_name','$subject_code','$department','$semester')";
////        $result = mysqli_query($conn, $pdf_insert);
//        $up = "UPDATE pdf SET pdf_data='$pdf_data' WHERE id=16";
//        $result = mysqli_query($conn,$up);
//        echo $result;
//        echo $pdf_name;
//        echo $semester;
//        echo "\n";
//        echo $department;
//        echo "\n";
//        echo $subject_code;
//        echo "\n";
//        echo $subject_name;
//        echo "\n";
//        echo $module_name;
//        echo "\n";
//        echo $module_number;
//        print_r($teacher_info);
?>