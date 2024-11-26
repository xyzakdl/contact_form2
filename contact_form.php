<?php 

    $fname = $_POST["first-name"];
    $lname = $_POST["last-name"];

    if (empty($fname) || empty($lname)) {
        header("Location: index.html");
        exit();
    }

    $fullname = $fname . " " . $lname;
    $age = $_POST["age"];
    $contactnum = $_POST["contact"];
    $address = $_POST["address"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Contact Form</title>
</head>
<body> 
  <div class="form-container">
        <h1>Welcome, <?php echo $fullname; ?>!</h1>
        <p><i>We are pleased to have you here. <br>Below is your contact form:</i></p>
      <div class="form-group">
        <label for="first-name"><b>First Name:</b></label>
        <input type="text" id="last-name" name="last-name" minlength="1" maxlength="20" value="<?php echo"$fname"; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="last-name"><b>Last Name: </b></label>
        <input type="text" id="last-name" name="last-name" minlength="1" maxlength="20" value="<?php echo"$lname"; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="age"><b>Age:</b></label>
        <input type="text" id="age" name="age" minlength="1" maxlength="2" value="<?php echo"$age"; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="contact"><b>Contact:</b></label>
        <input type="text" id="contact" name="contact" minlength="10" maxlength="10"  value="<?php echo"$contactnum"; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="address"> <b> Address:</b></label>
        <input type="text" id="address" name="address" minlength="5" maxlength="30" value="<?php echo"$address"; ?>"  readonly>
      </div>
      <div class="submit-button">
        <button type="submit" ><a href="index.html" class="link">Back</a></button>
      </div>
  </div>
</body>
</html>
