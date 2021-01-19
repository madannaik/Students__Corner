<?php
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
    <link rel="stylesheet" href="../CSS/notes.css">
    <script src="https://kit.fontawesome.com/b5cff000aa.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/6.3.1/d3.min.js"></script>

</head>

<body>
<div id="my-overlay" >
    <!--TODO:Increase the width of pop up form-->
    <!--TODO: Bring the popup form in the center-->
    <!--    TODO:    change the color of the post button if possible-->
    <!--        TODO: increase the text area for announcement-->
    <div class="my-form-popup" id="myForm" >
        <form action="notes_upload_db.php" class="form-container" method="POST" enctype="multipart/form-data">
            <h1>New Announcement</h1>
            <div class="form-row">
                <div class="form-group col-md-6" >
                    <label for="pdf_upload" class="file-label">Select pdf file</label>
                    <input class="form-control" id="pdf_upload"  name="pdf" type="file"  accept="application/pdf" >
                </div>
                <div class="form-group col-md-6"  >
                    <label for="subject_name">Subject name</label>
                    <input class="form-control" id="subject_name"  name="subject_name" placeholder="null" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-4"  >
                    <label for="Subject code">Subject code</label>
                    <input class="form-control" id="Subject code"  name="subject_code" placeholder="null" required>
                </div>
                <div class="form-group col-md-4"  >
                    <label for="Module name">Module name</label>
                    <input class="form-control" id="Module name"  name="Module_name" placeholder="null" required>
                </div>
                <div class="form-group col-md-4"  >
                    <label for="Module number">module number</label>
                    <input class="form-control" id="Module number"  name="module_number" placeholder="null" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputState">Choose Department</label>
                <select id="inputState" class="form-control" name="department" required>
                    <option selected>All</option>
                    <option>Computer Science</option>
                    <option>Electronics and Communication</option>
                    <option>Electronics and Electrical</option>
                    <option>Mechanical Engineering</option>
                    <option>Information Science</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState" >Semester</label>
                    <select id="inputState" class="form-control" name="semester" required>

                        <option selected>Semester 1</option>
                        <option >Semester 2</option>
                        <option>Semester 3</option>
                        <option>Semester 4</option>
                        <option>Semester 5</option>
                        <option>Semester 6</option>
                        <option>Semester 7</option>
                        <option>Semester 8</option>

                    </select>
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="inputState">Section</label>
                    <select id="inputState" class="form-control" name="sections" required>
                        <option selected>All</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div> -->
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

<!-- ui for notes first page -->

<form action="notes_pdf.php?dept=Computer Science" method="POST">
<div class="main-flex">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/pc.svg" alt="svg" height="150" width="150" >
            </div>
            <div class="course-info">
                <h6>Department</h6>
                <h2>Computer Science</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select class="new-select" name="semester">

                            <option selected>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                            <option>Semester 7</option>
                            <option>Semester 8</option>

                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </form>

    <form action="notes_pdf.php?dept=Information Science" method="POST">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/information.svg" alt="svg" height="150" width="150" >
                <!-- <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6> -->
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Information Science</h2>
                <div class="selectdiv">
                    <label>
                        <select class="new-select" name="semester">

                            <option selected>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                            <option>Semester 7</option>
                            <option>Semester 8</option>
                        </select>
                    </label>
                </div>
                <button class="btn1" type="submit" >Continue</button>
            </div>
        </div>
    </div>
    </form>


    <form action="notes_pdf.php?dept=Mechanical Engineering" method="POST">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/machine.svg" alt="svg" height="150" width="150" >
                <!-- <a href="#">Last updated <i class="fas fa-chevron-right"></i></a> -->
                <!-- <h6 style="font-size: 10px">2/10/2021</h6> -->
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Mechanical Engineering</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv" class="new-select" name="semester">
                    <label>
                        <select class="new-select" name="semester">

                            <option selected>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                            <option>Semester 7</option>
                            <option>Semester 8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </form>

    <form action="notes_pdf.php?dept=Electronics and Communication" method="POST">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/electric.svg" alt="svg" height="150" width="150" >
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Electronics and Communication</h2>
                <button class="btn1" type="submit">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select class="new-select" name="semester">

                            <option selected>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                            <option>Semester 7</option>
                            <option>Semester 8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </form>

    <form action="notes_pdf.php?dept=Electronics and Electrical" method="POST">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/electric.svg" alt="svg" height="150" width="150" >
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Electronics and Electrical</h2>
                <button class="btn1"  type="submit">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select class="new-select" name="semester">

                            <option selected>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                            <option>Semester 7</option>
                            <option>Semester 8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


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





