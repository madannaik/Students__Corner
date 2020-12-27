<?php
//    including dashboard UI
    include('dashBoard.php');

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
    }else{
        if(!isset($_SESSION['email'])){
            header('location: ../login&registration/LectureSignIn&UP/loginstudent.php');
        }

        $s = "SELECT * FROM student where email = '$email'";
        $result = mysqli_query($conn, $s);
        $student_info = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
      }

//    query to get all announcement
    $s = "SELECT announcement.department_announcement,announcement.semester,announcement.sections,announcement.body,announcement.uploaded_time,announcement.announcement_link, announcement.teacher_id,teacher.first_name,teacher.last_name,teacher.department, teacher.profile_picture FROM announcement JOIN teacher ON announcement.teacher_id = teacher.teacher_id ORDER BY uploaded_time DESC";

    $result = mysqli_query($conn,$s);

//    get all announcement from db and store it as an array
    $announcements = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<script src="https://kit.fontawesome.com/b5cff000aa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/announcement.css">
<body style="background-color:  #fffcfc;scroll-behavior: smooth;" id="my-body">


<?php if ($label == 'teacher'){ ?>

    <!--This code is about announcement pop up-->
    <div id="my-overlay" >
    <!--TODO:Increase the width of pop up form-->
    <!--TODO: Bring the popup form in the center-->
<!--    TODO:    change the color of the post button if possible-->
<!--        TODO: increase the text area for announcement-->
    <div class="my-form-popup" id="myForm">
        <form action="announcementdb.php" class="form-container" method="POST">
            <h1>New Announcement</h1>
<!--            <div class="form-group" style="width: 360px" >-->
<!--                <label for="exampleFormControlTextarea1" >Title</label>-->
<!--                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title" required></textarea>-->
<!--            </div>-->
            <div class="form-group" style="width: 360px" >
                <label for="exampleFormControlTextarea1">Announcement</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body" required></textarea>
            </div>
            <div class="form-group" style="width: 360px" >
                <label for="exampleFormControlTextarea1">Link if any</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="announcement_link" placeholder="null"></textarea>
            </div>
            <div class="form-group" >
                <label for="inputState">Choose Department</label>
                <select id="inputState" class="form-control" name="department" required>
                    <option selected>All</option>
                    <option>Computer Science</option>
                    <option>Electronic and Communication</option>
                    <option>Electronics and Electrical</option>
                    <option>Mechanical Engineering</option>
                    <option>Information Science</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" >
                    <label for="inputState" >Semester</label>
                    <select id="inputState" class="form-control" name="semester" required>
                        <option selected>All</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Section</label>
                    <select id="inputState" class="form-control" name="sections" required>
                        <option selected>All</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button onclick="off()" type="button" class="btn btn-primary btn-sm bg-dark" style="background-color: #181717">Cancel</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm bg">Post</button>
                </div>
            </div>
        </form>
    </div>
    </div>


<?php } ?>



<!--TODO: change the color of the card(a bit bluish dark)-->
<!--This is code is for Announcement Card-->
<!-- TODO: put a button to the link -->
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center ">
                <?php foreach ($announcements as $announcement) : ?>
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;background-color: #2f2f30;">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
<!--                               --><?php //echo $announcement['profile_picture']?>
                                <img src="<?php echo $announcement['profile_picture']; ?>" class="" height="40" width="40"style="border-radius: 20px;" />
                            </div>
                            
                            <div class="user-content">
                                <h6 class="text-capitalize user-name" style="color: white"><?php echo $announcement['first_name'];  echo " "; echo $announcement['last_name'];?></h6>
                                <p class=" text-capitalize text-light small " ><?php echo $announcement['department']; echo " department"?></p>
                                <?php if($announcement['semester'] == 'All' && $announcement['sections'] == 'All' && $announcement['department_announcement'] == 'All'){ ?>
                                    <p class=" text-capitalize text-light small blockquote-footer"><?php echo 'For All' ?></p>
                                <?php }elseif($announcement['semester'] == 'All'){ ?>
                                    <p class=" text-capitalize text-light small blockquote-footer"><?php echo "All Sem";  echo ",  ";echo " ";echo "Section: "; echo $announcement['sections'];echo ",  ";echo "Department: "; echo $announcement['department_announcement']; ?></p>
                                <?php }elseif($announcement['sections'] == 'All'){ ?>
                                    <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $announcement['semester'];  echo ",  ";echo " ";echo "Both Sections"; echo ",  ";echo "Department: "; echo $announcement['department_announcement']; ?></p>
                                <?php }elseif ($announcement['department_announcement'] == 'all'){ ?>
                                    <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $announcement['semester'];  echo ",  ";echo " ";echo "Section: "; echo $announcement['sections'];echo ",  ";echo "All Department";  ?></p>
                                <?php }else{ ?>
                                    <p class=" text-capitalize text-light small blockquote-footer"><?php echo "Semester: "; echo $announcement['semester'];  echo ",  ";echo " ";echo "Section: "; echo $announcement['sections'];echo ",  ";echo "Department: "; echo $announcement['department_announcement']; ?></p>
                                <?php } ?>

                                <p class="  text-light small " > <?php echo "at "; echo $announcement['uploaded_time']; ?></p>
                                <hr style="width: 300px;height:2px;border:none;background-color:white">
                                <p class="text-light mb-0 fs-1 text" ><?php echo $announcement['body'];?></p>
                            </div>
                            <?php if(!($announcement['announcement_link'] == '')){ ?>
                                 <a href="<?php echo $announcement['announcement_link'];?>">Link</a>
                            <?php } ?>
                            <form action="">

                            </form>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>



<?php if ($label == 'teacher'){ ?>
<!--this code is for Floating button for pop up form -->
    <div class="my-pop-up-button" onclick="on()">
        <i class="fas fa-plus" style="padding-top: 20px;"></i>
    </div>
<?php } ?>

<script>
    function on() {
        document.getElementById("my-overlay").style.display = "block";
        // document.getElementById("my-body").style.overflow = "hidden";
    }

    function off() {
        document.getElementById("my-overlay").style.display = "none";
        // document.getElementById("my-body").style.overflow = "scroll";
    }
</script>
</body>

</html>
