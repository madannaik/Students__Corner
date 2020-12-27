<?php
    include('dashBoard.php');

    $conn = mysqli_connect('localhost', 'raj', 'test1234');
    mysqli_select_db($conn, 'studentscorner');

    $s = 'SELECT * FROM teacher ORDER BY teacher_id';
//    $s = 'SELECT * FROM teacher WHERE department = "cse"  ORDER BY teacher_id';

    $result = mysqli_query($conn, $s);

//    fetching all and storing it in array form
    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
//     mysqli_close($conn);

     $cses = 'SELECT * FROM teacher WHERE department = "Computer Science" ORDER BY teacher_id';
     $result = mysqli_query($conn, $cses);
     $cses = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_free_result($result);

    $ises = 'SELECT * FROM teacher WHERE department = "Information Science" ORDER BY teacher_id';
    $result = mysqli_query($conn, $ises);
    $ises = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);


    $ecs = 'SELECT * FROM teacher WHERE department = "Electronics and Communication" ORDER BY teacher_id';
    $result = mysqli_query($conn, $ecs);
    $ecs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);


    $eees = 'SELECT * FROM teacher WHERE department = "Electronics and Electrical" ORDER BY teacher_id';
    $result = mysqli_query($conn, $eees);
    $eees = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);


    $mes = 'SELECT * FROM teacher WHERE department = "Mechanical Engineering" ORDER BY teacher_id';
    $result = mysqli_query($conn, $mes);
    $mes = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../CSS/lect_profile.css">
</head>

<body>

<!--TODO: change the color of the card to whichever you like-->

    <!-- <hr class="line"> -->
    <div class="myposts">
        <center><h1>CSE</h1></center>
        <div class="total-flip-card">
            <?php foreach ($cses as $cse){ ?>
                <div class="card-container">
                    <img class="round" src="<?php echo $cse['profile_picture'];?>" alt="user" />
                    <h4><?php echo $cse['first_name'];echo " ";echo $cse['last_name'];?></h4>
                    <p><?php echo $cse['designation'];?></p>
                    <div class="buttons">
                        <button class="primary">
                            <a href="mailto: <?php echo $cse['email'];?> ">Contact</a>
                        </button>
                    </div>
                    <div class="skills">
                        <h6> Qualification </h6>
                        <ul>
                            <li>M.Tech</li>
                            <li>Ph.d</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="myposts">
        <center><h1>ISE</h1></center>
        <div class="total-flip-card">
            <?php foreach ($ises as $ise){ ?>
                <div class="card-container">
                    <img class="round" src="<?php echo $ise['profile_picture'];?>" alt="user" />
                    <h4><?php echo $ise['first_name'];echo " ";echo $ise['last_name'];?></h4>
                    <p><?php echo $ise['designation'];?></p>
                    <div class="buttons">
                        <button class="primary">
                            <a href="mailto: <?php echo $ise['email'];?> ">Contact</a>
                        </button>
                    </div>
                    <div class="skills">
                        <h6> Qualification </h6>
                        <ul>
                            <li>M.Tech</li>
                            <li>Ph.d</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="myposts">
        <center><h1>EC</h1></center>
        <div class="total-flip-card">
            <?php foreach ($ecs as $ec){ ?>
                <div class="card-container">
                    <img class="round" src="<?php echo $ec['profile_picture'];?>" alt="user" />
                    <h4><?php echo $ec['first_name'];echo " ";echo $ec['last_name'];?></h4>
                    <p><?php echo $ec['designation'];?></p>
                    <div class="buttons">
                        <button class="primary">
                            <a href="mailto: <?php echo $ec['email'];?> ">Contact</a>
                        </button>
                    </div>
                    <div class="skills">
                        <h6> Qualification </h6>
                        <ul>
                            <li>M.Tech</li>
                            <li>Ph.d</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="myposts">
        <center><h1>EEE</h1></center>
        <div class="total-flip-card">
            <?php foreach ($eees as $eee){ ?>
                <div class="card-container">
                    <img class="round" src="<?php echo $eee['profile_picture'];?>" alt="user" />
                    <h4><?php echo $eee['first_name'];echo " ";echo $eee['last_name'];?></h4>
                    <p><?php echo $eee['designation'];?></p>
                    <div class="buttons">
                        <button class="primary">
                            <a href="mailto: <?php echo $eee['email'];?> ">Contact</a>
                        </button>
                    </div>
                    <div class="skills">
                        <h6> Qualification </h6>
                        <ul>
                            <li>M.Tech</li>
                            <li>Ph.d</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="myposts">
        <center><h1>ME</h1></center>
        <div class="total-flip-card">
            <?php foreach ($mes as $me){ ?>
                <div class="card-container">
                    <img class="round" src="<?php echo $me['profile_picture'];?>" alt="user" />
                    <h4><?php echo $me['first_name'];echo " ";echo $me['last_name'];?></h4>
                    <p><?php echo $me['designation'];?></p>
                    <div class="buttons">
                        <button class="primary">
                            <a href="mailto: <?php echo $me['email'];?> ">Contact</a>
                        </button>
                    </div>
                    <div class="skills">
                        <h6>Qualification  </h6>
                        <ul>
                            <li>M.Tech</li>
                            <li>Ph.d</li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<!--<div class="total-flip-card">-->
<!--    <h2>Computer Science Department</h2>-->
<!--    --><?php //foreach ($teachers as $teacher){ ?>
<!--    <div class="card-container">-->
<!--        <img class="round" src="--><?php //echo $teacher['profile_picture'];?><!--" alt="user" />-->
<!--        <h3>--><?php //echo $teacher['first_name'];echo " ";echo $teacher['last_name'];?><!--</h3>-->
<!--        <p>--><?php //echo $teacher['designation'];?><!--</p>-->
<!--        <div class="buttons">-->
<!--            <button class="primary">-->
<!--                <a href="mailto: --><?php //echo $teacher['email'];?><!-- ">Contact</a>-->
<!--            </button>-->
<!--        </div>-->
<!--        <div class="skills">-->
<!--            <h6> Qualification </h6>-->
<!--            <ul>-->
<!---->
<!--                <li>M.Tech</li>-->
<!--                <li>Ph.d</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?php //} ?>
<!---->
<!--</div>-->


</body>

</html>


