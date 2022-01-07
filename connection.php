


<?php
// For Postgres SQL connection
   $host        = "host = ec2-3-237-55-151.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d1a1jjajqe2in";
   $credentials = "user = kvqhfucaajbtaa password=38b32834de960a958c914b1c62b405de6357db95c686c05210ee4cedf02a53be";
   $db = pg_connect("$host $port $dbname $credentials" );
   // $host        = "host = localhost";
   // $port        = "port = 5432";
   // $dbname      = "dbname = api";
   // $credentials = "user = postgres password= 1234";
   // $db = pg_connect("$host $port $dbname $credentials" );

   // For MySQL connection

   // $server_name="localhost";

	// $user_name="root";

	// $password="";

	// $db_name="technicalsujit";

	// $db=new mysqli($server_name,$user_name,$password,$db_name);

?>