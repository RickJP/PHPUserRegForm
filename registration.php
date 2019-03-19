<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <div>
    <?php 
      if(isset($_POST['create'])) {
        echo 'user submitted';
      }
    ?>
  </div>
  <div>
    <form action="registration.php" method="POST">
      <div class="container">
        <h1>Registration</h1>
        <p>Fill out the form.</p>
        <label for="firstname"><b>First Name</b></label>
        <input type="text" name="firstname" required>

        <label for="lastname"><b>Last Name</b></label>
        <input type="text" name="lastname" required>

        <label for="email"><b>Email Address</b></label>
        <input type="email" name="email" required>

        <label for="phonenumber"><b>Phone No.</b></label>
        <input type="text" name="phonenumber" required>

        <label for="password"><b>Password</b></label>
        <input type="password" name="password" required>

        <input type="submit" name="create" value="signup">
      </div>
    </form>
  </div>
</body>
</html>