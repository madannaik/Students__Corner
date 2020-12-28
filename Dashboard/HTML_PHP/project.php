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

    $s = "SELECT projects.uploded_time, projects.project_head, projects.project_body, projects.project_link,projects.project_image,projects.usn, student.first_name, student.last_name, student.department, student.semester, student.sections, student.profile_picture FROM projects JOIN student on projects.usn = student.usn ORDER BY uploded_time DESC ";
    $result = mysqli_query($conn,$s);
    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
//    print_r($projects);


//    gathering all student details
//    $first_name = $_SESSION['first_name'];
//    $last_name = $_SESSION['last_name'];
//    $department = $_SESSION['department'];
//    $semester = $_SESSION['semester'];
//    $sections = $_SESSION['sections'];
//    $usn = $_SESSION['usn'];
//    $profile_picture = $_SESSION['profile_picture'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register as Student</title>
    <link rel="stylesheet" href="../CSS/announcement.css">
    <link rel="stylesheet" href="../CSS/article.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<!--<center><h1>--><?php //echo $label; echo $email; ?><!--</h1></center>-->
<!--This code is about announcement pop up-->
<!--TODO:Increase the width of pop up form-->
<!--TODO: Bring the popup form in the center-->
<!--    TODO:    change the color of the post button if possible-->
<!--        TODO: increase the text area for project description-->
<div id="my-overlay" >
    <!--TODO:Increase the width of pop up form-->
    <div class="my-form-popup" id="myForm" style="width: 500px;position: absolute;left: 35%;top: 6%">
        <form action="projectdb.php" class="form-container" method="post">
            <h1>New Post</h1>
<!--            <h4>--><?php //echo $label?><!--</h4>-->
            <div class="mb-3" >
                <label for="exampleFormControlTextarea1">Project/Article Title</label>
                <input class="form-control" id="exampleFormControlTextarea1" name="project_title" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="project_body" required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label ">Provide link for your Post image</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="https://yoururl.com" name="project_image" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provide link for source code if any</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="https://yoururl.com" name="project_link" >
            </div>
             <div class="row">
                <div class="col">
                    <button onclick="off()" type="button" class="btn btn-primary btn-sm bg-dark" style="background-color: #181717">Cancel</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm bg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!--************************************************************************************************************************************************************************-->
<!-- TODO: put a button to the link -->
<section id="cards">
    <div class="container py-2">
        <div class="d-flex flex-column flex-wrap align-items-center ">
            <?php foreach ($projects as $project): ?>
            <div class="col-lg-4 col-md-6 mb-4 ">
                <div class="shadow-sm border-0 rounded" style="width: 600px;background-color:#040424;margin-bottom: 30px;">
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

                                <img src="<?php echo $project['project_image'];?>" width="500px">
                            </div>
<!--                            <div style>-->
<!--                                <img src="--><?php //echo $project['project_link'];?><!--">-->
<!--                            </div>-->
                            <p class="small text-light mb-0"><?php echo $project['project_body']?>

                            </p>
                            <?php if(!($project['project_link'] == '')){ ?>
                                <a href="<?php echo $project['project_link'];?>"><button type="button" class="btn btn-outline-light text-dark" style="margin: 4px 0;padding: 5px 25px;color:white: honeydew">Link</button></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<?php if($label == 'student'){ ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
