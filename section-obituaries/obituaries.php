<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Obituary</title>
    <link rel="stylesheet" href="../css/home-style.css">
    <link rel="stylesheet" href="../css/obituaries-style.css">
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
        <button type="button" onclick="window.location.href='../section-home/index.php#obituaries'" class="submit-btn1">BACK</button>
        <h1 class="review-title">OBITUARY</h1>
        <div class="filter-container">
            <input type="text" id="searchInput" placeholder="Search name" class="searchInput">
            <div class="dropdown">
                <select id="filter-dropdown">
                <option value="all" selected>All</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                </select>
            </div>
        </div>
        <div class="review-page-container">
            <div class="review-page">
                <div class="review-data">
                    <?php
                        
                        // Connect to your database
                        include('../database/config.php');
                    
                        $sql = "SELECT * FROM obituaries ORDER BY obituary_dod DESC";
                        $result = mysqli_query($connection, $sql);
            
                        $obituariesFound = false;
            
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $obituariesFound = true;
                                echo "<div class='review'>";
                                if (!empty($row["obituary_picture"])) {
                                    $imageData = base64_encode($row["obituary_picture"]);
                                    echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="Obituary Picture" />';
                                } else {
                                    echo '<img src="../pictures/reviews-pictures/icon.png" alt="Obituary Picture" class="review-icon">';
                                }
                                echo "<div class='review-details'>";
                                echo "<p class='obituary-name'>" . $row["obituary_name"] . "</p>";
                                $dob = date("F j, Y", strtotime($row["obituary_dob"]));
                                $dod = date("F j, Y", strtotime($row["obituary_dod"]));
                                echo "<p class='obituary-date'><i class='fas fa-calendar-alt'></i> Date of Birth: " . $dob . "</p>";
                                echo "<p class='obituary-date'><i class='fas fa-calendar-alt'></i> Date of Death: " . $dod . "</p>";
                                echo "<p class='obituary-date'><i class='fas fa-heartbeat'></i> Cause of Death: " . $dod . "</p>";
                                echo "<p class='obituary-date'><i class='fas fa-map-marker-alt'></i> Place of Death: " . $dod . "</p>";

                                echo "<span class='hidden-dod' style='display: none;'>" . $dod . "</span>";
                                
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        if (!$obituariesFound) {
                            echo "<p>No obituaries found.</p>";
                        }
                    ?>
                </div>
                    <p id="noResultsMessage" style="display: none;">No obituaries found.</p>
                        </div>
                    
                </div>
            </div>
        </div>
        <br><br><br><br>
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
    const reviewItems = document.querySelectorAll('.review');
    const noResultsMessage = document.getElementById('noResultsMessage');

    const filterDropdown = document.getElementById('filter-dropdown');
    const searchInput = document.getElementById('searchInput');

    filterDropdown.addEventListener('change', function() {
        const selectedYear = this.value;
        handleFilter(selectedYear, searchInput.value.toLowerCase());
    });

    searchInput.addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const selectedYear = filterDropdown.value;
        handleFilter(selectedYear, searchValue);
    });

    function handleFilter(selectedYear, searchValue) {
        reviewItems.forEach(function(review) {
            const name = review.querySelector('.obituary-name').textContent.toLowerCase();
            const hiddenDOD = review.querySelector('.hidden-dod').textContent;
            const obituaryYear = new Date(hiddenDOD).getFullYear();

            if ((selectedYear === 'all' || selectedYear == obituaryYear) &&
                (name.includes(searchValue) || searchValue === '')) {
                review.style.display = 'block';
            } else {
                review.style.display = 'none';
            }
        });

        const anyMatchesFound = Array.from(reviewItems).some(review => review.style.display === 'block');

        if (!anyMatchesFound) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }
</script>

</body>
</html>