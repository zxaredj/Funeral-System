<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<main>
        <section class="form-section">
            <div class="background-image">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <ul>
                        <li><a href="index.html">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="services.php">SERVICES</a></li>
                            <li><a href="form.php">FORM</a></li>
                            <li><a href="planning.php">PLANNING</a></li>
                            <li><a href="obituaries.php">OBITUARIES</a></li>
                            <li><a href="signin.html">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            </main>

<div class="main-caskets">
<h1 class="service-title">OUR FACILITY SELECTION</h1>
<p class="service-intro">We are proud to offer top-notch facilities at the most competitive rates in our region. We maintain a comprehensive array of facilities that cater to the preferences of our families. We believe in providing you with the opportunity to experience, interact with, and choose the facility that best honors your loved one.</p>


<h2>AIR-CONDITIONED FACILITIES</h2>
<hr>
    <div class="box-container">
        <?php
        include 'configuration.php';
            
        $query = "SELECT * FROM `facilities` WHERE category = 'aircon'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box-facilities">
                <img class="facilities" src="pictures/facilities/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?>/day</div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <input type="submit" class="select-btn" value="SELECT" name="select">
          </div>
        </form>
        <?php
        }
        ?>
    </div>

    <h2>NON-AIR-CONDITIONED FACILITIES</h2>
<hr>
    <div class="box-container">
        <?php
        include 'configuration.php';
            
        $query = "SELECT * FROM `facilities` WHERE category = 'non-aircon'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box-facilities">
                <img class="facilities" src="pictures/facilities/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?>/day</div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <input type="submit" class="select-btn" value="SELECT" name="select">
          </div>
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>