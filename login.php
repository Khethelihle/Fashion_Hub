<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
    <div class ="header">
      <h2>Login</h2>
    </div>

<form method= "post" action="login.php">
  <!-- Display errors -->
  <?php include('errors.php'); ?>

  <div class ="input-group">
    <label>Fashion Hub ID</label>
    <input type="text" name="username">
  </div>


  <div class ="input-group">
    <label>Password</label>
    <input type="password" name="password">
  </div>

<table cellpadding="10">
  <tr>
    <td>
      <div class ="input-group">
        <button type="submit" name="register" class= "btn" id = "Create Fashion Hub Id"><a href="register.php"><link color :
           #FFFFFF>Create Fashion Hub ID</link></a></button>
      </div>
    </td>
    <td>
    <div class ="input-group">
      <button type="submit" name="login" class= "btn" id = "login_button">Login</button>
    </div>
    </td>
  </tr>
</table>

  <p>
     <a href="login.php">Forget ID or Password?</a>
     <br>
     <font size = "1.5">
      Copyright &#169; 2017 Big5labs | All rights reserved
     </font>
     <!-- <p><font size = "1.5">Copyright &#169;</font></p><p><font size = "1.5"> | Developed by Big5labs | All rights reserved</font></p> -->
  </p>
</form>

<script src="Javascript/functions.js"></script>

</body>
</html>
