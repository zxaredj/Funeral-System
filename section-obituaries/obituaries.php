<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituaries</title>
    <link rel="stylesheet" href="../css/obituaries-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
    
    <style>

    </style>
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
                    <li><a href="../section-obituaries/obituaries.php">OBITUARIES</a></li>
                    <li><a href="../section-login-signup/signup.html">SIGN IN</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <div class="review-page-container">
        <h1 class="review-title">OBITUARY</h1>
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
                <div class="review-data-1">
                    <?php
                        // Connect to your database
                        include('../database/config.php');
                        
                        $sql = "SELECT * FROM obituaries";
                        $result = mysqli_query($connection, $sql);
                        
                        // Output obituary data in HTML
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output obituary data
                                echo "<div class='review'>";
                                // Display the image if available
                                if (!empty($row["obituary_picture"])) {
                                    $imageData = base64_encode($row["obituary_picture"]);
                                    echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="Obituary Picture" />';
                                } else {
                                    echo "<p>No picture available</p>";
                                }
                                echo "<p>" . $row["obituary_name"] . "</p>";
                                echo "<p>" . $row["obituary_date"] . "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "No obituaries found.";
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
        </footer> -->
    </main>
</body>
</html>
