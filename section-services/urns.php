<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Urns</title>
    <link rel="stylesheet" href="../css/selection-style.css">
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
            </main>
            <br><br><br><br>
<br>
<button type="button" onclick="window.location.href='../section-services/Service Section.html#services-option'" class="submit-btn1">BACK</button>
<div class="main-caskets">
<h1 class="service-title">URNS OFFERED</h1>
<p class="service-intro">We are proud to provide high-quality urns at the best prices in our area. We want you to be able to see, touch and feel the urn you select for your loved one.</p>

<br>
<h2 class="header-title">METAL URN</h2>
<hr>
    <div class="box-container">
        <?php
        include '../database/config.php';
            
        $query = "SELECT * FROM `urns` WHERE category = 'metal'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/urns-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <!-- <input type="submit" class="select-btn" value="SELECT" name="select"> -->
          </div>
        </form>
        <?php
        }
        ?>
    </div>
    <br><br>
    <h2 class="header-title">MARBLE URN</h2>
<hr>
    <div class="box-container">
        <?php
        $query = "SELECT * FROM `urns` WHERE category = 'marble'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/urns-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <!-- <input type="submit" class="select-btn" value="SELECT" name="select"> -->
          </div>
        </form>
        <?php
        }
        ?>
    </div>
    <br><br>
    <h2 class="header-title">GLASS URN</h2>
<hr>
    <div class="box-container">
        <?php
            
        $query = "SELECT * FROM `urns` WHERE category = 'glass'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/urns-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <!-- <input type="submit" class="select-btn" value="SELECT" name="select"> -->
          </div>
        </form>
        <?php
        }
        ?>
    </div>
    <br><br>
    <h2 class="header-title">BABY URN</h2>
<hr>
    <div class="box-container">
        <?php
            
        $query = "SELECT * FROM `urns` WHERE category = 'baby'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/urns-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3 class="item-name"><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <!-- <input type="submit" class="select-btn" value="SELECT" name="select"> -->
          </div>
        </form>
        <?php
        }
        ?>
    </div>

</body>
</html>