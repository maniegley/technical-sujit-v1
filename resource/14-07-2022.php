<?php 
    include('../connection.php');
    //$media_id = $_GET['get-resource'];
    $media_id = '';
    $media_link = str_replace(" ","+", $media_id);
    $media_link = "https://www.mediafire.com/".$media_link;
    //echo $media_id."\n";
    if(!$db) {
        echo "Error : Something went wrong. Unable to make connection!\n";
    } else {
        if (empty($media_id)) {
            $get_video_query = "SELECT * FROM t_media_fire_link ORDER BY id DESC LIMIT 10";
        } else {
            $get_video_query = "SELECT * FROM t_media_fire_link where media_url='$media_link' ORDER BY id DESC LIMIT 1";
        }
        
        $result = pg_query($db, $get_video_query);
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
        <link rel="stylesheet" href="../style/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="../images/logo1.jpeg" sizes="32x32" />
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

            .ss{
                width: 100%;
                height: 100%;
                margin: 20px;
            }

            .ssH{
                width: 80%;
                height: 10%;
            }
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
                <li class="active"><a href="../index.php">Home</a></li>
                <li class=""><a href="resources.php">Resources</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Privacy & Policy</a></li>
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
                            <img src="../upload/logo1.jpeg" style="width:300px; height:90px;">
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
        <div class="container text-center row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-8 scrol">
                    <div class="title-wrap">
                        <h2 class="title">Raw Materials</h2>
                    </div>
                    <?php
                        while($row = pg_fetch_assoc($result)){
                    ?>
                    <div class="row row-item1">
                        <div class="panel">
                            <div class="panel-body">
                                <!-- <div class="col-sm-6">
                                    <div>
                                        <a href="<?php echo $row['media_url'] ?>">
                                            <img src="<?php echo $row['media_thumbnail_img']; ?>" class="" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />
                                        </a>
                                    </div>
                                    <p style="color: rgb(100, 86, 86);"><strong>Uploded On </strong><?php echo date_format(date_create($row['media_upld_date']), "d F Y"); ?>
                                    </p>
                                </div> -->
                                <div class="col-sm-11">  
                                    <div class="post-info">
                                      
                                        <!-- <a href="<?php echo $row['media_url']; ?>">
                                            <span class="glyphicon glyphicon-hand-right"> </span>
                                            <?php echo $row['media_title']; ?>
                                        </a> -->

                                        <heading class="tdb-title-text"><?php echo $row['media_title']; ?></heading>
                                
                                    </div>
                                    <div class="post-info">
                                        <p><strong style="font-weight: 1000;">Uploded On </strong><?php echo date_format(date_create($row['media_upld_date']), "d F Y"); ?></p>
                                    </div>
                                    <div class="post-info1">
                                        
                                        <!-- <p>Sabhi material related to edit this reels video download karne ke liye niche diye gye link par click kare...</p> -->
                                        <p class="thanks-note"><span class="glyphicon glyphicon-hand-right"> </span>
                                        Hello Dosto meri team TechnicalSujit ke taraf se aap sabhi ko bahut bahut dhanayawad. Aap sayad hamare youtube channel se yaha 
                                        aaye honge ya directly aap hamare website pe visit kar rhe honge. Iske liye aap sabhi ko bahut dhanayawad.
                                        </p></br>
                                        <p>
                                        Isi jos se aap hame support karte rhe taki hum aapke liye aise hi aur content banate rhe.
                                        </p>
                                        <a href="<?php echo $row['media_url'] ?>">
                                            <img src="<?php echo $row['media_thumbnail_img']; ?>" class="" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />
                                        </a>
                                        </br></br></br></br>
                                        <h3 class="r-nested-title">How to Download Materials !!!</h3>
                                        

                                        <p>
                                        <b><?php echo $row['media_title']; ?></b> is reel ko banana bahut hi aasan hai. Bas aapko niche diye gaye sare steps throughly follow karne honge.
                                        </p>

                                        <p class="r-suru">
                                        To chaliye suru karte hai!!!
                                        </p>

                                        <!-- Step Started from here -->
                                        <div class=""> 

                                            <p>
                                                <b class="#">Step 1:</b> Sabse pahle aapko wo sare material download karne honge jo is reels ko banane me use hue hai.
                                            </p>

                                            <p>
                                                <b>Step 2:</b> Niche diye gye link se app wo sare material download kar le.
                                                <a href="#" class="r-link">Download</a>
                                            </p>

                                            <p>
                                                <b>Step 2:</b> Niche diye gye link se app wo sare material download kar le.
                                                <a href="#" class="r-link">Download</a>
                                            </p>
                                            <img src="upload/download.png" class="" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />

                                            <p>
                                                <b>Step 3:</b> Materials successfully download hone ke bad aapko hamare youtube video ko dekhna hoga. Aap niche diye gye link se us video ko dekh sakte hai.
                                                <a href="https://www.youtube.com/channel/UCMtf9XMR1sm0_xFujgNNabw" class="r-link">Watch Now</a>
                                            </p>

                                            <p>
                                                <b>test1:</b> Niche diye gye link se app wo sare material download kar le.
                                            
                                            </p>
                                            <div class="screenshot">
                                                <img src="upload/test1.jpeg" class="ss" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />
                                            </div>
                                                
                                      

                                        
                                            <p>
                                                <b>test2:</b> Niche diye gye link se app wo sare material download kar le.
                                            </p>

                                            <div>
                                            <img src="upload/test2.jpeg" class="ssH" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            


                                            <h3 class="r-nested-title">Conclusion :</h3>

                                            <p>
                                                I hope aap ye reels video bna paye honge. Agar aapko hamara ye kam achha lga ye aap aur treding reels banana chahte hai to hamare website ke home page HOME aur youtube cannel pe checkout kare. Aur hume support karne ke liye hamare youtube channel ko subscribe jarur kare. 
                                            </p>

                                        </div>

                                        <!-- <h2>Thanks For all your support!!!</h2> -->
                                    </div>  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    } 
                    ?>
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
                    <div class="thumbnail">
                        <div class="title-wrap">
                            <h2 class="title">Most View Video</h2>
                        </div>
                        <!-- <p><strong>Most Viewed Video:</strong></p> -->
                        <iframe width="250" height="200"
                            src="https://www.youtube.com/embed/NjcRLyrqWv8?autoplay=0&mute=1">
                        </iframe>
                        <!--<img src="images/thumbnail1.jpeg" alt="Paris" width="400" height="300">-->
                        <p><strong>Uploded</strong>
                        Fri. 27 November 2021</p>
                        <!-- <button class="btn btn-primary">Watch</button> -->
                    </div>      

                    <div class="thumbnail">
                        <div class="title-wrap">
                            <h2 class="title">Popular Post</h2>
                        </div>
                        
                        <?php
                            $get_video_query = "SELECT * FROM t_vid_link ORDER BY id DESC LIMIT 6";
                            //$result = mysqli_query($db, $get_video_query);
                            $result = pg_query($db, $get_video_query);
                            while($row = pg_fetch_assoc($result)){
                        ?>
                        <div class="row">     
                            <div class="col-sm-12">
                                <div class="float-parent-element">
                                    <div class="float-child-element">
                                        <div class="red">
                                            <img src="<?php echo $row['vid_img']; ?>" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" width="100" height="90">
                                        </div>
                                    </div>
                                    <div class="float-child-element">
                                        <div class="yellow">
                                        <a href="<?php echo $row['vid_media_fire_link']; ?>" style="text-align: left;">
                                            <!-- <span class="glyphicon glyphicon-hand-right"> </span> -->
                                            <?php echo $row['vid_title']; ?>
                                        </a>
                                        <p style="color: rgb(100, 86, 86);text-align: left;font-size: 10px;"><strong style="font-weight: 1000;">Uploded On </strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class='parent'>
                                    <div class='child'>
                                        <img src="<?php echo $row['vid_img']; ?>" alt="Paris" width="50" height="40">
                                    </div>
                                    <div class='child'>
                                        <a href="<?php echo $row['vid_media_fire_link']; ?>">
                                            <span class="glyphicon glyphicon-hand-right"> </span>
                                            <?php echo $row['vid_title']; ?>
                                        </a>
                                    </div>
                                </div> -->
                                <!-- <img src="<?php echo $row['vid_img']; ?>" alt="Paris" width="50" height="40"> -->
                                <!-- <div class="post-info">
                                    <a href="<?php echo $row['vid_media_fire_link']; ?>">
                                        <span class="glyphicon glyphicon-hand-right"> </span>
                                        <?php echo $row['vid_title']; ?>
                                    </a>
                                </div> -->
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="post-info">
                                    <a href="<?php echo $row['vid_media_fire_link']; ?>">
                                         <span class="glyphicon glyphicon-hand-right"> </span>
                                        <?php echo $row['vid_title']; ?>
                                    </a>
                                </div>
                            </div> -->
                            
                            
                        </div>
                        <?php }
                    
                    ?>
                    </div>             
                </div>
                <!-- Right Pannel ends here! -->
                <!-- Right Pannel ends here! -->
            </div>
        </div> 
        <?php include('../footer.php');?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="../js/myscripts.js"></script>
    </body>
</html>


                    