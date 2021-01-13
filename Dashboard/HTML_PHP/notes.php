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
<div class="main-flex">
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Department</h6>
                <h2>Computer Science</h2>
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">
<!--                <div class="progress-container">-->
<!--                    <div class="progress"></div>-->
<!--                    <span class="progress-text">-->
<!--					6/9 Challenges-->
<!--				</span>-->
<!--                </div>-->
                <h6>Chapter 4</h6>
                <h2>Callbacks & Closures</h2>
                <button class="btn">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>3</option>
                            <option>3</option>
                            <option>3</option>
                            <option>3</option>
                            <option>3</option>

                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Department</h6>
                <h2>Mechanical</h2>
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">
                <!--                <div class="progress-container">-->
                <!--                    <div class="progress"></div>-->
                <!--                    <span class="progress-text">-->
                <!--					6/9 Challenges-->
                <!--				</span>-->
                <!--                </div>-->
                <h6>Chapter 4</h6>
                <h2>Callbacks & Closures</h2>
                <button class="btn">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Last long option</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Department</h6>
                <h2>Electronics and Electrical</h2>
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">
                <!--                <div class="progress-container">-->
                <!--                    <div class="progress"></div>-->
                <!--                    <span class="progress-text">-->
                <!--					6/9 Challenges-->
                <!--				</span>-->
                <!--                </div>-->
                <h6>Chapter 4</h6>
                <h2>Callbacks & Closures</h2>
                <button class="btn">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select>
                            <option selected>Select semester </option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Last long option</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Department</h6>
                <h2>Information Science</h2>
                <a href="#">Last updated <i class="fas fa-chevron-right"></i></a>
                <h6 style="font-size: 10px">2/10/2021</h6>
            </div>
            <div class="course-info">
                <!--                <div class="progress-container">-->
                <!--                    <div class="progress"></div>-->
                <!--                    <span class="progress-text">-->
                <!--					6/9 Challenges-->
                <!--				</span>-->
                <!--                </div>-->
                <h6>Chapter 4</h6>
                <h2>Callbacks & Closures</h2>
                <button class="btn">Continue</button>
                <div class="selectdiv">
                    <label>
                        <select id="new-select">
                            <option selected>Select semester </option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Last long option</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        let a = $('#new-select').value;
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


<!--test 1-->


