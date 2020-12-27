<?php
   include('dashBoard.php');
//   include('config.php');

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
        global $teacher_info;
        $teacher_info = mysqli_fetch_assoc($result);

    //        free the memory after use and close connection
        mysqli_free_result($result);
    //        mysqli_close($conn);

    }else{
        if(!isset($_SESSION['email'])){
            header('location: ../login&registration/LectureSignIn&UP/loginstudent.php');
        }

        $s = "SELECT * FROM student where email = '$email'";
        $result = mysqli_query($conn, $s);
        $student_info = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

    }

    if($label == 'teacher') {
        $my_announcements = "SELECT announcement.department_announcement,announcement.semester,announcement.sections,announcement.body,announcement.uploaded_time,announcement.announcement_link, announcement.teacher_id,teacher.first_name,teacher.last_name,teacher.department, teacher.profile_picture FROM announcement JOIN teacher ON announcement.teacher_id = teacher.teacher_id WHERE email = '$email' ORDER BY uploaded_time DESC";
        //    $my_announcement_count = count($my_announcements);
        $result = mysqli_query($conn, $my_announcements);

        //    get all announcement from db and store it as an array
        $my_announcements = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //    print_r($my_announcements);
    }else{

        $s = "SELECT projects.uploded_time, projects.project_head, projects.project_body, projects.project_link,projects.project_image,projects.usn, student.first_name, student.last_name, student.department, student.semester, student.sections, student.profile_picture FROM projects JOIN student on projects.usn = student.usn ORDER BY uploded_time DESC ";
        $result = mysqli_query($conn,$s);
        $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
//        print_r($projects);
    }

   if(!isset($_SESSION['email'])) {
       header('location: ../../index.html');
   }

    if(isset($_POST['delete'])){
       if($label == 'teacher'){
           $t_id = $_POST['teacher_id'];
               $u_time = $_POST['time'];

               $delete = "DELETE FROM announcement WHERE teacher_id = '$t_id' && uploaded_time = '$u_time'";

               if(mysqli_query($conn, $delete)){
                   //success
                   header('location: myprofile.php');
               }else{
                   echo 'query error: ';
               }

       }else{
           //delete_project

               $s_usn = $_POST['usn'];
               $u_time = $_POST['time'];

               $delete = "DELETE FROM projects WHERE usn = '$s_usn' && uploded_time = '$u_time'";

               if(mysqli_query($conn, $delete)){
                   //success
                   header('location: myprofile.php');
               }else{
                   echo 'query error: ';
               }

       }

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

<!--TODO: alignment of profile card, the "my posts" heading and cards below is messed up, bring all of them in center-->

    <div class="modal">
        <img src="" alt="">
        <div class="close"></div>
    </div>

<!--    TODO: remove the hover effect its fucking irritating-->
<!--    TODO: profile picture barta illa, for now yavdadru sample url inda display ago thara haku aamel allige naan original url fetch maadi hakte-->
    <?php if($label == 'teacher') { ?>
        <div class="my-container">
            <div class="card">
                <div class="header">
                    <a href="../../login&registration/logout.php" class="mail">
                        <i class="fas fa-sign-out-alt"> </i>
                    </a>
                    <div class="main">
    <!--                    code which was here before-->
                        <div class="image">
                            <div class="hover">
                                <i class="fas fa-camera fa-2x"></i>
                            </div>
                        </div>
    <!--                    code which i inserted-->
    <!--                    <div>-->
    <!--                        <img class="round" src="--><?php //echo $teacher_info['profile_picture'];?><!--" alt="user" />-->
    <!--                    </div>-->
                        <h3 class="name"><?php echo $teacher_info['first_name'];echo " "; echo $teacher_info['last_name'];?></h3>
                        <h3 class="sub-name"><?php echo $teacher_info['teacher_id']; ?></h3>
                    </div>
                </div>

                <div class="content">
                    <div class="left">
                        <div class="about-container">
                            <h3 class="title">Department</h3>
                            <p class="text"><?php echo $teacher_info['department']; ?></p>
                        </div>
                        <div class="about-container">
                            <h3 class="title">Designation</h3>
                            <p class="text"><?php echo $teacher_info['designation']; ?></p>
                        </div>
                        <div class="about-container">
                            <h3 class="title">Email</h3>
                            <p class="text"><?php echo $teacher_info['email']; ?></p>
                        </div>
                    </div>
                        <div class="right">

                        <div>
                            <h3>10</h3>
                            <h3 class="number-title">Announcements</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <?php } else { ?>

    <div class="my-container">
        <div class="card">
            <div class="header">
                <a href="../../login&registration/logout.php" class="mail">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <div class="main">
                    <!--                    code which was here before-->
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <!--                    code which i inserted-->
                    <!--                    <div>-->
                    <!--                        <img class="round" src="--><?php //echo $teacher_info['profile_picture'];?><!--" alt="user" />-->
                    <!--                    </div>-->
                    <h3 class="name"><?php echo $student_info['first_name'];echo " "; echo $student_info['last_name'];?></h3>
                    <h3 class="sub-name"><?php echo $student_info['usn']; ?></h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">Department</h3>
                        <p class="text"><?php echo $student_info['department']; ?></p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Semester</h3>
                        <p class="text"><?php echo $student_info['semester']; ?></p>
                    </div>
                    <div class="about-container">
                        <h3 class="title">Email</h3>
                        <p class="text"><?php echo $student_info['email']; ?></p>
                    </div>
                </div>
                <div class="right">
                        <div>
                            <h3 class="number">91</h3>
                            <h3 class="number-title">Posts</h3>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>



    <?php if($label == 'teacher') { ?>
        <div class="myposts">
            <center><h1>Announcements</h1></center>
        </div>
        <?php if(count($my_announcements) == 0){ ?>
            <center><h1>No announcements yet!!</h1></center>
        <?php }else{  ?>
<!--this is for Lecture announcement-->
<!-- TODO: put a button to the link -->
<!-- TODO: coustamise delete button -->
        <section id="cards">
            <div class="container py-2">
                <div class="d-flex flex-column flex-wrap align-items-center ">
                    <?php foreach ($my_announcements as $my_announcement) : ?>
                        <div class="col-lg-4 col-md-6 mb-4  ">
                            <div class="shadow-sm border-0 rounded" style="width: 600px;background-color: #2f2f30;">
                                <div class="card-body">
                                    <div class="my-user-profile-class float-left">
                                        <!--                               --><?php //echo $announcement['profile_picture']?>
                                        <img src="<?php echo $my_announcement['profile_picture']; ?>" class="" height="40" width="40"style="border-radius: 20px;" />
                                    </div>

                                    <div class="user-content">
                                        <h6 class="text-capitalize user-name" style="color: white"><?php echo $my_announcement['first_name'];  echo " "; echo $my_announcement['last_name'];?></h6>
                                        <p class=" text-capitalize text-light small " ><?php echo $my_announcement['department']; echo " department"?></p>
                                        <?php if($my_announcement['semester'] == 'All' && $my_announcement['sections'] == 'All' && $my_announcement['department_announcement'] == 'All'){ ?>
                                            <p class=" text-capitalize text-light small blockquote-footer"><?php echo 'For All' ?></p>
                                        <?php }elseif($my_announcement['semester'] == 'All'){ ?>
                                            <p class=" text-capitalize text-light small blockquote-footer"><?php echo "All Sem";  echo ",  ";echo " ";echo "Section: "; echo $my_announcement['sections'];echo ",  ";echo "Department: "; echo $my_announcement['department_announcement']; ?></p>
                                        <?php }elseif($my_announcement['sections'] == 'All'){ ?>
                                            <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $my_announcement['semester'];  echo ",  ";echo " ";echo "Both Sections"; echo ",  ";echo "Department: "; echo $my_announcement['department_announcement']; ?></p>
                                        <?php }elseif ($my_announcement['department_announcement'] == 'all'){ ?>
                                            <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $my_announcement['semester'];  echo ",  ";echo " ";echo "Section: "; echo $my_announcement['sections'];echo ",  ";echo "All Department";  ?></p>
                                        <?php }else{ ?>
                                            <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $my_announcement['semester'];  echo ",  ";echo " ";echo "Section: "; echo $my_announcement['sections'];echo ",  ";echo "Department: "; echo $my_announcement['department_announcement']; ?></p>
                                        <?php } ?>

                                        <p class="  text-light small " > <?php echo "at "; echo $my_announcement['uploaded_time']; ?></p>
                                        <hr style="width: 300px;height:2px;border:none;background-color:white">
                                        <p class="text-light mb-0 fs-1 text" ><?php echo $my_announcement['body'];?></p>
                                    </div>
                                    <?php if(!($my_announcement['announcement_link'] == '')){ ?>
                                        <a href="<?php echo $my_announcement['announcement_link'];?>">Link</a>
                                    <?php } ?>
                                    <form action="myprofile.php" method="POST">
                                        <input type="hidden" name="teacher_id" value="<?php echo $my_announcement['teacher_id'];?>">
                                        <input type="hidden" name="time" value="<?php echo $my_announcement['uploaded_time'];?>">
                                        <input type="submit" name="delete" value="Delete" class="btn z-depth-0">
                                    </form>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
    </section>
    <?php } ?>
    <?php }else{ ?>

    <div class="myposts">
        <center><h1>My Posts</h1></center>
    </div>
<!--    this section is for Student posted articles-->
        <section id="cards">
            <div class="container py-2">
                <div class="d-flex flex-column flex-wrap align-items-center ">
                    <?php foreach ($projects as $project): ?>
                        <div class="col-lg-4 col-md-6 mb-4  ">
                            <div class="shadow-sm border-0 rounded" style="width: 600px;background-color:#2f2f30;margin-bottom: 30px;">
                                <div class="card-body">
                                    <!--                        <div class="my-user-profile-class float-left">-->
                                    <!--                            <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40" style="border-radius: 20px;margin-right: 10px"/>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="my-user-profile-class float-left">-->
                                    <!--                            <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40" style="border-radius: 20px;margin-right: 10px"/>-->
                                    <!--                        </div>-->
                                    <div class="my-user-profile-class float-left">
                                        <img src="<?php echo $project['profile_picture'];?>" class="" height="40" width="40" style="border-radius: 20px;margin-right: 10px"/>
                                    </div>
                                    <div class="user-content">
                                        <h6 class="text-capitalize text-light user-name"><?php echo $project['first_name'];echo " ";echo $project['last_name'];?></h6>
                                        <p class=" text-capitalize text-light small blockquote-footer"><?php echo $project['department']?></p>
                                        <hr style="width: 300px;height:2px;border:none;background-color:white">
                                        <center><h2 class="text-capitalize text-light user-name"><?php echo $project['project_head'];?></h2></center>
                                        <div style>
                                            <img src="https://d33wubrfki0l68.cloudfront.net/2475489eaf20163ec0f54ddc1d92aa8d4c87c96b/e7c81/images/docs/components-of-kubernetes.svg" width="500px">
                                        </div>
                                        <!--                            <div style>-->
                                        <!--                                <img src="--><?php //echo $project['project_link'];?><!--">-->
                                        <!--                            </div>-->
                                        <p class="small text-light mb-0"><?php echo $project['project_body']?>

                                        </p>
                                        <?php if(!($project['project_link'] == '')){ ?>
                                            <a href="<?php echo $project['project_link'];?>">Link</a>
                                        <?php } ?>
                                        <form action="myprofile.php" method="POST">
                                            <input type="hidden" name="usn" value="<?php echo $project['usn'];?>">
                                            <input type="hidden" name="time" value="<?php echo $project['uploded_time'];?>">
                                            <input type="submit" name="delete" value="Delete" class="btn z-depth-0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

<?php } ?>
</body>

</html>