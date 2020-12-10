<?php
    include('dashBoard.php');
    include('config.php');

    $label = $_SESSION['label'];
    echo $label;


    if(!isset($_SESSION['email'])) {
        header('location: ../../index.html');
    }
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        h1 {
            text-align: center;
        }

    </style>
</head>

<body>

<h1>My Profile</h1>

<center>
    <form action="../../login&registration/logout.php">
        <button type="submit">logout</button>
    </form>
</center>


</body>

</html>