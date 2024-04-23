  <?php
  include '../database/config.php';

  if (isset($_POST['submit-btn'])) {

      $reviewname = mysqli_real_escape_string($connection, $_POST["review-name"]);
      $reviewemail = mysqli_real_escape_string($connection, $_POST["review-email"]);
      $reviewtestimonial = mysqli_real_escape_string($connection, $_POST["review-testimonial"]);
      
      $query = "INSERT INTO review (review_name, review_email, review_testimonial) VALUES ('$reviewname', '$reviewemail', '$reviewtestimonial')";

      if (mysqli_query($connection, $query)) {
          header("Location: review-modal.html");
          exit();
          
      } else {
          echo '<script>alert("Submission Failed!")</script>';
      }
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Write a Review</title>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
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
          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <a href="#" onclick="history.go(-1)">&times;</a>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h1 style="color:white; font-family: 'Roboto', sans-serif; font-size: 30px; font-weight: bold;">Write a Review</h1>
          </div>
          <div class="d-flex flex-column text-center">
          <form action="" method="POST" id="review-form">
              <div class="form-group">
                <a style="color:white; margin-right: 500px; font-family: 'Roboto', sans-serif; font-size: 16px;">Name</a>
                <input type="text" class="form-control" id="review-name" name="review-name" placeholder="Juan Dela Cruz" required>
              </div>
              <div class="form-group">
                <a style="color:white; margin-right: 500px; font-family: 'Roboto', sans-serif; font-size: 16px;">Email</a>
                <input type="email" class="form-control" id="review-email" name="review-email" placeholder="perpetualfuneralservices@gmail.com" required>
              </div>
              <div class="form-group">
                  <a style="color:white; margin-right: 490px; font-family: 'Roboto', sans-serif; font-size: 16px;">Review</a>
                  <textarea name="review-testimonial" id="review-testimonial" cols="39" rows="9" placeholder="Your review" style="margin-bottom: 10px;" required></textarea>
                </div>
              <!-- <button type="button" class="btn btn-info btn-blok btn-round" style="width: 45%;  position: absolute; left: 10px; bottom: 5px;" >Review Ratings</button> -->
              <button type="submit" name="submit-btn" class="btn btn-info btn-block btn-round; width:50%;">SUBMIT</button>
            </form>
        </div>
  </div>
    
    </article>
  </main>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script  src="../js/modal-script.js"></script>


    <script>
    function validateReviewName() {
      var reviewName = document.getElementById("review-name").value;

      var textValidation = /^[a-zA-Z.]+(?:\s[a-zA-Z.]+)*$/;

      if(!textValidation.test(reviewName)) {
          alert("Invalid name. Please input proper name.");
          return false; 
      }
      return true;
  }


  document.getElementById('review-form').addEventListener('submit', function(event) {
      if (!validateReviewName()) {
          event.preventDefault();
          return;
      } else {
          // alert('Form submitted successfully!');
      }
  });
      </script>
    </body>

  </html>