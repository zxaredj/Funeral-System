
<?php
session_start();
include '../database/config.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM pickup WHERE username = '$username'";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Inbox</title>
    <link rel="stylesheet" href="../css/client-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
</head>
<body>
<main>
        <section class="form-section">
            <div class="background-image">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <h1><a href = '../section-about/About Us.php' class="name">PERPETUAL FUNERAL SERVICES</a></h1>
                        <ul>
                            <li><a href="../section-home/index.php">HOME</a></li>
                            <li><a href="../section-about/About Us.php">ABOUT</a></li>
                            <li><a href="../section-services/Service Section.php">SERVICES</a></li>
                            <li><a href="../section-form/pickup-form.php">FORM</a></li>
                            <?php if(isset($_SESSION['username'])): ?>
                            <li class="dropdown">
                            <button class="dropbtn"><i class="fas fa-user"></i></button>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="../client/client-inbox.php">Inbox</a>
                                <a href="../client/client-settings.php">Settings</a>
                            </div>
                        </li>
                        <li><a href="../logout.php">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
                    <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </section>
            </main>
            <br><br><br><br>
<br>
    <h1 class="review-title">INBOX</h1>
        <div class="box">
            
            <div class="inbox-section">
            <!-- <h1 class="inbox-title">INBOX</h1> -->
                <table class="table-section">
                    <tbody>
                        <?php while ($request = mysqli_fetch_assoc($result)): ?>
                        <tr onclick="window.location.href = 'pickup-info.php?id=<?php echo $request['id']; ?>'">
                            <td><strong><?php echo $request['type']; ?></strong></td>
                            <td><p class="status"><?php echo $request['status']; ?></p></td>
                            <td><?php echo $request['timestamp']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br><br>
</body>
</html>
