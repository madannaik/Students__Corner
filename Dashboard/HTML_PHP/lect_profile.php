<?php
    include('dashBoard.php');

    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

    $s = 'SELECT * FROM teacher ORDER BY teacher_id';

    $result = mysqli_query($conn, $s);

//    fetching all and storing it in array form
    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
     mysqli_close($conn);

    print_r($teachers);


?>

<!DOCTYPE html>
<html>

<head>
    <style>
        h1 , h2{
            text-align: center;
        }
    </style>
</head>

<body>
    
    <h1>Lect Profilee</h1>
    <div class="row">



    </div>


</body>

</html>

<!-- TODO: teacherid, firstname, lastname, department, grnder, qualification, email -->
