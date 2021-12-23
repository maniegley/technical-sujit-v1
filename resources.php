<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Technical Sujit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/mystyle.css">
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
  
                           
                  <?php
                            #include("connection.php");
                            #$prod_select_query = "SELECT * FROM resource";
                            #$result = mysqli_query($conn, $prod_select_query);
                            #const $rowData = '{"title":"John", "description":31, "url":"New York"}';
                            $title = array(
                                'Coming Soon 2022', 'Coming Soon New Year 2022'
                            );

                            $description = array(
                                '', ''
                            );

                            $url = array(
                                'https://www.mediafire.com/file/7ffsehiatvzq0ad/Coming_Soon_2022___2022_Coming_Soon_Video___Happy_New_Year_2022___New_Trending_Lyrics_2022_Status(360p).mp4/file', 'https://www.mediafire.com/file/4qzmxcx1t7k5prk/Coming_Soon_New_Year_2022___Happy_New_Year_Coming_Soon_Video___2022_Happy_New_Year___Special_Status(360p).mp4/file'
                            );


                            #const rowData = JSON.parse(myJSON);
                            $c = 0;
                            while($c < count($title)){
                        ?>
                    
                    <div class="row">
                        <!--<div class="col-sm-7">
                            <div class="well">
                                <img src="images/thumbnail1.jpeg" class="" height="300" width="300" alt="Avatar">
                            </div>
                        </div>-->
                        <div class="col-sm-9">
                            <div class="well">
                                <p><strong><?php echo $title[$c]; ?></strong>
                                    </br><?php echo $description[$c];  ?>
                                </p>
                                
                                <a href="<?php echo $url[$c]  ?>"><button class="btn btn-primary">Click here for download</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $c = $c +1;
                        }
                    ?>
                    

                    </div>
                


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


                    