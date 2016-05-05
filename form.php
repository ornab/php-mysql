<?php
// define variables and set to empty values
 $nameErr = $emailErr = $passErr =  $genderErr = $fileErr = "";
 $name = $email = $pass = $gender = $file = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = " Please Enter Password";
  }  
  

  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = ($_POST["gender"]);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>PHP Form</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
    <label for="exampleInputName2">First Name</label>
    <input type="text" class="form-control" name="name" placeholder="First Name">
  </div>  
        
        <div class="form-group">
    <label for="exampleInputName2">Last Name</label>
    <input type="text" class="form-control" name="name" placeholder="Last Name">
  </div>
        
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password">
      </div>
    <b>Text Area:</b> <br>
     <textarea class="form-control" rows="3" placeholder="Comment Here"></textarea> <br>
     
      <b>Gender:</b> <br>       
    <div class="radio">
         
    <label>
    <input type="radio" name="gender" id="optionsRadios1" value="option1" checked>
   Male
  </label>
</div>

        
<div class="radio">
  <label>
    <input type="radio" name="gender" id="optionsRadios2" value="option2">
    Female
  </label>
</div>
    
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" name="file">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
   
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>