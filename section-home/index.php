<?php 
    require '../database/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Home</title>
    <link rel="stylesheet" href="../css/home-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <section class="homepage-1" id="home">
                <div class="background-image">
                    <img src="../pictures/homepage-pictures/bg-header.jpg" alt="Background Picture">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <ul>
                            <li><a href="#home">HOME</a></li>
                            <li><a href="../section-about/About Us.html">ABOUT</a></li>
                            <li><a href="#services">SERVICES</a></li>
                            <li><a href="../section-form/pickup-form.php">FORM</a></li>
                            <!-- <li><a href="../section-planning/planning-form.php">PLANNING</a></li> -->
                            <!-- <li><a href="#obituaries">OBITUARY</a></li> -->
                            <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
                            <!-- <li><a href="../section-login-signup/logout.php">LOGOUT</a></li> -->
                        </ul>
                    </nav>
                    
                    <div class="text-overlay">
                        <div class="logo-container">
                            <img src="../pictures/package-pictures/pigeon.png" class="pigeon">
                        </div>    
                    
                        <p>PERPETUAL FUNERAL <br> SERVICES</p>
                        <button class="started-btn" onclick="window.location.href = '../section-form/pickup-form.php'">GET STARTED</button>
                    </div>
                </div>
        </section>
        <section class="homepage-2" id="services">
            <br><br>
            <h1 class="homepage-title">SERVICES</h1>
            <div class="service-container-outer">
                <div class="service-container-inner">
                    <div class="service-item">
                        <img src="../pictures/homepage-pictures/service1.jpg" alt="Burial Services">
                        <p class="service-description">Burial and Cremation Services</p>
                        <p class="learn-more"><a href="../section-services/Service Section.html" style="text-decoration: none; color: black">Learn More</a></p>
                    </div>
                    <!-- <div class="service-item">
                        <img src="../pictures/homepage-pictures/service2.jpg" alt="Cremation Services">
                        <p class="service-description">Cremation Services</p>
                        <p class="learn-more"><a href="../section-services/Cremation Services.html" style="text-decoration: none; color: black">Learn More</a></p>
                    </div> -->
                    <div class="service-item">
                        <img src="../pictures/homepage-pictures/service3.jpg" alt="Planning Ahead">
                        <p class="service-description">Advance Planning</p>
                        <p class="learn-more"><a href="../section-planning/planning-form.php" style="text-decoration: none; color: black">Learn More</a></p>
                    </div>
                    <div class="service-item">
                        <img src="../pictures/homepage-pictures/service4.jpg" alt="Obituaries Tributes">
                        <p class="service-description">Obituary Tributes</p>
                        <p class="learn-more"><a href="../section-obituaries/obituaries.php" style="text-decoration: none; color: black">Learn More</a></p>
                    </div>
                </div>
            </div>
            <h2 class="homepage-title">Welcome to Perpetual Funeral Services</h2>
            <p class="homepage-2-description">Discover a compassionate and dignified online experience at our funeral home's website, <br> where we provide support and guidance during difficult times.</p>
           <br><br><br><br><hr>
            <br>
        </section>
        <section class="homepage-3" id="obituaries">
            <br>
           <h1 class="homepage-title">OBITUARY</h1>
            <div class="under-title">
                <br>
                <!-- <div class="stars-container" style="margin-right: 20px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-description">5.0 rating of 53</p> -->
            </div>
            <?php 
                $sql = "SELECT * FROM obituaries LIMIT 4";
                $result = mysqli_query($connection, $sql);
                
                // Step 3: Fetch Data and Generate HTML
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    echo '<div class="review-container-content">';

                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Open review-container div for each review
                        echo '<div class="obituary-container">';
                        echo '<div class="obituary">';
                        echo '<img class="obituary-picture" src="data:image/jpeg;base64,' . base64_encode($row["obituary_picture"]) . '" alt="Obituary Picture"><br>';
                        echo '<p class="obituary-name">' . $row["obituary_name"] . '</p><br>';
                        $dob = date("F j, Y", strtotime($row["obituary_dob"]));
                        $dod = date("F j, Y", strtotime($row["obituary_dod"]));
                        echo "<p class='obituary-date'>" . $dob." - " .$dod. "</p>";
                        // echo "<p>" . $row["review_date"]. "</p>";
                        echo '</div>'; // Close review div
                        echo '</div>'; // Close review-container div
                    }

                    // Close the review-container-container div
                    echo '</div>';
                } else {
                    echo "0 results";
                }
            ?>
            <br>
            <!-- <hr style="margin: 0 150px;"> -->
            <div class="view-container">
                <button class="original-button" style="margin: 10px auto 80px auto; width: 50%;"><a href="../section-obituaries/obituaries.php" style="text-decoration: none; color: white; font-family: 'Roboto', sans-serif; font-weight: bold;">VIEW OBITUARY</a></button>
            </div><hr>
            <!-- <hr>
            <br>
        </section>
        <section class="homepage-4">
        <br><br><br> !-->

        <div class="reviews" id="reviews">
            <br><br><br>
            <h1 class="homepage-title">REVIEWS</h1>
            <div class="under-title">
                <br>
                <!-- <div class="stars-container" style="margin-right: 20px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-description">5.0 rating of 53</p> -->
            </div>
            <?php 
                $sql = "SELECT * FROM review ORDER BY review_timestamp DESC LIMIT 4";
                $result = mysqli_query($connection, $sql);
                
                // Step 3: Fetch Data and Generate HTML
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    echo '<div class="review-container-content">';

                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Open review-container div for each review
                        echo '<div class="review-container">';
                        echo '<div class="review">';
                        echo '<img src="../pictures/reviews-pictures/icon.png" alt="Icon Profile" class="review-icon">';
                        echo '<p class="review-name">' . $row["review_name"] . '</p><br>';
                        echo '<p class="review-testimonial"><i class="bi bi-quote"></i>' . $row["review_testimonial"] . '</p><br>';

                        // echo "<p>" . $row["review_date"]. "</p>";
                        echo '</div>'; // Close review div
                        echo '</div>'; // Close review-container div
                    }

                    // Close the review-container-container div
                    echo '</div>';
                } else {
                    echo "0 results";
                }
            ?>
            <!-- <div class="review-container-content">
                <div class="review-container-1">
                    <div class="avatar-container">
                        <img src="../front-end/pictures/homepage-pictures/rick.jpg" alt="Avatar">
                    </div>
                    <div class="avatar-info">
                        <h3 class="review-name">Ezilvin Labastida</h3>
                        <p class="review-date">15/03/2023</p>
                        <div class="stars-container" style="font-size: 30px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div class="avatar-review">
                        <p class="review-text">
                            <span class="review-quote">&#8220;</span>
                            <span class="review-text-bold">1k4w L4ng 54p4t n4!!!</span>
                            <span class="review-text-bold-bold">&#8220;</span>
                        </p>
                    </div>
                </div>                
                <div class="review-container-1">
                    <div class="avatar-container">
                        <img src="../front-end/pictures/homepage-pictures/rick.jpg" alt="Avatar">
                    </div>
                    <div class="avatar-info">
                        <h3 class="review-name">Ezilvin Labastida</h3>
                        <p class="review-date">15/03/2023</p>
                        <div class="stars-container" style="font-size: 30px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div class="avatar-review">
                        <p class="review-text">
                            <span class="review-quote">&#8220;</span>
                            <span class="review-text-bold">1k4w L4ng 54p4t n4!!!</span>
                            <span class="review-text-bold-bold">&#8220;</span>
                        </p>
                    </div>
                </div>       
                <div class="review-container-1">
                    <div class="avatar-container">
                        <img src="../front-end/pictures/homepage-pictures/rick.jpg" alt="Avatar">
                    </div>
                    <div class="avatar-info">
                        <h3 class="review-name">Ezilvin Labastida</h3>
                        <p class="review-date">15/03/2023</p>
                        <div class="stars-container" style="font-size: 30px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div class="avatar-review">
                        <p class="review-text">
                            <span class="review-quote">&#8220;</span>
                            <span class="review-text-bold">1k4w L4ng 54p4t n4!!!</span>
                            <span class="review-text-bold-bold">&#8220;</span>
                        </p>
                    </div>
                </div>
                <div class="review-container-1">
                    <div class="avatar-container">
                        <img src="../front-end/pictures/homepage-pictures/rick.jpg" alt="Avatar">
                    </div>
                    <div class="avatar-info">
                        <h3 class="review-name">Ezilvin Labastida</h3>
                        <p class="review-date">15/03/2023</p>
                        <div class="stars-container" style="font-size: 30px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div class="avatar-review">
                        <p class="review-text">
                            <span class="review-quote">&#8220;</span>
                            <span class="review-text-bold">1k4w L4ng 54p4t n4!!!</span>
                            <span class="review-text-bold-bold">&#8220;</span>
                        </p>
                    </div>
                </div>
            </div> -->
            <br>
            <br><br>
            <div class="review-container-footer">
                <a href="../section-reviews/all_reviews.php" class="original-button">VIEW REVIEWS</a>

                <button class="original-button" id="openReviewFormModal"><a href="../section-reviews/write-review.php" style="text-decoration: none; color: white; font-weight: bold;">WRITE A REVIEW</a></button>
                
            </div>
            </div>
            <!--
            <div class="form-container" id="reviewFormContainer">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Leave A Review</h2>
                    <div class="form-element">
                        <input type="text" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-element">
                        <input type="text" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-element">
                        <input type="text" id="testimonial" placeholder="Testimonial" style="height: 120px;">
                    </div>
                    <h3>Rating</h3>
                    <div class="form-footer">
                      <button>Review Ratings</button>
                        <button>Submit</button>
                    </div>
                </div>
            </div>

            <br>
            <hr>
            <br>
        </section> !-->
        <!-- Review Form Modal -->
        <br>
        <hr>
        <br><br>
        <section class="homepage-5" id="contact">
        <div class="wrapper-container">
            <div class="left-wrapper-container">
                <div class="left-wrapper-item">
                <h2 style="font-size: 40px; color: #144067;">DIRECTIONS</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0610417880775!2d120.96950667590495!3d14.652476375802863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ccc6d9badd%3A0x7e0ea7cff476121!2sFloresco%20Building%2C%20A.%20Mabini%20St%2C%20Dagat-Dagatan%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sfil!2sph!4v1709841733811!5m2!1sfil!2sph" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="right-wrapper-container">
                <div class="right-wrapper-item">
                    <div class="form-container">
                        <h2 style="font-size: 40px; color: #144067;">GET IN TOUCH</h2>
                        <form method="post" action="send-email.php" id="inquiry-form">
                        <input type="text" name="name" id="name" class="input" placeholder="Name" pattern="[a-zA-Z.]+(?:\s[a-zA-Z.]+)*" required title="Input letters only.">
                            <br>
                            <input type="email" name="email" id="email" class="input" placeholder="Email Address" required>
                            <br>
                            <input class="input" type="text" name="subject" id="subject" placeholder="Subject" required>
                            <br>
                            <textarea class="message-inquiry input" name="message" id="message" placeholder="Message" required></textarea>
                            <br>
                            <button class="btn-submit" value="Submit" name="submit-btn">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
        <!-- <section class="homepage-6" id="about">
            <br>
            <h1 class="homepage-title">Directions</h1>
            <div class="map-container">
                <div class="map-item-container">
                    <h2 style="margin: 10px 0;">Philip Sabino Funeral Services</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0610417880775!2d120.96950667590495!3d14.652476375802863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ccc6d9badd%3A0x7e0ea7cff476121!2sFloresco%20Building%2C%20A.%20Mabini%20St%2C%20Dagat-Dagatan%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sfil!2sph!4v1709841733811!5m2!1sfil!2sph" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p style="margin: 10px 0; text-align: center;">"Compassionate care in your time of need. Honoring lives with dignity and respect."</p>
                </div>
            </div>
            <br> -->
            
            <!-- <footer>
                <div class="footer-container">
                    <div class="footer-item contact-title">
                        <p class="footer-details">Contact Details</p>
                    </div>
                    <div class="footer-item-logo">
                        <img src="pictures/homepage-pictures/dove.png" alt="Dove">                  
                        <p class="footer-details">Perpetual Funeral Services</p>
                    </div>
                    <div class="footer-icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-solid fa-phone"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-square-x-twitter"></i>
                        <p class="footer-details">511 A. Mabini St., Caloocan City</p>
                    </div>
                </div>
            </footer> -->
        </section>
    </main>
</body>
<script>
    // Get the form container and close button
    var formContainer = document.getElementById("reviewFormContainer");
    var closeButton = document.querySelector(".close-btn");

    // Get the "Write A Review" button
    var writeReviewButton = document.getElementById("openReviewFormModal");

    // Function to show the form
    function showForm() {
        formContainer.style.display = "block";
    }

    // Function to hide the form
    function hideForm() {
        formContainer.style.display = "none";
    }

    // Event listener for the "Write A Review" button
    writeReviewButton.addEventListener("click", showForm);

    // Event listener for the close button (X)
    closeButton.addEventListener("click", hideForm);

</script>
</html>