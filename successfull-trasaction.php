<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<h2>Please wait</h2>

<div class="loader"></div>

</body>
</html>
<?php 
// sleep(2);
// echo "Record added successfully";
// sleep(2);
// header('location: admin-dashboard.php');
?> -->

<!DOCTYPE html>
<html>
<body>

<?php
echo date('h:i:s') . "<br>";

//sleep for 3 seconds
sleep(3);

//start again
echo date('h:i:s');
?>

</body>
</html>