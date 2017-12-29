<?php
    session_start();
    $name = "";
    $surname = "";
    $username = "";
    $email ="";
    $DOB = "";
    $tel = "";
    $terms = "false";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost:3306','root','', 'fashion_hub');

    //On button click
    if(isset($_POST['register']))
    {
            $name = mysqli_real_escape_string($db, $_POST['name']);
             $surname= mysqli_real_escape_string($db, $_POST['surname']);
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
            $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
            $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
            $tel = mysqli_real_escape_string($db, $_POST['tel']);
            $terms = mysqli_real_escape_string($db, $_POST['terms']);


      //The form must be filled properly
        if(empty($name))
        {
        array_push($errors, "Name is required");
        }
         if (empty($surname))
          {
           array_push($errors, "surname is required");
         }
        if(empty($username))
        {
          array_push($errors, "ID is required");
        }
        if(empty($email))
        {
          array_push($errors, "Email is required");
        }
        if(empty($password_1))
        {
          array_push($errors, "Password is required");
        }
        if($password_1 != $password_2)
        {
          array_push($errors, "The two Passwords do not match");
        }
        if (empty($DOB)) {
          array_push($errors, "Birth Date is required");
        }
        if (empty($tel)) {
          array_push($errors, "Mobile phone is required");
        }
        if(empty($terms))
        {
          array_push($errors, "Accept Terms and conditions");
        }

        // No error found then save everything to the database...........Ziyakhipha mfwethu
        if(count($errors) == 0)
        {
          $password = md5($password_1); // Yeah we are talking about encryption...md5 is for encryption...But I can hack it easly.
          $check_email = mysqli_query($db, "SELECT * From users WHERE username = '$username'");
          if(mysqli_num_rows($check_email) > 0)
          {
            array_push($errors, "This ID already exist");
          }
          else
          {

        $sql = "INSERT INTO users (name, surname ,username, email, password, DOB, mobile )
                    VALUES ('$name', '$surname', '$username', '$email', '$password', $DOB, $tel)";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php'); ///////Redirecting to the home page
      }
        }
      }

      ///Logging a user in now
      if(isset($_POST['login'])) {

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

  //The form must be filled properly
    if(empty($username))
    {
      array_push($errors, "Username is required");
    }
    if(empty($password))
    {
      array_push($errors, "Password is required");
    }
    if(count($errors) == 0){
      $password = md5($password); // This is our encryption
      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($db, $query);
      if(mysqli_num_rows($result) == 1){
        // Log user in
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php'); ///////Redirecting to the home page
      }
      else {
        array_push($errors, "Wrong username/password combination");
        // header('location: login.php');
      }
    }
  }

      /////////Logging out
      if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
      }
 ?>
