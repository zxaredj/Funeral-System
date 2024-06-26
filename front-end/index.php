<?php 
    require '../back-end/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funeral System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <section class="homepage-1" id="home">
                <div class="background-image">
                    <img src="../front-end/pictures/homepage-pictures/bg-header.jpg" alt="Background Picture">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <ul>
                            <li><a href="#home">HOME</a></li>
                            <li><a href="About Us.html">ABOUT</a></li>
                            <li><a href="About Us.html">CONTACT</a></li>
                            <li><a href="services/Service Section.html">SERVICES</a></li>
                            <li><a href="#planning">PLANNING</a></li>
                            <li><a href="../back-end/obituaries.php">OBITUARIES</a></li>
                            <li><a href="signin">SIGN IN</a></li>
                        </ul>
                    </nav>
                    <div class="text-overlay"><p>Where Compassion Meets Comfort <br>
                        Your Trusted Guide in Times of Loss</p>
                    </div>
                </div>
        </section>
        <section class="homepage-2" id="services">
            <br>
            <h1 class="homepage-title">Our Services</h1>
            <div class="service-container-outer">
                <div class="service-container-inner">
                    <div class="service-item">
                        <img src="../front-end/pictures/homepage-pictures/service1.jpg" alt="Burial Services">
                        <p class="service-description">Burial Services</p>
                        <p class="learn-more">Learn More</p>
                    </div>
                    <div class="service-item">
                        <img src="../front-end/pictures/homepage-pictures/service2.jpg" alt="Cremation Services">
                        <p class="service-description">Cremation Services</p>
                        <p class="learn-more">Learn More</p>
                    </div>
                    <div class="service-item">
                        <img src="../front-end/pictures/homepage-pictures/service3.jpg" alt="Planning Ahead">
                        <p class="service-description">Planning Ahead</p>
                        <p class="learn-more">Learn More</p>
                    </div>
                    <div class="service-item">
                        <img src="../front-end/pictures/homepage-pictures/service4.jpg" alt="Obituaries Tributes">
                        <p class="service-description">Obituaries Tributes</p>
                        <p class="learn-more">Learn More</p>
                    </div>
                </div>
            </div>
            <h2 class="homepage-title">Welcome to Philip Sabino Funeral Services</h2>
            <p class="homepage-2-description">Discover a compassionate and dignified online experience at our funeral home's website, <br> where we provide support and guidance during difficult times.</p>
            <hr>
            <br>
        </section>
        <section class="homepage-3" id="obituaries">
            <br>
            <br>
            <br>
            <h1 class="homepage-title">Recent Obituaries</h1>
            <div class="obituaries-container">
                <div class="obituaries-item obituaries-item-1"></div>
                <div class="obituaries-item obituaries-item-2"></div>
                <div class="obituaries-item obituaries-item-3"> </div>
                <div class="obituaries-item obituaries-item-4"></div>
                <div class="obituaries-item obituaries-item-5"></div>
            </div>
            <div class="obituaries-info-container">
                <div class="obituaries-info">
                    <p class="obituaries-name">Edward M. Norton</p>
                    <p class="obituaries-date">Feb 27, 1998</p>
                </div>
                <div class="obituaries-info">
                    <p class="obituaries-name">Leon Smith</p>
                    <p class="obituaries-date">Feb 27, 1998</p>
                </div>
                <div class="obituaries-info">
                    <p class="obituaries-name">Robert S. Brown</p>
                    <p class="obituaries-date">Mar 2, 1899</p>
                </div>
                <div class="obituaries-info">
                    <p class="obituaries-name">Jennifer A. Jones</p>
                    <p class="obituaries-date">Apr 7, 2000</p>
                </div>
                <div class="obituaries-info">
                    <p class="obituaries-name">Mary B. Williams</p>
                    <p class="obituaries-date">Aug 17, 1978</p>
                </div>
            </div>
            <hr style="margin: 0 150px;">
            <div class="view-container">
                <button class="original-button" style="margin: 10px 140px 70px 143px; width: 85%;">VIEW ALL OBITUARIES</button>
            </div>
            <hr>
            <br>
        </section>
        <section class="homepage-4">
            <h1 class="homepage-title">Our Reviews</h1>
            <div class="under-title">
                <div class="stars-container" style="margin-right: 20px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-description">5.0 rating of 53</p>
            </div>
            <?php 
                $sql = "SELECT * FROM review LIMIT 4";
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
                        echo '<div class="stars-container">&#9733;&#9733;&#9733;&#9733;&#9733;</div>';
                        echo "<p>" . $row["review_name"]. "</p>";
                        echo "<p>" . $row["review_date"]. "</p>";
                        echo "<p>Testimonial: <br>" . $row["review_testimonial"]. "</p>";
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
            <div class="review-container-footer">
                <a href="../back-end/view_all_reviews.php" target="_blank" class="original-button" style="margin-right: 30px;">View All Reviews</a>
                <button class="original-button" id="openReviewFormModal">Write A Review</button>
            </div>
            <div class="form-container" id="reviewFormContainer">
                <div class="close-btn">&times;</div> <!-- Close button (X) -->
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
        </section>
        <!-- Review Form Modal -->
        
        <section class="homepage-5" id="contact">
            <br>
            <br>
            <h1 class="homepage-5-title">Directions</h1>
            <div class="wrapper-container">
                <div class="left-wrapper-container">
                    <div class="left-wrapper-item">
                        <h2 style="color: #282D32;">Philip Sabino Funeral Services</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0610417880775!2d120.96950667590495!3d14.652476375802863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ccc6d9badd%3A0x7e0ea7cff476121!2sFloresco%20Building%2C%20A.%20Mabini%20St%2C%20Dagat-Dagatan%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sfil!2sph!4v1709841733811!5m2!1sfil!2sph" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="text-description" style="font-size: 20px;">"Compassionate care in your time of need. Honoring lives with dignity and <br> respect."</p>
                    </div>
                </div>
                <div class="right-wrapper-container">
                    <div class="right-wrapper-item">
                        <h2 style="font-size: 40px;">GET IN TOUCH</h2>
                        <div class="form-container">
                            <form action="">
                                <input type="name" class="name-input input" placeholder="Enter Your Name:">
                                <br>
                                <input type="email" class="email-input input" placeholder="Enter a valid Email Address:">
                                <br>
                                <textarea class="message-inquiry input" name="message-inquiry" id="message-inquiry" placeholder="Enter your message:"></textarea>
                                <br>
                                <br>
                                <button class="btn-submit" value="Submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="homepage-6" id="about">
            <br>
            <h1 class="homepage-title">Directions</h1>
            <div class="map-container">
                <div class="map-item-container">
                    <h2 style="margin: 10px 0;">Philip Sabino Funeral Services</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0610417880775!2d120.96950667590495!3d14.652476375802863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ccc6d9badd%3A0x7e0ea7cff476121!2sFloresco%20Building%2C%20A.%20Mabini%20St%2C%20Dagat-Dagatan%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sfil!2sph!4v1709841733811!5m2!1sfil!2sph" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p style="margin: 10px 0; text-align: center;">"Compassionate care in your time of need. Honoring lives with dignity and respect."</p>
                </div>
            </div>
            <br>
            <footer>
                <div class="footer-container">
                    <div class="footer-item contact-title">
                        <p class="footer-details">Contact Details</p>
                    </div>
                    <div class="footer-item-logo">
                        <img src="pictures/homepage-pictures/dove.png" alt="Dove">                  
                        <p class="footer-details">Philip Sabino Funeral Services</p>
                    </div>
                    <div class="footer-icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-solid fa-phone"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-square-x-twitter"></i>
                        <p class="footer-details">92 Interior Sabino Compound, Maysan, Valenzuela, Philippines</p>
                    </div>
                </div>
            </footer>
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