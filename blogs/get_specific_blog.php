<?php
    include('../../connection.php');
    $f = $_GET['blog_id'];
    $get_video_query = "SELECT * FROM t_vid_link where id='$f' limit 1";
    //$result = mysqli_query($db, $get_video_query);
    $result = pg_query($db, $get_video_query);
    $row = pg_fetch_assoc($result);
    //$db.close();
    //echo $get_video_query;
?>