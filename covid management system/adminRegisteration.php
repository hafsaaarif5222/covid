<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registeration</title> 
    <link rel="stylesheet" href="adminReg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   </head>
<body>
  <div class="wrapper">
    <h2>Admin Registeration Form</h2>
    <form action="#" method= "POST">
      <div class="input-box">
        <input type="text" name= "AdminName" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text"  name= "AdminEmail"   placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password"  name= "AdminPassword"  placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password"  name= "C_password"  placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="register" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="loginAdmin.php">Login now</a></h3>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script
</body>
</html>