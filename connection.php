


<?php
   $host        = "host = ec2-3-237-55-151.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d1a1jjajqe2in";
   $credentials = "user = kvqhfucaajbtaa password=38b32834de960a958c914b1c62b405de6357db95c686c05210ee4cedf02a53be";

   $db = pg_connect("$host $port $dbname $credentials" );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   $sql ="INSERT INTO resources (title,description,url,paging) VALUES ('Manish', 'jhghjghghb', 'httgh://mbj.com', 2);";

   $ret = pg_query($db, $sql);
   // if(!$ret) {
   //    echo pg_last_error($db);
   // } else {
   //    echo "Records created successfully\n";
   //    echo "httgh://mbj.com"
   // }
   // pg_close($db);
?>