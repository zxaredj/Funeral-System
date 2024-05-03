<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Reviews</title>
    <link rel="stylesheet" href="../css/home-style.css">
    <link rel="stylesheet" href="../css/reviews-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
</head>
<style>
.submit-btn1-container {
    text-align: center;
}

.submit-btn1 {
    background-color: #144067;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin: 10px 0px 10px 20px;
    height: 40px;
    width: 100px;
    font-weight: bold;
}
</style>
<body>
    <main>  
        <section class="homepage-1" id="home">
            <div class="background-image">
                <!-- <img src="../front-end/pictures/homepage-pictures/bg-header.jpg" alt="Background Picture" style="height: 150px;"> -->
                <nav>
                    <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                    <h1><a href = '../section-about/About Us.html' class="name">PERPETUAL FUNERAL SERVICES</a></h1>
                    <ul>
                    <li><a href="../section-home/index.php">HOME</a></li>
                    <li><a href="../section-about/About Us.html">ABOUT</a></li>
                    <li><a href="../section-services/Service Section.html">SERVICES</a></li>
                    <li><a href="../section-form/pickup-form.php">FORM</a></li>
                    <!-- <li><a href="../section-planning/planning-form.php">PLANNING</a></li> -->
                    <!-- <li><a href="../section-obituaries/obituaries.php">OBITUARY</a></li> -->
                    <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <br><br><br><br><br><br>
        <button type="button" onclick="window.location.href='../section-home/index.php#reviews'" class="submit-btn1">BACK</button>
        <div class="review-page-container">
            <h1 class="review-title">REVIEWS</h1>
            <div class="filter-container">
    <div class="dropdown">
        <select id="filter-dropdown">
            <option value="all" selected>All</option>
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
                    
                        $sql = "SELECT * FROM review ORDER BY review_timestamp DESC";
                        $result = mysqli_query($connection, $sql);
                    
                        // Output review data in HTML
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output review data
                                echo "<div class='review' data-date='" . date("Y-m-d", strtotime($row["review_timestamp"])) . "'>";
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

    // Get reference to filter dropdown
    const filterDropdown = document.getElementById("filter-dropdown");

    // Function to filter reviews by date range
    function filterReviews(dateRange) {
        // Retrieve current date
        const currentDate = new Date();
        // Iterate through review elements
        const reviews = reviewData.querySelectorAll(".review");
        reviews.forEach(review => {
            const reviewDateStr = review.getAttribute("data-date");
            const reviewDate = new Date(reviewDateStr);
            const timeDiff = currentDate.getTime() - reviewDate.getTime();
            const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            // Show or hide review based on date range
            if (dateRange === "all") {
                review.style.display = "block";
            } else if (dateRange === "this-week" && diffDays <= 7) {
                review.style.display = "block";
            } else if (dateRange === "past-few-weeks" && diffDays <= 30) {
                review.style.display = "block";
            } else if (dateRange === "past-few-months" && diffDays <= 90) {
                review.style.display = "block";
            } else {
                review.style.display = "none";
            }
        });
    }

    // Add event listener to filter dropdown
    filterDropdown.addEventListener("change", function() {
        const selectedValue = this.value;
        filterReviews(selectedValue);
    });
});

    </script>
</body>
</html>