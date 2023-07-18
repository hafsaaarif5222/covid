<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registeration Form</title>
    <link rel="stylesheet" href="patientReg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<!-- patient registeration form -->

  <div class="container">
    <div class="title"><span>Hospitals</span> can Register Here!</div>
    <div class="content">
      <form action="#" method = "POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name of the Hopsital*</span>
            <input type="text" name="HospitalName" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Hospital Email*</span>
            <input type="text" name="Email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Info</span>
            <input type="text" name="Phone number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="address" name="Address" placeholder="Enter your Hospital Address" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          
        </div>
       


        
        <div class="button">
          <input type="submit" name="register" value="Register">
          <br>
        <span>Already Registered? <a href="HospitalsLogin.php">Login!</a> </span>
  <br>
       
        </div>
      </form>
    </div>
  </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>