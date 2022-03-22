<?php 
include "regist_auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Registration</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <div class="bg-white rounded shadow-5-strong p-5">
                <form method="POST" id="regist" action="regist_auth.php">
                <h5 class="text-center mb-4">REGISTRATION</h5>
                <?php 
if (isset($_SESSION['warn'])) {
  echo "<h4>".$_SESSION['warn']."</h4>";
  unset($_SESSION['warn']);
}
?>
                <!-- Username input -->
                <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" required/>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <div class="form-outline mb-3">
            <input type="text" name="username" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter Username" required />
            <label class="form-label" for="form3Example4">Username</label>
          </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
                 
                <!-- Submit button -->
                <input type="submit"  class="btn btn-primary btn-block" name="register" value="Register" id="sub">
                <!-- Back Index -->
                <a href="login_user.php" class="btn btn-dark btn-block">Back</a>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="#">Andreas</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Jquery -->
  <script src="js/vendor/jquery-3.6.0.js"></script>
  <!-- Sweet2Aler -->
  <script src="js/sweetalert2.all.min.js"></script>
  <script>

  </script>
  <!-- <script>
$(document).ready(function() {
    $("#sub").click(function() {
 
        // using serialize function of jQuery to get all values of form
        var serializedData = $("#regist").serialize();
 
        // Variable to hold request
        var request;
        // Fire off the request to process_registration_form.php
        request = $.ajax({
            url: "regist_auth.php",
            type: "post",
            data: serializedData
        });
 
        // Callback handler that will be called on success
        request.done(function(jqXHR, textStatus, response) {
            // you will get response from your php page (what you echo or print)
             // show successfully for submit message
            $("#result").html(response);
        });
 
        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            // show error
           console.log(data);
        });
 
        return false;
 
    });
});
</script> -->
</body>

</html>