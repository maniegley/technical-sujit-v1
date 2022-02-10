<?php
    $title = "";
    $description = "";
    $target_dir = "";
    $url = "";
    $errors = array(); 
    $success = array(); 
    if (isset($_POST['add-media-link'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $uploadOk = 1;
        //Checking required field to be empty
        if (empty($title)) {
            array_push($errors, "Title is required");
        }

        if (empty($description)) {
            array_push($errors, "Description is required");
        }

        if (empty($url)) {
            array_push($errors, "URL is required");
        }

        $sub_admin = "admin";
        if (count($errors) == 0) {
            $resource_query = "INSERT INTO t_media_fire_link (media_title,media_description,media_url,media_uploaded_by) VALUES ('$title', '$description', '$url', '$sub_admin');";
            //echo $resource_query;
            include('C:/xampp/htdocs/technical-sujit-v1/connection.php');
            if(!$db) {
                array_push($errors, "Error : Unable to make connection!\n");
            } else {
                //echo "Opened database successfully\n";
                $result = pg_query($db, $resource_query);
                if(!$result) {
                    array_push($errors, "Something went wrong! Please try again.");
                } else {
                    array_push($success,"Record added successfully!");
                }
                    //header('location: successfull-trasaction.php');
            }   
        }
    }
?>