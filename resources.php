<?php 
    include('connection.php');
    $media_id = $_GET['get-resource'];
    $media_link = str_replace(" ","+", $media_id);
    $media_link = "https://www.mediafire.com/".$media_link;
    //echo $media_id."\n";
    if(!$db) {
        echo "Error : Something went wrong. Unable to make connection!\n";
    } else {
        if (empty($media_id)) {
            $get_video_query = "SELECT * FROM t_media_fire_link ORDER BY id DESC LIMIT 10";
        } else {
            $get_video_query = "SELECT * FROM t_media_fire_link where media_url='$media_link'";
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
        </style>
    </head>
    <body>
        <?php include('header.php');?>
        <div class="container text-center row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-8">
                    <div class="title-wrap">
                        <h2 class="title">Raw Materials</h2>
                    </div>
                    <?php
                        while($row = pg_fetch_assoc($result)){
                    ?>
                    <div class="row row-item1">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <div>
                                    <a href="<?php echo $row['media_url'] ?>">
                                        <img src="<?php echo $row['media_thumbnail_img']; ?>" class="" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />
                                    </a>
                        </div>
                                    <p style="color: rgb(100, 86, 86);"><strong>Uploded On </strong><?php echo date_format(date_create($row['media_upld_date']), "d F Y"); ?>
                                    </p>
                                </div>
                                <div class="col-sm-5">  
                                    <div class="post-info">
                                      
                                        <a href="<?php echo $row['media_url']; ?>">
                                            <!-- <span class="glyphicon glyphicon-hand-right"> </span> -->
                                            <?php echo $row['media_title']; ?>
                                        </a>
                                
                                    </div>
                                    <div class="post-info">
                                        <p><strong style="font-weight: 1000;">Uploded On </strong><?php echo date_format(date_create($row['media_upld_date']), "d F Y"); ?></p>
                                    </div>
                                    <div class="post-info1">
                                        <p>Sabhi material related to edit this reels video download karne ke liye niche diye gye link par click kare...</p>
                                    </div>  
                                    <p>
                                        <!-- <strong><?php echo $row['media_title']; ?></strong>
                                        </br>
                                        <a href="#">
                                            <i class="fa fa-arrow-down" style="font-size:100px;color:red"></i>
                                            </br>  
                                        </a> -->
                                        <a href="<?php echo $row['media_url']; ?>"><button class="btn btn-primary btn-lg">Click here for download</button></a>
                                    </p>
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
                            src="https://www.youtube.com/embed/NjcRLyrqWv8?autoplay=1&mute=1">
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
                            $get_video_query = "SELECT * FROM t_vid_link ORDER BY id DESC LIMIT 4";
                            //$result = mysqli_query($db, $get_video_query);
                            $result = pg_query($db, $get_video_query);
                            while($row = pg_fetch_assoc($result)){
                        ?>
                        <div class="row">     
                            <div class="col-sm-12">
                                <div class="float-parent-element">
                                    <div class="float-child-element">
                                        <div class="red">
                                            <img src="<?php echo $row['vid_img']; ?>" alt="Paris" width="100" height="90">
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
        <?php include('footer.php');?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="js/myscripts.js"></script>
    </body>
</html>


                    