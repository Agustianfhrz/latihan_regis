<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form  </title>
  <link rel="stylesheet" href="style.css">
</head>

<style>
  
</style>

<body>
  <?php
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  ?>

  <label>NAMA ANDA  : <?php echo $nama ?></label>
  <br>
  <label>EMAIL ANDA : <?php echo $email ?></label>
  <br>
  <label>NO PHONE   : <?php echo $phone?></label>
  <br>  
  <label>PASSWORD   : <?php echo $password?></label>
</body>
</html>