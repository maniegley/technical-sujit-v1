<?php 
    include('connection.php');
    //$media_id = $_GET['get-resource'];
    //$media_link = str_replace(" ","+", $media_id);
    //$media_link = "https://www.mediafire.com/".$media_link;
    //echo $media_id."\n";
    //if(!$db) {
    //    echo "Error : Something went wrong. Unable to make connection!\n";
    //} else {
    //    if (empty($media_id)) {
    //        $get_video_query = "SELECT * FROM t_media_fire_link ORDER BY id DESC LIMIT 10";
    //    } else {
    //        $get_video_query = "SELECT * FROM t_media_fire_link where media_url='$media_link' ORDER BY id DESC LIMIT 1";
    //    }
        
    //    $result = pg_query($db, $get_video_query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Technical Sujit | Resources</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="images/logo1.jpeg" sizes="32x32" />
        <style>    
            /* Set black background color, white text and some padding */
            /* footer {
                background-color: #555;
                color: white;
                padding: 15px;
            } */
            .tdb-title-text{
                display: inline-block;
                position: relative;
                margin: 0;
                word-wrap: break-word;
                font-size: 20px;
                line-height: 38px;
                font-weight: 700;
                text-align: left;
            }

            .r-nested-title{
                display: inline-block;
                text-decoration: underline; 
                margin: 0;
                word-wrap: break-word;
                font-size: 22px;
                line-height: 38px;
                font-weight: 700;
                color: #b91871;
                font-family: "Cormorant Unicase", serif;
            }

            .thanks-note{
                display: inline-block;
                margin: 0;
                word-wrap: break-word;
            }

            .r-suru{
                font-size: 15px;
                line-height: 20px;
                font-weight: 700;
                text-decoration: underline; 
            }

            .r-link{
                color: green;
                text-decoration: underline; 
                word-wrap: break-word;
                font-size: 15px;
                font-weight: 700;
            }

            .scrol{
                overflow-x: hidden;
                overflow-y: auto;
            }
            body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  /* border: none; */
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

            /*  */
        </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand ml2" href="index.php">
                        Technical Sujit
                        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                        <script src="js/myscripts.js"></script> -->
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li class=""><a href="resources.php">Resources</a></li> -->
                        <li class="active"><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="privacy-policy.php">Privacy & Policy</a></li>
                    </ul>
                    <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>        
                        </div>
                    </form> -->
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                    </ul> -->
                </div>
            </div>
        </nav>

        <div class="container text-center" style="margin-top:60px;">    
            <div class="row">
                <div class="col-sm-offset-1 col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel text-left" style="width:300px; height:50px;">
                                <div class="panel-body">
                                    <img src="upload/logo1.jpeg" style="width:300px; height:90px;">
                                </div>   
                            </div>
                    
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-warning text-left">
                                <div class="panel-body">
                                    <p><strong style="color:red;">Recent Videos: </strong>
                                        <a class="ml3" href="#">Tere Bhaiya Khade Hai Reels Editing</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <div class="row row-item1">
                        <h1 class="ml3 logo2" style="font-size:25px;">Learn Video editing with us!!!</h1>    
                    </div>
                </div>
            </div>
        </div>
        <div class="container row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-8 scrol">
                    <h1>Contact Us</h1>
                    <p>We would like to make sure you are fully aware of all of your data protection rights. And we 
                        beleive in fair rights. We know that we are not perfect but we try hard to improve ourseleves as per 
                        your feedback. Therefore should not hesitate to contact us and can give your valuable feedback through
                        email or phone no.
                    </p>

                    <h3>Email to : technicalsujit@gmail.com <a href="https://mail.google.com/mail/u/2/?zx=9gndovmtaxs#inbox?compose=new" target="_blank"><i class="fa fa-send-o"></i></a></h3>
                    <h3>Phone : +91 6200821820</h3>
                    </br></br></br></br></br></br>
                    <!-- <div class="container">
                        <form action="/action_page.php">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                            <label for="country">Country</label>
                            <select id="country" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div> -->
                </div>  

                <!-- Right Pannel Start here! -->
                <div class="col-sm-4 well1">
                    <div class="title-wrap">
                        <h2 class="title">Follow Us</h2>
                    </div>
                    <div class="social_box">
                        <a href="https://www.facebook.com/technicalsujiteditor" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/invites/contact/?i=zxlr375unl9t&utm_content=nrq0xa2" class="fa fa-instagram" target="_blank"></a>
                        <a href="https://t.me/TechnicalSujitBhai" class="fa fa-telegram" target="_blank"></a>
                        <!-- <a href="#" class="fa fa-linkedin" target="_blank"></a> -->
                        <a href="https://www.youtube.com/@TechnicalSujitReels/" class="fa fa-youtube" target="_blank"></a>
                    </div>
                </div>
                <!-- Right Pannel ends here! -->
                <!-- Right Pannel ends here! -->
            </div>
        </div> 
        <?php include('footer.php');?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="js/myscripts.js"></script>
    </body>
</html>


                    