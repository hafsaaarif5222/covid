<?php
include 'connectivity.php';
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Testing System</title>
    <link rel="stylesheet" href="usertype.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="header ">
<!-- basic nav -->
<nav class="navbar bg-body-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="
      https://o.remove.bg/downloads/01cecea7-3bdc-4c4e-a133-a6d84df9f306/1000_F_334258177_77nIn8WLzZ6SUuVGqVb2t20oQpOmSrpP-removebg-preview.png" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>


            <div class="container">
             <div class="row">
                 <div class="col-md-6">
                 
                     <h1>Welcome to <span>Covid-19 testing And Vaccination Services</span></h1>
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis eum ipsam enim dicta sunt officia distinctio in, asperiores tenetur doloremque nisi nam dolore odit, at laborum expedita incidunt repudiandae deserunt. Odit qui eos ab officia quibusdam! Modi, tempore voluptates nesciunt temporibus dolore vitae repudiandae quae unde similique fugiat saepe aspernatur!</p>
                 </div>
                 <div class="col-md-6">
               
                    <img src="https://drsue.ca/wp-content/uploads/2021/01/COVID-19-vaccine-diabetes-vaccination-coronavirus-COVID-19-897x640.jpg" width="500" alt="000">
                </div>
             </div>
            </div>
         </div>

         <!-- role type -->
         <div class="container">
            <div class="role-type">
                <h4>Select User Type</h4>
                <form action="userTypeAction.php" method= "POST">

                <div class="form-check">
  <input class="form-check-input" type="radio" name="hospitals" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Hospitals Authority
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="admin" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="patients" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Patients
  </label>
</div>
</div>
        </div>
               




                               <button class="ms-auto" type="submit" name="submit">Continue</button>
                </form>

            </div>
         </div>



    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>