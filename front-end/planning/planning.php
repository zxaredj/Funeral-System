<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Planning</title>
    <link rel="stylesheet" href="../services/style-1.css">
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
                            <li><a href="../form/form.php">FORM</a></li>
                            <li><a href="../planning/planning.php">PLANNING</a></li>
                            <li><a href="obituaries.php">OBITUARIES</a></li>
                            <li><a href="signin.html">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
      </main>

<h1 class="title">PLANNING FORM</h1>
<p class="form-intro">Take charge of your final arrangements by planning ahead, ensuring your loved ones are spared the burden and your wishes are honored with peace of mind.</p>

<div class="container">
    <div class="box-1">

    <form action="" method="POST" enctype="multipart/form-data">
      
        <!-- <h2 class="docu-text">Please input the following information:</h2> -->
    
        <h2 class="info-title">Benefactor's Personal Information</h2>
      
            <div class="inputs">
                <label for="benefactor-firstname">First Name</label>
                <input type="text" id="benefactor-firstname" name="benefactor-firstname" placeholder="Juan" required>
            </div>
            
            <div class="inputs">
                <label for="benefactor-lastname">Last Name</label>
                <input type="text" id="benefactor-lastname" name="benefactor-lastname" placeholder="Dela Cruz" required>
            </div>

            <div class="inputs">
                <label for="number">Contact Number</label>
                <input type="number" id="number" name="number" placeholder="09301938102" required>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="511 A. Mabini St., Caloocan City" required>
            </div>

            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="perpetualfuneralservices@gmail.com" required>
            </div>

            <div class="inputs">
                <label for="plan-for">This plan is for my:</label>
                <select id="plan-for" name="plan-for" required>
                    <option value="" selected disabled>Select Relationship</option>
                    <option value="parent">Parent</option>
                    <option value="sibling">Sibling</option>
                    <option value="spouse">Spouse</option>
                    <option value="child">Child</option>
                    <option value="friend">Friend</option>
                    <option value="Other">Other</option>
                </select>
            </div>

        <h2 class="info-title">Beneficiary's Personal Information</h2>
            
            <div class="inputs">
                <div class="inputs">
                    <label for="contact-firstname">First Name</label>
                    <input type="text" id="contact-firstname" name="contact-firstname" placeholder="Juan" required>
                </div>

                <div class="inputs">
                    <label for="contact-lastname">Last Name</label>
                    <input type="text" id="contact-lastname" name="contact-lastname" placeholder="Dela Cruz" required>
                </div>
            </div>

            <div class="inputs">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                </div>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="511 A. Mabini St., Caloocan City" required>
            </div>

            <div class="inputs">
                <div class="submit-btn-container">
                <button class="submit-btn" onclick="window.location.href='planning-services.php'">NEXT</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
