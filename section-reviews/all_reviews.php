<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers' Reviews</title>
    <link rel="stylesheet" href="../css/home-style.css">
    <link rel="stylesheet" href="../css/reviews-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <section class="homepage-1" id="home">
            <div class="background-image">
                <!-- <img src="../front-end/pictures/homepage-pictures/bg-header.jpg" alt="Background Picture" style="height: 150px;"> -->
                <nav>
                    <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                    <ul>
                    <li><a href="../section-home/index.php">HOME</a></li>
                    <li><a href="../section-about/About Us.html">ABOUT</a></li>
                    <li><a href="../section-services/Service Section.html">SERVICES</a></li>
                    <li><a href="../section-form/pickup-form.php">FORM</a></li>
                    <li><a href="../section-planning/planning-form.php">PLANNING</a></li>
                    <li><a href="../section-obituaries/obituaries.php">OBITUARY</a></li>
                    <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <div class="review-page-container">
            <h1 class="review-title">REVIEWS</h1>
            <div class="filter-container">
                <div class="dropdown">
                    <select id="filter-dropdown">
                        <option value="by-date" disabled selected>By Date:</option>
                        <option value="this-week">This Week</option>
                        <option value="past-few-weeks">Past Few Weeks</option>
                        <option value="past-few-months">Past Few Months</option>
                    </select>
                </div>
            </div>
            <div class="review-page">
                <div class="review-data">
                    <?php
                        // Connect to your database
                        include('../database/config.php');

                        $sql = "SELECT * FROM review";
                        $result = mysqli_query($connection, $sql);
                
                        // Output review data in HTML
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output review data
                                echo "<div class='review'>";
                                echo '<br>';
                                echo '<img src="../pictures/reviews-pictures/icon.png" alt="Icon Profile" class="review-icon">';
                                echo '<p class="review-name">' . $row["review_name"] . '</p><br>';
                                echo '<p class="review-testimonial"><i class="bi bi-quote"></i>' . $row["review_testimonial"] . '</p><br>';
                                // echo "<p> " . $row["review_date"]. "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "No reviews found.";
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- <footer>
            <div class="footer-container">
                <div class="footer-item contact-title">
                    <p class="footer-details">Contact Details</p>
                </div>
                <div class="footer-item-logo">
                    <img src="../front-end/pictures/homepage-pictures/dove.png" alt="Dove">                  
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
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to review data container
            const reviewData = document.querySelector(".review-data");

            // Get reference to filter buttons
            const thisWeekBtn = document.getElementById("this-week");
            const pastFewWeeksBtn = document.getElementById("past-few-weeks");
            const pastFewMonthsBtn = document.getElementById("past-few-months");

            // Function to filter reviews by date range
            function filterReviews(dateRange) {
                // Retrieve current date
                const currentDate = new Date();
                // Iterate through review elements
                const reviews = reviewData.querySelectorAll(".review");
                reviews.forEach(review => {
                    const reviewDateStr = review.querySelector("p:nth-child(2)").textContent.split(": ")[1];
                    const reviewDate = new Date(reviewDateStr);
                    const timeDiff = currentDate.getTime() - reviewDate.getTime();
                    const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    // Hide or show review based on date range
                    if (dateRange === "thisWeek" && diffDays <= 7) {
                        review.style.display = "block";
                    } else if (dateRange === "pastFewWeeks" && diffDays <= 30) {
                        review.style.display = "block";
                    } else if (dateRange === "pastFewMonths" && diffDays <= 90) {
                        review.style.display = "block";
                    } else {
                        review.style.display = "none";
                    }
                });
            }

            // Add event listeners to filter buttons
            thisWeekBtn.addEventListener("click", function() {
                filterReviews("thisWeek");
            });

            pastFewWeeksBtn.addEventListener("click", function() {
                filterReviews("pastFewWeeks");
            });

            pastFewMonthsBtn.addEventListener("click", function() {
                filterReviews("pastFewMonths");
            });
        });
    </script>
</body>
</html>