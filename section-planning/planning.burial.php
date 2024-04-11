<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning | Services</title>
    <link rel="stylesheet" href="../css/forms-style.css">
    <link rel="stylesheet" href="../css/service-option-style.css">
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
</main>
<h1 class="title">PLANNING FORM</h1>
<p class="form-intro">Take charge of your final arrangements by planning ahead, ensuring your loved ones are spared the burden and your wishes are honored with peace of mind.</p>

<div class="container">
  <div class="box-1">
   

<!-- BURIAL SERVICE -->
  <div id="burial" class="burial">
        <br>
        <h2 class="service-title">BURIAL SERVICE</h2>
            <div class="inputs">
                <p class="choose-service">CASKET</p>
                <button class="choose-btn" onclick="window.location.href='../section-services/choosing-casket.php'">Choose Casket</button>
            </div>
            <br><hr>
            <br>
            <div class="inputs">
                <p class="choose-service">FUNERAL ARRANGEMENTS</p>
                <br>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="radio-container">
                <input type="radio" id="facility-funeralhome1" class="services-option" name="facility" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option1')">
                <label for="facility-funeralhome1" class="label-name">Funeral Service at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home2" class="services-option" name="facility" value="Burial Service" onclick="optionFacility('facility-option2')">
                <label for="facility-home2" class="label-name">Funeral Service at Home</label>
            </div>  
            </form>
 
            <br>
            
    <div id="facility-option1" class="hidden2">    
            <div class="inputs">
                <p class="choose-service">FACILITY</p>
                <button class="choose-btn" onclick="window.location.href='../services/facilities.php'">Choose Facility</button>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days1">Number of Days</label>
                    <input type="number" id="number-days1" name="number-days1" required>
                </div>
            </div>

            
        </div>
            <br>
            
        <div id="facility-option2" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="address4">Address</label>
                    <input type="text" id="address4" name="address4" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

                <div class="inputs">
                <div class="inputs">
                    <label for="number-days2">Number of Days</label>
                    <input type="number" id="number-days2" name="number-days2" required>
                </div>
            </div>
        </div>

        </div>
        <br><hr>
        <br>
        <p class="choose-service">BURIAL ARRANGEMENTS</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="address5">Cemetery Address</label>
                <input type="text" id="address5" name="address5" placeholder=" C3 Road La Loma Compound, Caloocan, Metro Manila" required>
            </div>
        <br><hr>
        <br>
        <p class="choose-service">CONTACT PERSON PERSONAL INFORMATION</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="contact-firstname1">First Name</label>
                <input type="text" id="contact-firstname1" name="contact-1" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="contact-lastname1">Last Name</label>
                <input type="text" id="contact-lastname1" name="contact-lastname1" placeholder="Dela Cruz" required>
            </div>
        </div>

        <div class="inputs">
            <label for="number1">Contact Number</label>
            <input type="number" id="number1" name="number1" placeholder="09301938102" required>
        </div>

        <div class="inputs">
            <label for="email1">Email</label>
            <input type="email" id="email1" name="email1" placeholder="perpetualfuneralservices@gmail.com" required>
        </div>

        <div class="inputs">
            <label for="relationship1">Relationship to the Beneficiary</label>
            <select id="relationship1" name="relationship1" required>
                <option value="" selected disabled>Select Relationship</option>
                <option value="parent">Parent</option>
                <option value="sibling">Sibling</option>
                <option value="spouse">Spouse</option>
                <option value="child">Child</option>
                <option value="friend">Friend</option>
                <option value="others">Others</option>
            </select>
        </div>  
    </div>
</div>
</div>
    

      <div class="inputs">
            <div class="submit-btn-container">
              <button class="submit-btn" onclick="window.location.href='planning-services-form.php'">SUBMIT</button>
              </div>
      </div>

</div>
</div>

<!-- <script  src="../js/forms.js"></script> -->

</body>
</html>
