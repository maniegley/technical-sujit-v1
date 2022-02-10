<?php
    // $title = $_GET['title'];
    // $title = $_GET['description'];
    $resourceOption = $_GET['get-resource'];
    if($resourceOption == "1"){
        $resource_query = "SELECT * FROM t_media_link ORDER BY id DESC";
    }

    if($resourceOption == "2"){
        $resource_query = "SELECT * FROM t_vid_link ORDER BY id DESC";
    }
    //$resource_query = "SELECT * FROM t_vid_link ORDER BY id DESC";
    include('connection.php');
    if(!$db) {
        echo "Error : Unable to open database\n";
    } else {
        //echo "Opened database successfully\n";
        
        $result = pg_query($db, $resource_query);
        if(!$result) {
            echo pg_last_error($db);
        } else {
            //echo "Records created successfully\n";
            //     echo "httgh://mbj.com";
            $c = 1;
            //echo $row['vid_title'];
            while($row = pg_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $c . "</td>";
                echo "<td>" . $row['vid_title'] . "</td>";
                echo "<td>" . $row['vid_description'] . "</td>";
                echo '<td style="overflow-x:auto;">' . $row['vid_url'] . "</td>";
                echo '<td style="background-color:yellow;">Edit</td>';
                echo '<td style="background-color:red;">Delete</td>';
                echo "</tr>";
                $c++;
            }
        }
        
    }
    pg_close($db);
?>