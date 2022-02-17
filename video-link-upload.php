<?php
    $title = "";
    $description = "";
    $target_dir = "";
    $url = "";
    $media_url = "";
    $img_url = "";
    $errors = array(); 
    $success = array(); 
    // connect to the database
    //$db = mysqli_connect('localhost', 'root', '', 'barber');
    // video uploading
    if (isset($_POST['add-video-link'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $media_url = $_POST['media-url'];
        $img_url = $_POST['img-url'];
        $custom_media_url = str_replace("https://www.mediafire.com/","https://technical-sujit-v1.herokuapp.com/resources.php?get-resource=", $media_url);
        $custom_img_url = str_replace("https://drive.google.com/file/d/", "https://drive.google.com/uc?export=view&id=", $img_url);
        $custom_img_url = str_replace("/view?usp=sharing", "", $custom_img_url);
        $uploadOk = 1;
        //Checking required field to be empty
        if (empty($title)) {
            array_push($errors, "Title is required.");
        }

        if (empty($description)) {
            array_push($errors, "Description is required");
        }

        if (empty($url)) {
            array_push($errors, "URL is required");
        }

        if (empty($media_url)) {
            array_push($errors, "Media Fire URL is required");
        }

        if (empty($img_url)) {
            array_push($errors, "Image URL is required");
        }

        // if (empty(basename($_FILES["fileToUpload"]["name"]))) {
        //     array_push($errors, "Thumbnail image is required. ");
        //     $uploadOk = 0;
        // }

        // $target_dir = "images/";
        // //echo gettype(basename( $_FILES["fileToUpload"]["name"]));
        // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        // if(isset($_POST["submit"])) {
        //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        //     if($check !== false) {
        //         //echo "File is an image - " . $check["mime"] . ".";
        //         $uploadOk = 1;
        //     } else {
        //         array_push($errors, "File is not an image.");
        //         $uploadOk = 0;
        //     }
        // }

        // if($uploadOk==1){
        //     // Check file size
        //     if ($_FILES["fileToUpload"]["size"] > 500000) {
        //         array_push($errors,"Sorry, your file is too large.");
        //         $uploadOk = 0;
        //     }
        // }

        // if($uploadOk==1){
        //     // Allow certain file formats
        //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //     && $imageFileType != "gif" ) {
        //         array_push($errors,"Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        //         $uploadOk = 0;
        //     }
        // }

        // if($uploadOk==1){
        //     // Check if file already exists
        //     if (file_exists($target_file)) {
        //         array_push($errors,"Sorry, file already exists.");
        //         $uploadOk = 0;
        //     }
        // }
        //$img = $target_file;
        $sub_admin = "admin";
        if (count($errors) == 0) {
            $video = "INSERT INTO t_vid_link (vid_title,vid_description,vid_url,vid_img,vid_uploaded_by,vid_media_fire_link) VALUES ('$title', '$description', '$url', '$custom_img_url','$sub_admin','$custom_media_url');";
            $resource_query = "INSERT INTO t_media_fire_link (media_title,media_description,media_url,media_uploaded_by,media_thumbnail_img) VALUES ('$title', '$description', '$media_url', '$sub_admin', '$custom_img_url');";
            //echo $video;
            //echo $resource_query;
            //echo $resource_query;
            include('connection.php');
            if(!$db) {
                array_push($errors, "Error : Unable to make connection!\n");
            } else {
                //echo "Opened database successfully\n";
                $result = pg_query($db, $video);
                $resource_result = pg_query($db, $resource_query);
                if(!$result && !$resource_result) {
                    array_push($errors, "Something went wrong! Please try again.");
                } else {
                    if($uploadOk==1){
                        array_push($success, "Video uploaded successfully.");
                        // Check if $uploadOk is set to 0 by an error
                        // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //     //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        //     $img = $target_file;
                        //     array_push($success, "Video uploaded successfully.");
                        // } 
                        }else {
                            $delete_query = "DELETE FROM t_vid_link WHERE vid_url='$url';";
                            $delete_query1 = "DELETE FROM t_media_fire_link WHERE media_url='$media_url';";
                            $result = pg_query($db, $delete_query);
                            $result1 = pg_query($db, $delete_query1);
                            array_push($errors,"Sorry, there was an error uploading your file.");
                        }
                    //}
                    


                    //header('location: successfull-trasaction.php');
                }
            }
            
        //echo $resource_query;
        
        }
        else{
            echo "Something went wrong. Please try again.";
        }
    }
?>