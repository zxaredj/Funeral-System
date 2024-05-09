
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
        <h1 class="review-title">INBOX</h1>
    <div class="box">
        <div class="edit-credentials">
            <h2 class="title">EDIT CREDENTIALS</h2><br>

            <form id="profile-form" enctype="multipart/form-data">
            <div class="inputs">
                <p class="docu-name">New username</p>
                <input type="text" id="newUsername" name="newUsername">
            </div>

            <div class="inputs">
                <p class="docu-name">New password</p>
                <input type="password" id="newPassword" name="newPassword">
            </div>

            <button type="submit" class="submit-btn" name="submit-btn" >SAVE</button>
            </form>
        </div>
        <div class="inbox-section">
        <h1 class="inbox-title">INBOX</h1>
        <table class="table-section">
            <tbody>
                <tr>
                    <td><strong>Pick-up request</strong></td>
                    <td>12:00 pm</td>
                    <td><p class="status">PENDING</p></td>
                </tr>
                <tr>
                    <td><strong>Burial Service</strong></td>
                    <td>8:00 pm</td>
                    <td><p class="status">PENDING</p></td>
                </tr>
                <tr>
                    <td><strong>Cremation Service</strong></td>
                    <td>6:00 pm</td>
                    <td><p class="status">PENDING</p></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- <script>
        function toggleMessage(messageCard) {
            messageCard.classList.toggle('expand');
        }

        document.getElementById("profile-form").addEventListener("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "dashboard.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    alert(xhr.responseText);
                }
            };
            xhr.send(formData);
        });
    </script> -->
</body>
</html>
