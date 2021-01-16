<?php
include('dashBoard.php');
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
        <form action="announcementdb.php" class="form-container" method="POST" enctype="multipart/form-data">
            <h1>New Announcement</h1>
            <div class="form-row">
                <div class="form-group col-md-6" >
                    <label for="pdf_upload" class="file-label">Select pdf file</label>
                    <input class="form-control" id="pdf_upload"  name="pdf" type="file"  accept="application/pdf" >
                </div>
                <div class="form-group col-md-6"  >
                    <label for="subject_name">Subject name</label>
                    <input class="form-control" id="subject_name"  name="subject_name" placeholder="null">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4"  >
                    <label for="Subject code">Subject code</label>
                    <input class="form-control" id="Subject code"  name="subject_code" placeholder="null">
                </div>
                <div class="form-group col-md-4"  >
                    <label for="Module name">Module name</label>
                    <input class="form-control" id="Module name"  name="Module_name" placeholder="null">
                </div>
                <div class="form-group col-md-4"  >
                    <label for="Module number">module number</label>
                    <input class="form-control" id="Module number"  name="module_number" placeholder="null">
                </div>
            </div>
            <div class="form-group">
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
<div class="main-flex">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/pc.svg" alt="svg" height="150" width="150" >

                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">
                <h6>Department</h6>
                <h2>Computer Science</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>

                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/machine.svg" alt="svg" height="150" width="150" >
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Mechanical</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/electric.svg" alt="svg" height="150" width="150" >
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Electronics and Electrical</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <img src="../../assets/information.svg" alt="svg" height="150" width="150" >
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">

                <h6>Department</h6>
                <h2>Information Science</h2>
                <button class="btn1">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select id="new-select">
                            <option selected>Select semester </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //if ($label == 'teacher'){ ?>
    <!--this code is for Floating button for pop up form -->
    <div class="my-pop-up-button" onclick="on()">
        <i class="fas fa-plus" style="padding-top: 20px;"></i>
    </div>
<?php //} ?>

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
<script>
    $(function () {
        let a = $('#new-select').value;
        console.log(a);
        if (a === "Select semester"){
            $('.btn').attr("disabled");
        }
        else {
            $('.btn').removeAttr("disabled");
        }
    })
</script>

</body>

</html>





