<?php 
    $page = $_GET['page-no'];
    
    include('connection.php');
    
    if(!$db) {
        echo "Error : Unable to open database\n";
    } else {
        //echo "Opened database successfully\n";
        $get_video_query = "SELECT * FROM t_vid_link ORDER BY id DESC";
        //$result = mysqli_query($db, $get_video_query);
        $result = pg_query($db, $get_video_query);
        //$c = 1;
        // while($row = mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Technical Sujit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/mystyle.css">
        <link rel="icon" href="images/logo1.jpeg" sizes="32x32" />
    </head>
    <body>

                    

                    <?php 
                        include('header.php');
                        while($row = pg_fetch_assoc($result)){
                    ?>

                    <div class="row row-item">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-5">
                                    <a href="<?php echo $row['vid_url'] ?>">
                                        <img src="<?php echo $row['vid_img']; ?>" class="" alt="Avatar">
                                    </a>
                                    <p style="color: rgb(100, 86, 86);"><strong>Uploded :</strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?>
                                        <a href="<?php echo $row['vid_url'] ?>"><strong>Watch Now</strong></a>
                                    </p>
                                </div>
                                <div class="col-sm-5">    
                                    <p>
                                        <a href="<?php echo $row['vid_url'] ?>">
                                            <span class="glyphicon glyphicon-hand-right"> </span>
                                            <u>
                                                <strong> <?php echo $row['vid_title']; ?></strong>
                                            </u>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                        }
                    ?>

                    <div class="row row-item">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-5">
                                    <a href="#">
                                        <img src="images/thumbnail4.jpeg" class="" alt="Avatar">
                                    </a>
                                    <p style="color: rgb(100, 86, 86);"><strong>Uploded :</strong> 10 JAN 2022
                                        <a href="#"><strong>Watch Now</strong></a>
                                    </p>
                                </div>
                                <div class="col-sm-5">    
                                    <p>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-hand-right"> </span>
                                            <u>
                                                <strong> fgrtyhgfgytrfhgfv123456</strong>
                                            </u>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

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
                <div class="col-sm-3 well">
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
                        <img src="images/thumbnail1.jpeg" alt="Paris" width="400" height="300">
                        <p>26 November 2021</p>
                        <button class="btn btn-primary">Info</button>
                        
                        <!-- <iframe width="250" height="200"
                            src="https://www.youtube.com/embed/NjcRLyrqWv8">
                        </iframe> -->
                        <img src="images/thumbnail1.jpeg" alt="Paris" width="400" height="300">
                        
                        <p>02 December 2021</p>
                        <button class="btn btn-primary">Info</button>

                        <img src="images/thumbnail2.jpeg" alt="Paris" width="400" height="300">
                        <p>10 December 2021</p>
                        <button class="btn btn-primary">Info</button>

                        <img src="images/thumbnail3.jpeg" alt="Paris" width="400" height="300">
                        <p>26 November 2021</p>
                        <button class="btn btn-primary">Info</button>
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
