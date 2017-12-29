<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body >

    <div class ="header">
      <h2>Register</h2>
    </div>
<form method= "post" action="register.php">
  <!-- Display errors -->
  <?php include('errors.php'); ?>

  <div class ="input-group">
    <label>Name</label>
    <input type="text" name="name" value = "<?php echo $name; ?>">
  </div>

  <div class ="input-group">
    <label>Surname</label>
    <input type="text" name="surname" value = "<?php echo $surname; ?>">
  </div>

  <div class ="input-group">
    <label>Create Fashion Hub ID</label>
    <input type="text" name="username" value = "<?php echo $username; ?>">
  </div>

  <div class ="input-group">
    <label>Email</label>
    <input type="text" name="email" value = "<?php echo $email; ?>">
  </div>

  <div class ="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div>

  <div class ="input-group">
    <label>Confirm Password</label>
    <input type="password" name="password_2">
  </div>

  <div class ="input-group">
    <label>Birthday</label>
    <input type="date" name="DOB"  value = "<?php echo $DOB; ?>">
  </div>

  <div class ="input-group">
    <label>Mobile Phone</label>
    <input type="tel" name="tel"  value = "<?php echo $tel; ?>">
  </div>

<label class="container">
    <table >
      <tr>
        <td>
    <input type="checkbox" name="terms" value="terms" id = "checkbox"  value = "<?php echo $terms; ?>">
    <input type="hidden" name="0" value="terms" id = "checkbox"  value = "<?php echo $terms; ?>">
    <span class="checkmark"></span>
        </td>
        <td>
    I agree to Fashion Hub terms and <br> conditions
        </td>
      </tr>
    </table>
</label>

<table>
  <tr>
    <td>
  <div class ="input-group">
    <button type="submit" name="register" class= "btn" onclick="myFunc()">Register</button>
  </div>
</td>
<td>
  <p id = "show"></p>
</td>
</tr>
</table>
  <p>
    Already a member? <a href="login.php">Sign In</a>
  </p>
</form>
<script src="Javascript/functions.js"></script>
</body>
</html>
