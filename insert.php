<?php
		include("connection.php");
		$title = $_POST["title"];
		$description = $_POST["description"];
		$url = $_POST["url"];
        $paging = $url
		
		//$img_dir = "images/";
		//$basename= basename($_FILES["img"]["name"]);
		//$img_file = $img_dir . basename($_FILES["img"]["name"]);
		//$uploadOk = 1;
		//$imageFileType = strtolower(pathinfo($img_file,PATHINFO_EXTENSION));
		//$check = getimagesize($_FILES["img"]["tmp_name"]);
    	//if($check !== false) {
        //	$uploadOk = 1;
        //}
        //else{
        //	$uploadOk=0;
        //}
 
    // Check if file already exists
		//if (file_exists($img_file)) {
    	//	$uploadOk = 0;
		//}
	// Check file size
		//if ($_FILES["img"]["size"] > 500000) {
   		//	$uploadOk = 0;
		//}
		// Check if $uploadOk is set to 0 by an error
		//if ($uploadOk == 0) {
    	//	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
		//} else {
    	//if (move_uploaded_file($_FILES["img"]["tmp_name"], $img_file)) {
        //	echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    	//} else {
        //	echo "Sorry, there was an error uploading your file.";
    	//}
		//}
		
        $query = "INSERT INTO resource (title,description,url,paging) VALUES ('$title','$description','$url','$paging')";
		$con = mysqli_query($conn,$query);
		if($con){
?>
     <h1 id="reg"><span style="color:red">CONGRATULATIONS!</span></h1>
		
        <h1 id="reg">The resource is added successfully into your registry</h1>
  
<?php	
		}
else
	echo "failed";
?>