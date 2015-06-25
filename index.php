<?php 

//RETRIEVE DATABASE CONNECTION INFORMATION
include('includes/connection.php');

//DECLARING VARIABLES AS EMPTY
$Email = "";
$UserName = "";
$Password = "";

//TEST WHETHER THE VARIABLES HAVE BEEN ASSIGNED DATA [ *** REMOVE @ RUNTIME *** ]
echo "<pre> POST SUPERGLOBAL ";
print_r($_POST);
echo "</pre>";

//CHECK IF LOGIN BUTTON PRESSED CARRY OUT FOLLOWING FUNCTIONS
if (isset($_POST['submit'])) {

//CARRY OUT DATA VALIDATION
//CHECK IF EMAIL FORMAT HAD BEEN ENTERED
//CHECK IF USERNAME HAD BEEN ENTERED & NOT EMPTY
//CHECK IF PASSWORD HAD BEEN ENTERED & NOT EMPTY

//CHECK IF EMAIL & PASSWORD HAVE BEEN ENTERED - B/C OF COMBO CHOICE ONLY 2/3 FIELDS REQUIRED

//CHECK IF USERNAME & PASSWORD HAVE BEEN ENTERED - B/C OF COMBO CHOICE ONLY 2/3 FIELDS REQUIRED

//ASSIGNING POST DATA TO VARIABLES FOR MANIPULATION - SANITISATION BEFORE COMPARING CREDENTIALS TO INFORMATION ON DATABASE[world_pic] , TABLE[public_users]
$Email = $_POST['Email'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

}

?>


<!-- HTML5 index.php START -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="author" href="humans.txt">
  </head>
  <body>
  <section>
    <h1>Simple Login System</h1>
    <p>Please enter your Email address or Username and Password to Login.</p>

    <form action="" method="POST">
      <p>
        <label for="">Email</label>
        <input type="text" name="Email" value="">
      </p>

      <p>
        <label for="">Username</label>
        <input type="text" name="UserName" value="">
      </p>

      <p>
        <label for="">Password</label>
        <input type="password" name="Password" value="">
      </p>

      <p>
        <input type="submit" name="Login" value="Login">
      </p>
    </form>


  </section>
  <script src="js/main.js"></script>
  </body>
</html>
<!-- HTML5 index.php END Updated the index.php file - now had the basic Login Form.-->