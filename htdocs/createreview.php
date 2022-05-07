<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/globalcss.css">
    <link rel="stylesheet" href="CSS/sidepages.css">
    <link rel="stylesheet" href="CSS/createreview.css">
    <script defer src="JS/createreview.js"></script>
</head>
<body>
    <div class="title">
        <!-- <img src="Images/EP4ULogo.png" class="logoimg" alt="Logo"> -->
        <span class="greentxt">E</span>levated &nbsp; <span class="greentxt">P</span>erformance &nbsp; <span class="greentxt"> 4</span> &nbsp; <span class="greentxt">  U</span>
    </div>
    <ul class="navbar">
        <li><div><a href = "index.php"><img src = "Images/EP4ULogo.png" class="logoimg" alt="Logo"> </a></div></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="resourceblog.php">Resource Blog</a></li>
       
        <li><a href="links.php">Links</a></li>
        <li><div class="dropdown">
                <a href="ourservices.php">Our Services</a>
                <div class="dropdownItem">
                    <a href="boarddevelopment.php">Board Development</a>
                    <a href="goalsetting.php">Goal Setting & Strategic Planning</a>
                    <a href="executivecoaching.php">Executive Coaching</a>
                    <a href="staffdevelopment.php">Staff Development</a>

                </div>
            </div>
        </li>
    </ul>

    <ul class="burgerNavbar">
        <li><div class="burgerMenu">
                <a style="padding-left:50px;">Menu</a>
                <div><a href = "index.php"><img src = "Images/EP4ULogo.png" class="logoimg" alt="Logo"> </a></div>
                <div class="burgerDropDownItem">
                
                    <a href="aboutus.php">About Us</a>
                    <a href="reviews.php">Reviews</a>
                    <a href="videos.php">Videos</a>
                    <a href="resourceblog.php">Resource Blog</a>
                    <a href="links.php">Links</a>
                    <a href="ourservices.php">Our Services</a>
                </div>
            </div></li>
    </ul>

    <div class="bannertitle">
        Leave us a review!
    </div>
    <div class="contentcontainer">
        <form action="PHP/post_review.php" method="post">
            <label for="fname">First name</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="review">Review</label><br>
            <textArea type = "text" class="review" name="review"></textArea><br><br>
            <input class="button"type="submit" value="Submit">
        </form>    
    </div>
    

    <div class="footer">
        <ul class="footlist">
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="Reviews.php">Reviews</a></li>
        <li><a href="Videos.php">Videos</a></li>
        <li><a href="ResourceBlog.php">Resource Blog</a></li>
       
        <li><a href="Links.php">Links</a></li>
        <li><a href="OurServices.php">Our Services</a></li>
        <li><a href="mailto:BeGreat@EP4U.org">BeGreat@EP4U.org</a></li>
        </ul>
    </div>
</body>
</html>