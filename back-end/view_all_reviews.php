<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
    <link rel="stylesheet" href="../front-end/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
    <style>
        .review-data {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Change to space-around to equally distribute items */
            align-items: flex-start; /* Align items at the top */
            gap: 20px;
            width: 80%; /* Adjust as needed */
            padding: 20px;
            margin: 30px 0;
            background-color: #335889;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .review {
            flex: 0 1 calc(33.33% - 20px); /* Each review takes up 1/3 of the container width minus gap */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .review p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }
        .header-title {
            margin: 30px 0;
            text-align: center;
        }
        .review-page {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }
        .filter-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Style for the dropdown container */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Style for the dropdown button */
    .dropdown select {
        appearance: none;
        padding: 10px 20px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        cursor: pointer;
        outline: none;
    }

    /* Style for the dropdown arrow */
    .dropdown select::after {
        content: '\25BC';
        font-size: 12px;
        color: #555;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }

    /* Style for the dropdown options */
    .dropdown select option {
        padding: 10px 20px;
    }
    </style>
</head>
<body>
    <main>
        <section class="homepage-1" id="home">
            <div class="background-image">
                <img src="../front-end/pictures/homepage-pictures/bg-header.jpg" alt="Background Picture" style="height: 150px;">
                <nav>
                    <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                    <ul>
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#planning">PLANNING</a></li>
                        <li><a href="#obituaries">OBITUARIES</a></li>
                        <li><a href="signin">SIGN IN</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <div class="review-page-container">
            <h1 class="header-title">What our customer reviews</h1>
            <div class="filter-container">
                <div class="dropdown">
                    <select id="filter-dropdown">
                        <option value="by-date" selected>By Date:</option>
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
                        include('config.php');
                
                        $sql = "SELECT * FROM review";
                        $result = mysqli_query($connection, $sql);
                
                        // Output review data in HTML
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output review data
                                echo "<div class='review'>";
                                echo "<p>Name: " . $row["review_name"]. "</p>";
                                echo "<p>Date: " . $row["review_date"]. "</p>";
                                echo "<p>Testimonial: <br>" . $row["review_testimonial"]. "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "No reviews found.";
                        }
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-item contact-title">
                    <p class="footer-details">Contact Details</p>
                </div>
                <div class="footer-item-logo">
                    <img src="../front-end/pictures/homepage-pictures/dove.png" alt="Dove">                  
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
