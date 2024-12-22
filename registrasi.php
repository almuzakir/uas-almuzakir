<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <link rel="stylesheet" href="css/style.css" />
  <a href='login.php'>Back to LOGIN</a>
</head>
<style>
  #card-content {
    padding: 12px 44px;
  }

  #card-title {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
  }

  .underline-title {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 2px;
    margin: -1.1rem auto 0 auto;
    width: 89px;
  }

  input[type="submit"] {
    padding: 5px;
    width: 180px;
    border: 1px solid #ddd;
  }

  #card {
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 410px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
  }

  body {
    background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
    background-repeat: no-repeat;
  }

  a {
    text-decoration: none;
  }

  label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
  }

  .form {
    align-items: left;
    display: flex;
    flex-direction: column;
  }

  .form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
  }

  .form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
  }
</style>

<body>
  <?php
  require('config.php');
  // If form submitted, insert values into the database.
  if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($mysqli, $username);
    $query = mysqli_query($mysqli, "SELECT username FROM User WHERE username='" . $username . "'");
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($mysqli, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($mysqli, $password);
    $trn_date = date("Y-m-d H:i:s");

    
    $queryy = "INSERT into `user` (username, password, email, trn_date)
VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
  
      $username = $_POST['username'];
      $query = mysqli_query($mysqli, "SELECT id FROM user WHERE username='$username'");
      if (mysqli_num_rows($query) > 0) {

        echo "Username already exists";
      } else {
        // do something
        if (!mysqli_query($mysqli, $queryy)) {
          die('Error: ' . mysqli_error($mysqli));
        }
      }
    
  } else {
  ?>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h1>Registration</h1>
          <div class="underline-title"></div>
        </div>
      </div>
      <form name="registration" action="" method="post">
        <div id="card-content">
          <label for="username" style="padding-top:13px" width: 329px;>Username</label>
          <input id="username" class="form-content" type="username" name="username" autocomplete="on" required />
          <div class="form-border"></div>
          <label>E-mail</label>
          <input type="email" id="myInput" name="email" id="email" class="form-content" type="email" name="email" required />
          <div class="form-border"></div>
          <label>Password</label>
          <input type="password" id="myInput" name="password" id="user-password" class="form-content" type="password" name="password" required />
          <input type="submit" name="submit" value="Register" />
          <div class="form-border"></div><a href="#"></a>
      </form>
    </div>
  <?php } ?>
</body>
</html>