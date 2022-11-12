<!DOCTYPE html>
<html lang="en">
    <?php include('../blog_meta_head.php'); ?>
    <body>
        <?php include('../blog_header.php'); ?>
    
        <div class="container text-center row-item1" style="margin-top:5px;">
            <div class="row">
                <div class="col-sm-8 scrol">
                    <div class="title-wrap">
                        <h2 class="title">Raw Materials</h2>
                    </div>

                    <?php
                        include('../get_specific_blog.php');
                    ?>

                    <div class="row row-item1">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-sm-11">  
                                    <div class="post-info">
                                        <heading class="tdb-title-text"><?php echo $row['vid_title']; ?></heading>
                                    </div>

                                    <div class="post-info">
                                        <p><strong style="font-weight: 1000;">Uploded On </strong><?php echo date_format(date_create($row['vid_post_date']), "d F Y"); ?></p>
                                    </div>

                                    <div class="post-info1">
                                        
                                        <p class="thanks-note"><span class="glyphicon glyphicon-hand-right"> </span>
                                        Hello Dosto meri team TechnicalSujit ke taraf se aap sabhi ko bahut bahut dhanayawad. Aap sayad hamare youtube channel se yaha 
                                        aaye honge ya directly aap hamare website pe visit kar rhe honge. Iske liye aap sabhi ko bahut dhanayawad.
                                        </p></br>
                                        <p>
                                        Isi jos se aap hame support karte rhe taki hum aapke liye aise hi aur content banate rhe.
                                        </p>
                                        <a href="<?php echo $row['vid_url'] ?>">
                                            <img src="../../<?php echo $row['vid_img']; ?>" class="" alt="../../upload/image-not-found.jpg" onerror="this.src='../../upload/image-not-found.jpg';" />
                                        </a>
                                        </br></br></br></br>
                                        <h3 class="r-nested-title">How to Download Materials !!!</h3>
                                        

                                        <p>
                                        <b><?php echo $row['vid_title']; ?></b> is reel ko banana bahut hi aasan hai. Bas aapko niche diye gaye sare steps throughly follow karne honge.
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
                                                <a href="<?php echo $row['vid_media_fire_link']; ?>" class="r-link">Download</a>
                                            </p>
                                            <a href="<?php echo $row['vid_media_fire_link']; ?>">
                                                <img src="../../upload/download.png" class="" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';" style="width:50%; height:20%"/>
                                            </a>
                                            <p>
                                                <b>Step 3:</b> Materials successfully download hone ke bad aapko hamare youtube video ko dekhna hoga. Aap niche diye gye link se us video ko dekh sakte hai.
                                                <a href="<?php echo $row['vid_url'] ?>" class="r-link">Watch Now</a>
                                            </p>

                                            <p>
                                                <b>Step 4:</b> Sabse pahle Capcut App Ko India Me Chalane Ke Liye VPN Se Connected Karna Parega
                                            
                                            </p><br>
                                            <div class="screenshot">
                                                <img src="../../upload/07-11-2022/20221107_205502.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';" />
                                            </div>
                                                                                      
                                            <p>
                                                <b>Step 5:</b> Capcut App Ko Open Krke New Project Pe Click kijiye ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_205632.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            <p>
                                                <b>Step 6:</b> Jis Video ko Edit Krna Chahte Hai Usko Select Krke Add Pe Click Kijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_205739.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 7:</b> Video Me Koi Sa Bhi Extra Bhag Hoga To Cuting Krke Hata Dijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_205842.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 8:</b> Add Audio Pe Click Krke Audio (Sound) Ko Add Kijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_205933.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            <p>
                                                <b>Step 9:</b> Video Ko Split Krke Sound Ke Sath Match Kar Dijiye Ga Our Slow+Fast Motion De Dijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_210139.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 10:</b> Animation Pe Click Krke In Animation Me Koi Sa Bhi Animation Apply Kr Dijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_210301.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 11:</b> Blur Effect Lagane Ke Liye Effect Pe Click Kijiye Ga Basic Me Jakr Halo Blur Effect Apply Kr Dijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_210411.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 12:</b> Effect Ka Lyear Jitna Bara Rakhna Chahte Hai Rakh Sakte Hai
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_210439.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 13:</b> Video Complete Ban Jane Ke Baad Quality Dekh Kr Save Kr Dijiye Ga
                                            </p><br>

                                            <div>
                                                <img src="../../upload/07-11-2022/20221107_210506.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            


                                            <h3 class="r-nested-title">Conclusion :</h3>

                                            <p>
                                                I hope aap ye reels video bna paye honge. Agar aapko hamara ye kam achha lga ye aap aur treding reels banana chahte hai to hamare website ke home page HOME aur youtube cannel pe checkout kare. Aur hume support karne ke liye hamare youtube channel ko subscribe jarur kare. 
                                            </p><br>

                                        </div>

                                        <!-- <h2>Thanks For all your support!!!</h2> -->
                                    </div>  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>  

                <!-- Right Pannel Start here! -->
                <?php include('../blog_right_pannel.php');?>
                <!-- Right Pannel ends here! -->
                <!-- Right Pannel ends here! -->
            </div>
        </div> 
        <?php include('../blog_footer.php');?>
    </body>
</html>


                    