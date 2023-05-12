<?php
// sign in
$server_name="localhost";
$username="root";
$password="";
$database_name="signup";

function test_input($data) {
 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// sign up
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="signup";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {die("Connection Failed:" . mysqli_connect_error());}

    if(isset($_POST['save'])){	
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $age= $_POST['age'];


        $sql_query = "INSERT INTO `registrations` (full_name,email,pass,age)
        VALUES ('$full_name','$email','$password','$age')";

        if (mysqli_query($conn, $sql_query)) {

            echo"
            <script>alert('You have registered successfully :) '); </script>";
        } 
        else{
            echo "ERROR " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
}

  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="icon" type="image/x-icon" href="Images/favicon-img.jpg">
    <link rel="stylesheet" href="sign-in-up-form.css">
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form autocomplete="off" class="sign-in-form">
              <div class="logo">
                <a href="beyond-1-life.php">
                  <img src="Images/favicon-img.jpg">
                </a>
                <h4>beyond-1-life</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="email"
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="password"
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form name="RegForm" onsubmit="return register()" action="" method="post" class="sign-up-form">
              <div class="logo">
                <a href="beyond-1-life.php">
                  <img src="Images/favicon-img.jpg">
                </a>
                <h4>beyond-1-life</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="full_name"
                  />
                  <label>Enter your full name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="email"
                  />
                  <label>Email</label>
                </div>

                <!-- <div class="input-wrap">
                  <input
                    type="date"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Date of birth</label>
                </div> -->

                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="pass"
                  />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="number"
                    min="18"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="age"
                  />
                  <label>Age</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" name="save" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="Images/relax.png" class="image img-1 show" alt="" />
              <img src="Images/medical.png" class="image img-2" alt="" />
              <img src="Images/donation.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <!-- <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2> -->
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="sign-in-up-form.js"></script>
  </body>
</html>