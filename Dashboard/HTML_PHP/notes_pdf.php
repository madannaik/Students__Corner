<?php
include('dashBoard.php');
$semester = $_POST['semester'];
$dept = $_GET['dept'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <title>Notes</title>
    <link rel="stylesheet" href="../CSS/notes_pdf.css">
<!--    <script src="https://kit.fontawesome.com/b5cff000aa.js" crossorigin="anonymous"></script>-->
</head>

<body>
<center><?php  echo $semester;
    echo $dept; ?></center>
<section >
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Module No</th>
                <th>Uploaded by</th>
                <th>Download Link</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td>18CS51</td>
                <td>ATC</td>
                <td>1</td>
                <td>Bill Compound</td>
                <td><a href="view.php" target="_blank" rel="noopener noreferrer">Download</a></td>
            </tr>
            <tr>
                <td>18CS52</td>
                <td>CN</td>
                <td>2</td>
                <td>Angela me</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS53</td>
                <td>ADE</td>
                <td>3</td>
                <td>sundar samneai</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS54</td>
                <td>ADBMS</td>
                <td>1</td>
                <td>Satya nadella</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS51</td>
                <td>ATC</td>
                <td>1</td>
                <td>Bill Compound</td>
                <td><a href="view.php" target="_blank" rel="noopener noreferrer">Download</a></td>
            </tr>
            <tr>
                <td>18CS52</td>
                <td>CN</td>
                <td>2</td>
                <td>Angela me</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS53</td>
                <td>ADE</td>
                <td>3</td>
                <td>sundar samneai</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS54</td>
                <td>ADBMS</td>
                <td>1</td>
                <td>Satya nadella</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS51</td>
                <td>ATC</td>
                <td>1</td>
                <td>Bill Compound</td>
                <td><a href="view.php" target="_blank" rel="noopener noreferrer">Download</a></td>
            </tr>
            <tr>
                <td>18CS52</td>
                <td>CN</td>
                <td>2</td>
                <td>Angela me</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS53</td>
                <td>ADE</td>
                <td>3</td>
                <td>sundar samneai</td>
                <td><a href="http://">Download</a></td>
            </tr>
            <tr>
                <td>18CS54</td>
                <td>ADBMS</td>
                <td>1</td>
                <td>Satya nadella</td>
                <td><a href="http://">Download</a></td>
            </tr>

            </tbody>
        </table>
    </div>
</section>



</body>

</html>


