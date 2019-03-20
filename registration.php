<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div>
    <?php 
      if(isset($_POST['create'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['firstname'];

        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) 
        VALUES(?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
        if ($result) {
          echo 'Successfully saved.';
        } else {
          echo 'There were errors while saving data.';
        }

        //echo $firstname . " " . $lastname . " " . $email . " " .  $phonenumber . " " . $password;
      }
    ?>

  </div>
  <div>
    <form action="registration.php" method="POST">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-6 col-lg-8">
            <h1>Registration</h1>
            <p>Fill out the form.</p>
            <hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" type="text" name="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input class="form-control" type="text" name="lastname" required>

            <label for="email"><b>Email Address</b></label>
            <input class="form-control" type="email" name="email" required>

            <label for="phonenumber"><b>Phone No.</b></label>
            <input class="form-control" type="text" name="phonenumber" required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" required>
            <hr class="mb-3">
            <input class="btn btn-primary" type="submit" name="create" value="signup">
          </div>   <!-- col-sm-3  -->
        </div>    <!-- row -->
      </div>     <!-- container -->
    </form>
  </div>
</body>
</html>