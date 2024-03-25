<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caskets</title>
    <link rel="stylesheet" href="style-1.css">
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
                            <li><a href="../index.php">HOME</a></li>
                            <li><a href="../About Us.html">ABOUT</a></li>
                            <li><a href="Service Section.html">SERVICES</a></li>
                            <li><a href="form.php">FORM</a></li>
                            <li><a href="planning.php">PLANNING</a></li>
                            <li><a href="../../back-end/obituaries.php">OBITUARIES</a></li>
                            <li><a href="../../login-signup/signup.html">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            </main>

<div class="main-caskets">
<h1 class="service-title">OUR CASKET SELECTION</h1>
<p class="service-intro">We are proud to provide high-quality caskets at the best prices in our area. We want you to be able to see, touch and feel the casket you select for your loved one.</p>


<h2>METAL CASKETS</h2>
<hr>
    <div class="box-container">
        <?php
        include '../../back-end/config.php';
            
        $query = "SELECT * FROM `caskets` WHERE category = 'metal'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/caskets-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <input type="submit" class="select-btn" value="SELECT" name="select">
          </div>
        </form>
        <?php
        }
        ?>
    </div>

    <h2>WOOD CASKETS</h2>
<hr>
    <div class="box-container">
        <?php
        $query = "SELECT * FROM `caskets` WHERE category = 'wood'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/caskets-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">
                <input type="submit" class="select-btn" value="SELECT" name="select">
          </div>
        </form>
        <?php
        }
        ?>
    </div>

    <h2>BABY CASKETS</h2>
    <hr>
    <div class="box-container">
        <?php
        $query = "SELECT * FROM `caskets` WHERE category = 'baby'";
        $select_product = mysqli_query($connection, $query);
            while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        
        <form action="" method="post">
            <div class="box">
                <img src="../pictures/caskets-pictures/<?php echo $fetch_product['picture']; ?>" alt="<?php echo $fetch_product['name']; ?>">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
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