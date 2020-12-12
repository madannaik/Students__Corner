<?php
//    including dashboard UI
    include('dashBoard.php');
//    including the file for connection and to retrive data
   include('config.php');
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
<!--This code is about announcement pop up-->
<div id="my-overlay" >
    <!--TODO:Increase the width of pop up form-->
    <div class="my-form-popup" id="myForm">
        <form action="" class="form-container">
            <h1>Announce</h1>
            <div class="form-group" style="width: 360px">
                <label for="exampleFormControlTextarea1">Input Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provide link for your article image</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="https://yoururl.com">
            </div>




            <div class="row">
                <div class="col">
                    <button onclick="off()" type="button" class="btn btn-primary btn-sm bg-dark" style="background-color: #181717">Cancel</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary btn-sm bg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--************************************************************************************************************************************************************************-->
<section id="cards">
    <div class="container py-2">
        <div class="d-flex flex-column flex-wrap align-items-center ">
            <div class="col-lg-4 col-md-6 mb-4  ">
                <div class="shadow-sm border-0 rounded" style="width: 600px;background-color: #2f2f30;">
                    <div class="card-body">
                        <div class="my-user-profile-class float-left">
                            <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="40" width="40"style="border-radius: 20px;margin-right: 10px" />
                        </div>

                        <div class="user-content">
                            <h6 class="text-capitalize user-name" style="color: white">Carry Johnshon</h6>
                            <p class=" text-capitalize text-light small blockquote-footer " >Computer Science Department</p>
                            <hr style="width: 300px;height:2px;border:none;background-color:white">
                            <p class="small text-light mb-0 " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.</p>
                            <div style="padding: 0px">
                                <img src="https://platform9.com/wp-content/uploads/2019/05/kubernetes-constructs-concepts-architecture.jpg" width="560px">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4  ">
                <div class="shadow-sm border-0 rounded" style="width: 600px;background-color:#2f2f30;margin-bottom: 100px;">
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

<!--this code is for Floating button for pop up form -->
<div class="my-pop-up-button" onclick="on()">
    <i class="fas fa-plus" style="padding-top: 20px;"></i>
</div>


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
