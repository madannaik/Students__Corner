<?php
//    including dashboard UI
    include('dashBoard.php');
//    including the file for connection and to retrive data
   include('config.php');
?>

<!DOCTYPE html>
<html lang="">

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
    <div id="my-overlay" ">
    <!--TODO:Increase the width of pop up form-->
    <div class="my-form-popup" id="myForm">
        <form action="announcementdb.php" class="form-container" method="POST">
            <h1>Announce</h1>
            <div class="form-group" style="width: 360px" >
                <label for="exampleFormControlTextarea1" >Title</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title" required></textarea>
            </div>
            <div class="form-group" style="width: 360px" >
                <label for="exampleFormControlTextarea1">Announcement</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="body" required></textarea>
            </div>
            <div class="form-group" >
                <label for="inputState">Choose Department</label>
                <select id="inputState" class="form-control" name="department" required>
                    <option selected>All</option>
                    <option>Computer Science Engineering</option>
                    <option>Electronic and Communication Engineering</option>
                    <option>Electronics and Electrical Engineering</option>
                    <option>Mechanical Engineering</option>
                    <option>Information and Science Engineering</option>
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
                    <button type="submit" class="btn btn-primary btn-sm bg">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </div>


<?php } ?>




<!--This is code is for Announcement Card-->
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center ">
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;background-color: #2f2f30;">
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
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;background-color:#2f2f30;margin-bottom: 100px;">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40" style="border-radius: 20px;"/>
                            </div>
                            <div class="user-content">
                                <h6 class="text-capitalize user-name" style="color: white">Carry Johnshon</h6>
                                <p class=" text-capitalize text-light fs-1 text " >Computer Science Department</p>
                                <p class=" text-capitalize text-light small blockquote-footer">III Sem A CS</p>
                                <hr style="width: 300px;height:2px;border:none;background-color:white">
                                <p class=" text-light mb-0 " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
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
