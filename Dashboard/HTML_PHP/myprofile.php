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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="../CSS/myprofile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
    <title>Profile Card</title>
</head>
<body>
    <div class="modal">
        <img src="vdaga.jpg" alt="">
        <div class="close"></div>
    </div>
    
    <div class="my-container">
        <div class="card">
            <div class="header">
                <!-- <div class="hamburger-menu">
                    <div class="center"></div>
                </div> -->
                <a href="../../login&registration/logout.php" class="mail">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <h3 class="name">Vimal Daga</h3>
                    <h3 class="sub-name">4CB18CS051</h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">Dept</h3>
                        <p class="text">Computer Science And Engineering</p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Desig</h3>
                        <p class="text">Head of the Department</p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Email</h3>
                        <p class="text">vimal@lw.com</p>
                    </div>
                    <!-- <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a> -->
                    <!-- </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <a href="#" class="follow">Follow</a>
                        </div>
                        <div class="share-wrap">
                            <a href="#" class="share">Share</a>
                        </div>
                    </div> -->
                </div>

                <div class="right">
                    <div>
                        <h3 class="number">91</h3>
                        <h3 class="number-title">Posts</h3>
                    </div>
                    <!-- <div>
                        <h3 class="number">2.4K</h3>
                        <h3 class="number-title">Following</h3>
                    </div>
                    <div>
                        <h3 class="number">4.7K</h3>
                        <h3 class="number-title">Followers</h3>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>

    <!-- <hr class="line"> -->
    <div class="myposts">
        <center><h1>My Posts</h1></center>
    </div>
<!--this is for Lecture announcement-->
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center ">
                <div class="col-lg-4 col-md-6 mb-4  " >
                    <div class="shadow-sm border-0 rounded" style="width: 600px;background-color: #2f2f30;margin-left: -53px">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40"style="border-radius: 20px;" />
                            </div>

                            <div class="user-content">
                                <h6 class="text-capitalize user-name" style="color: white">Carry Johnshon</h6>
                                <p class=" text-capitalize text-light small " >Computer Science Department</p>
                                <p class=" text-capitalize text-light small blockquote-footer">III Sem A CS</p>
                                <hr style="width: 300px;height:2px;border:none;background-color:white">
                                <p class="text-light mb-0 fs-1 text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                    quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!--    this section is for Student posted articles-->
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center " style="">

                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;background-color:#2f2f30;margin-bottom: 50px;margin-left: -53px">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40" style="border-radius: 20px;margin-right: 10px"/>
                            </div>
                            <div class="user-content">
                                <h6 class="text-capitalize text-light user-name">Carry Johnshon</h6>
                                <p class=" text-capitalize text-light small blockquote-footer">Electronics and communication department</p>
                                <hr style="width: 300px;height:2px;border:none;background-color:white">
                                <div style>
                                    <img src="https://d33wubrfki0l68.cloudfront.net/2475489eaf20163ec0f54ddc1d92aa8d4c87c96b/e7c81/images/docs/components-of-kubernetes.svg" width="500px">
                                </div>
                                <p class="small text-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                    quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                    quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>