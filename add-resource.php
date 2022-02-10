<?php
    $action = $_GET['action'];
    //echo $action;
    $title = $_GET['title'];
    $description = $_GET['description'];
    $url = $_GET['url'];
    //$resourceOption = $_GET['get-resource'];
    if($action == "add-media-link"){
        $resource_query = "INSERT INTO t_media_link (title,description,url,paging) VALUES ('$title', '$description', '$url', 2);";
        
    }

    if($action == "add-video-link"){
        $resource_query = "INSERT INTO t_vid_link (vid_title,vid_description,vid_url,vid_img,vid_uploaded_by) VALUES ('$title', '$description', '$url', '$img','sub_admin');";
    }
    include('connection.php');
    if(!$db) {
        echo "Error : Unable to make connection!\n";
    } else {
        echo "Opened database successfully\n";
        // $sql ="INSERT INTO resources (title,description,url,paging) VALUES ('Manish', 'jhghjghghb', 'httgh://mbj.com', 2);";
        // $ret = pg_query($db, $sql);
        // if(!$ret) {
        //     echo pg_last_error($db);
        // } else {
        //     echo "Records created successfully\n";
        //     echo "httgh://mbj.com";
        // }
        //$prod_select_query = "SELECT id, title, description, url FROM resource ORDER BY id DESC";
        //$result = mysqli_query($db, $resource_query);
        $result = pg_query($db, $resource_query);
        //echo $resource_query;
        if(!$result) {
            echo "Something went wrong! Please try again.";
            } else {
                echo "Records created successfully\n";
            }
        //$c = 1;
    }
   pg_close($db);
?>