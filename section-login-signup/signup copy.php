<?php 
session_start();
$error_message = "";
if (isset($_GET['error'])) {
    if ($_GET['error'] == "user_taken") {
        $error_message = "Username or Email has been taken";
    }else if($_GET['error'] == "invalid_information"){
        $error_message = "Invalid Information";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
	<!-- Demo CSS -->
	<link rel="stylesheet" href="../css/modal-syle.css">
  
  </head>
  <body>
    <header class="intro">
 
    </header>
     
    <main>
     <article>  
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <a href="caskets.php" onclick="history.go(-1)">&times;</a>

            </button>
          </div>
          <div class="modal-body">
            <div class="form-title text-center">
              <h1 style="color:white">Sign up</h1>
              <h5 style="color:white">Perpetual Funeral Services</h5>
            </div>
            <div class="d-flex flex-column text-center">
              <form method="post" action="signin-function.php">

              <?php if (!empty($error_message)): ?>
                  <div class="alert alert-danger" role="alert" style="padding: 5px 5px; margin-top:10px;">
                      <?php echo $error_message; ?>
                  </div>
                <?php endif; ?>
                <div class="form-name" style="display:flex;">
                  <div class="form-group" style="width: 45%;">
                      <a style="color:white; margin-right: 500px;">Firsname</a>
                      <input type="text" class="form-control" id="email1" name="fname" placeholder="Juan">
                  </div>

                  <div class="form-group" style="width: 44%;
                  position: relative;
                  
                  left: 35px;">
                      <a style="color:white; margin-right: 500px;">Lastname</a>
                      <input type="text" class="form-control" id="email1" name="lname" placeholder="Dela Cruz">
                  </div>
                </div>
                <div class="form-group">
                  <a style="color:white; margin-right: 500px;">Email</a>
                  <input type="email" class="form-control" id="email1" name="email" placeholder="perpetualfuneralservices@gmail.com">
                </div>
                <div class="form-group">
                  <a style="color:white; margin-right: 500px;">Username</a>
                  <input type="text" class="form-control" id="email1" name="username" placeholder="perpetual123">
                </div>
                <div class="form-group">
                  <a style="color:white; margin-right: 500px;">Password</a>
                  <input type="password" class="form-control" id="password1" name="password" placeholder="***********">
                </div>
                <button type="submit" class="btn btn-info btn-block btn-round">Sign up</button>


              </form>
              
              <br>
            <!-- <div class="d-flex justify-content-center social-buttons">
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Google">
                <i class="fab fa-google"></i>
              </button>
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook"></i>
              </button>
              
            </di>
          </div> -->
        </div>
      </div>
        <div class="modal-footer d-flex justify-content-center">
          <div style="color:white" class="signup-section">Already have an account? <a href="login.php" class="text-info"> Login</a></div>
        </div>
    </div>
  </div>
  <!-- partial -->
</article>
</main>
 
 
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
   <!-- Custom Script -->      
  <script  src="../js/modal-script.js"></script>W
  
  </body>

</html>