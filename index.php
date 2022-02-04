<?php 
    $page = 0;
    
    include('connection.php');
    
    if(!$db) {
        echo "Error : Something went wrong. Unable to make connection!\n";
    } else {
        //echo "Opened database successfully\n";
        $get_video_query = "SELECT * FROM t_vid_link ORDER BY id DESC LIMIT 4";
        //$result = mysqli_query($db, $get_video_query);
        $result = pg_query($db, $get_video_query);
        //$c = 1;
        // while($row = mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Technical Sujit | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="bootstrap-3.3.7\dist\js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/mystyle.css">
        <link rel="icon" href="images/logo1.jpeg" sizes="32x32" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <?php include('header.php'); ?>
        
        <div class="container text-center row-item1" style="margin-top:5px;">  
            
            <div class="row">
                <div class="col-sm-8">
                    <div class="title-wrap">
                        <h2 class="title">Recent Posts</h2>
                    </div>
                    <?php
                        while($row = pg_fetch_assoc($result)){
                    ?>
                    <div class="row row-item1">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-5">
                                    <div>
                                        <a href="<?php echo $row['vid_url'] ?>">
                                            <img src="<?php echo $row['vid_img']; ?>" class="" alt="upload/alternate.jpg" onerror="this.src='upload/image-not-found.jpg';" />
                                        </a>
                                    </div>
                                    
                                    <!-- <p style="color: rgb(100, 86, 86);"><strong>Uploded On </strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?>
                                        <a href="<?php echo $row['vid_url'] ?>"><strong>  Watch Now</strong></a>
                                    </p> -->
                                </div>
                                <div class="col-sm-7"> 
                                      
                                    <div class="post-info">
                                      
                                            <a href="<?php echo $row['vid_url'] ?>">
                                                <!-- <span class="glyphicon glyphicon-hand-right"> </span> -->
                                                <?php echo $row['vid_title']; ?>
                                            </a>
                                      
                                    </div>
                                    <div class="post-info">
                                        <p><strong style="font-weight: 1000;">Uploded On </strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?></p>
                                    </div>
                                    <div class="post-info1">
                                        <p>Sabhi material related to this reels video download karne ke liye uper click kare...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="">                   
                                <ul class="pager">
                                    <?php if($page==0){?>
                                        <li><a href="index.php" style="pointer-events: none; cursor: default;">Previous</a></li>
                                        <?php  } else{ ?>
                                        <li><a href="index.php?page-no=<?php echo $page-1;?>">Previous</a></li><?php } ?>
                                        <li><a href="index.php?page-no=<?php echo $page+1; ?>">Next</a></li>
                                </ul>
                            </div>
                        </div>
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

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/myscripts.js"></script>


</body>
</html>
