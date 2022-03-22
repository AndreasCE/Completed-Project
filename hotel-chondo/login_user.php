<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login Page</title>
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
                <h5 class="text-center mb-4">LOGIN ACCOUNT</h5>
               <?php if (isset($_SESSION['regis'])) {
  echo "<h4>".$_SESSION['regis']."</h4>";
  unset($_SESSION['regis']); } ?>
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" id="username" class="form-control" />
                  <label class="form-label" for="username">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="showpass">
                      <label class="form-check-label" for="showpass">
                        Show Password
                      </label>
                  
                    </div>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block" id="sub">Login</button>
                <a href="register.php" class="btn btn-danger btn-block">Register</a>
                <!-- Back Index -->
                <a href="index.php" class="btn btn-dark btn-block">Back</a>
              </div>
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
    $(document).ready(function() {

      $('#showpass').click(function() {
        if ($(this).is(':checked')) {
          $('#password').attr('type', 'text');
        } else {
          $('#password').attr('type', 'password');
        }
      });


      $('#sub').click(function(e) {
        e.preventDefault;

        let username = $('#username').val();
        let password = $('#password').val();

        $.ajax({
          url: 'user_auth.php',
          method: 'POST',
          data: {
            "username": username,
            "password": password
          },
          success: function(r) {
            if (r == 'failed login') {
              swal.fire({
                icon: 'error',
                title: 'Username Or Password Wrong'
              });
            } else if (r == 'user') {
              window.location.href = 'index.php';
            } else if (r == 'petugas') {
              window.location.href = 'admin_pages/petugas.php';
            } else if (r == 'admin') {
              window.location.href = 'admin_pages/index.php';
            }
          }
        });
      });
    });
  </script>
</body>

</html>