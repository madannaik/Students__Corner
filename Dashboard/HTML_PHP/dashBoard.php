<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="import" href="component.html">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body onload="myFunc('block','none','none','none','none')">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="sidebar">
            <h2 style="color:#0175c2;">Student Corner</h2>
            <ul>
                <li><a href="announcement.php" ><i class="fas fa-bullhorn"></i>Announcements</a></li>
                <li><a href="article.php" ><i class="fas fa-archive"></i>Projects</a></li>
                <li><a href="notes.php" ><i class="fas fa-file" aria-hidden="true"></i>Notes</a></li>
                <li><a href="lect_profile.php" ><i class="fas fa-user"></i>Lecturers Profile</a></li>
                <li><a href="myprofile.php" ><i class="fas fa-info-circle"></i>My Profile</a></li>
            </ul>

            <div class="social_media" style="margin-bottom: 10px;">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
            
    </div>
</body>

</html>