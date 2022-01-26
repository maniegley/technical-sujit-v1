<?php 
    include('connection.php');
    $media_id = $_GET['get-resource'];
    $media_link = str_replace(" ","+", $media_id);
    $media_link = "https://www.mediafire.com/".$media_link;
    //echo $media_id."\n";
    if(!$db) {
        echo "Error : Something went wrong. Unable to make connection!\n";
    } else {
        if (empty($title)) {
            $get_video_query = "SELECT * FROM t_media_fire_link ORDER BY id DESC LIMIT 10";
        } else {
            $get_video_query = "SELECT * FROM t_media_fire_link where media_url='$media_link'";
        }
        //echo $get_video_query;
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
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <?php include('header.php');?>
        <div class="container text-center row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-7">
                    <?php
                        while($row = pg_fetch_assoc($result)){
                    ?>
                    <div class="row row-item1">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <a href="<?php echo $row['media_url'] ?>">
                                        <img src="<?php echo $row['media_thumbnail_img']; ?>" class="" alt="Avatar">
                                    </a>
                                    <p style="color: rgb(100, 86, 86);"><strong>Uploded On </strong><?php echo date_format(date_create($row['media_upld_date']), "d F Y"); ?>
                                    </p>
                                </div>
                                <div class="col-sm-5">    
                                    <p>
                                        <strong><?php echo $row['media_title']; ?></strong>
                                        </br>
                                        <a href="#">
                                            <i class="fa fa-arrow-down" style="font-size:100px;color:red"></i>
                                            </br>  
                                        </a>
                                        <a href="<?php echo $row['media_url']; ?>"><button class="btn btn-primary">Click here for download</button></a>
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
                <div class="col-sm-offset-1 col-sm-3 well">
                    <div class="thumbnail">
                        <p><strong>Most Viewed Video:</strong></p>
                        <iframe width="250" height="200"
                            src="https://www.youtube.com/embed/NjcRLyrqWv8?autoplay=1&mute=1">
                        </iframe>
                        <!--<img src="images/thumbnail1.jpeg" alt="Paris" width="400" height="300">-->
                        <p><strong>Uploded</strong>
                        Fri. 27 November 2021</p>
                        <button class="btn btn-primary">Watch</button>
                    </div>      

                    <div class="thumbnail">
                        <p><strong style="color:green;">Recent Videos:</strong></p>

                        <?php
                            $get_video_query = "SELECT * FROM t_vid_link ORDER BY id DESC LIMIT 4";
                            //$result = mysqli_query($db, $get_video_query);
                            $result = pg_query($db, $get_video_query);
                            while($row = pg_fetch_assoc($result)){
                        ?>
                        <!-- <img src="<?php echo $row['vid_img']; ?>" alt="Paris" width="400" height="300"> -->
                        <img src="<?php echo $row['vid_img']; ?>" alt="Paris" width="400" height="300">
                        <p style="color: rgb(100, 86, 86);"><strong>Uploded On  </strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?></p>

                        <?php }
                    
                    ?>
                    </div>             
                </div>
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


                    