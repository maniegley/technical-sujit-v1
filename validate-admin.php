<?php
  
  
// initializing variables
  $username = "";
  $email    = "";
  $errors = array(); 
  $success = array(); 
  // connect to the database
  //$db = mysqli_connect('localhost', 'root', '', 'barber');

  // REGISTER USER
  if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (empty($username)) {
        array_push($errors, "Username/Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = ($password);
        //$query = "SELECT * FROM register WHERE email='$username' AND pwd='$password'";
        //$results = mysqli_query($db, $query);
        //$row = $results->fetch_assoc();
        //if (mysqli_num_rows($results) == 1) {
          session_start();
          $_SESSION['username'] = $username;
          //$_SESSION['name'] = $row['name'];
          //$_SESSION['success'] = "You are now logged in";
        if($password=="12345"){  
          header('location: admin-dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
?>