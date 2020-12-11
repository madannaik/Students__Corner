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
<html lang="en">

<head>
    <!--    <style>-->
    <!--        h1 {-->
    <!--            text-align: center;-->
    <!--        }-->
    <!--    </style>-->
    <link rel="stylesheet" href="../CSS/lect_profile.css">
</head>

<body>

<div class="total-flip-card">
    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Ricky Park</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>

                <li>M.Tech</li>
                <li>Ph.d</li>
            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>Rock</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://www.worldphoto.org/sites/default/files/default-media/Piercy.jpg" alt="user" />
        <h3>Keyl Jenner</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT69GaLd44QOaNN6t-uDtkv2oX0Ht_3fYKq1w&usqp=CAU" alt="user" />
        <h3>Vimal daga</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://i.ytimg.com/vi/hFal3EflrvU/maxresdefault.jpg" alt="user" />
        <h3>Hithesh Choudhary</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>CarryMinati</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>Dynamo</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>Kaneki</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>Ireku Sensei</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
    <div class="card-container">
        <img class="round" src="https://images.iphonephotographyschool.com/24755/portrait-photography.jpg" alt="user" />
        <h3>Tsunade</h3>
        <p>Computer Science Department</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
        </div>
        <div class="skills">
            <h6>Qualification</h6>
            <ul>
                <li>B.E in Computer Science</li>
                <li>M.Tech </li>

            </ul>
        </div>
    </div>
</div>


</body>

</html>


