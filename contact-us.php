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
        <?php include('header.php');?>
        <div class="container text-center row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-8 scrol">
                    <h3>Contact Form</h3>

                    <div class="container">
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
                    </div>
                </div>  

                <!-- Right Pannel Start here! -->
                <div class="col-sm-4 well1">
                    <div class="title-wrap">
                        <h2 class="title">Follow Us</h2>
                    </div>
                    <div class="social_box">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
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


                    