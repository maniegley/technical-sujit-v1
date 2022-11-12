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

                                            <!-- Sujit Steps are started from here. -->
                                            <p>
                                                <b>Step 4:</b> Sabse pahle Capcut App Ko India Me Chalane Ke Liye VPN Se Connected Karna Parega
                                            
                                            </p>
                                            <div class="screenshot">
                                                <img src="../../upload/11-11-2022/20221111_162240.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';" />
                                            </div>
                                                                                      
                                            <p>
                                                <b>Step 5:</b> Capcut App Ko Open Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_170713.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            <p>
                                                <b>Step 6:</b> New Project Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_170810.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 7:</b> Jis Video Ka Sky Remove Karna Chahte Hai Usko Select Karke Add Kijiye ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_171036.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 8:</b> Video Ke Starting Me Ya End Me Koi Bhi Extra Bhag Hoga To Usko Cuting Krke Hata Dijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_171229.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
                                            
                                            <p>
                                                <b>Step 9:</b> Overlay Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_192910.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 10:</b> Sky Me Jis Photo Ya Video Lagana Chahte Hai Usko Select Karke Add Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_171425.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 11:</b> Layer Pe Click Karke Mask Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172007.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 12:</b> Split Pe Click Karke Sky Photo Video Ko Adjust Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172133.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 13:</b> Main Video Pe Click Karke Copy Kar Dijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172311.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
								   
								            <p>
                                                <b>Step 14:</b> Agle Video Pe Click Karke Overlay Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172457.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 15:</b> Layer Pe Click Karke Cutout Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172657.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 16:</b> 3 Option Dekhne Ko Mil Jayega Sabse Pahle Chroma Key Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_172820.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 17:</b> Color Picker Pe Click Karke Colour Ko Pick Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_173108.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
								            
											<p>
                                                <b>Step 18:</b> Intensity Our Shadow Pe Click Karke Sky Ko Ache Se Remove Kar Dijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_173259.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <p>
                                                <b>Step 19:</b> Agar Chrome Key Se Ache Se Remove Nahi Hota Hai To Remove BackGround Pe Click Kijiye Ga Automatic Remove Ho Jayega
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_173611.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 20:</b> Agar Dono Se Nahi Hota Hai To Customized Cutout Pe Click Kijiye Ga
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_173807.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>
											
											<p>
                                                <b>Step 21:</b> Buresh Pe Click Karke Apne Body Ko Colour Kar Dijiye Ga Sky Remove Ho Jayega
                                            </p>

                                            <div>
                                                <img src="../../upload/11-11-2022/20221111_173902.jpg" class="ssH" alt="../../upload/alternate.jpg" onerror="this.src='../../upload/image-not-found.jpg';"/><br>
                                            </div>

                                            <!-- Sujit Steps are ended here. -->
                                            
                                            


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
            </div>
        </div> 
        <?php include('../blog_footer.php');?>
    </body>
</html>


                    