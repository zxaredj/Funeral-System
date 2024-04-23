<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Services</title>
    <link rel="stylesheet" href="../css/forms-style.css">
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
            <li><a href="../section-obituaries/obituaries.php">OBITUARY</a></li>
            <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
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
      <h2 class="info-title">SERVICES OPTION</h2>
      <p>Please pick your chosen service:</p>
      <br>
      <input type="radio" id="service-burial" name="service" value="Burial Service" onclick="optionService('option1')">
      <label for="service-burial">Burial Service</label><br>

      <input type="radio" id="service-traditional" name="service" value="Traditional Service" onclick="optionService('option2')">
      <label for="service-traditional">Traditional Cremation Service</label><br>

      <input type="radio" id="service-memorial" name="service" value="Memorial Gathering After Cremation" onclick="optionService('option3')">
      <label for="service-memorial">Memorial Gathering After Cremation</label><br>

      <input type="radio" id="service-direct" name="service" value="Direct Cremation" onclick="optionService('option4')">
      <label for="service-direct">Direct Cremation</label>
    </form>
    <br>

<!-- BURIAL SERVICE -->
  <div id="option1" class="hidden1">
        <br>
            <div class="inputs">
                <p class="choose-service">CASKET</p>
                <button class="choose-btn" onclick="window.location.href='../services/caskets.php'">Choose Casket</button>
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
    
<!-- TRADITIONAL CREMATION SERVICE -->
  <div id="option2" class="hidden1">
  <br>
            <div class="inputs">
                <p class="choose-service">CASKET</p>
                <button class="choose-btn" onclick="window.location.href='../services/caskets.php'">Choose Casket</button>
            </div>

            <div class="inputs">
                <p class="choose-service">URN</p>
                <button class="choose-btn" onclick="window.location.href='../services/urns.php'">Choose Urn</button>
            </div>
            <br><hr>
            <br>
            <div class="inputs">
                <p class="choose-service">FUNERAL ARRANGEMENTS</p>
                <br>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="radio-container">
                <input type="radio" id="facility-funeralhome3" class="services-option" name="facility" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option3')">
                <label for="facility-funeralhome3" class="label-name">Funeral Service at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home4" class="services-option" name="facility" value="Burial Service" onclick="optionFacility('facility-option4')">
                <label for="facility-home4" class="label-name">Funeral Service at Home</label>
            </div>
            </form>
 
            <br>
            
    <div id="facility-option3" class="hidden2">    
            <div class="inputs">
                <p class="choose-service">FACILITY</p>
                <button class="choose-btn" onclick="window.location.href='../services/facilities.php'">Choose Facility</button>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days3">Number of Days</label>
                    <input type="number" id="number-days3" name="number-days3" required>
                </div>
            </div>

        </div>
            <br>
            
        <div id="facility-option4" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="address6">Address</label>
                    <input type="text" id="address6" name="address6" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days4">Number of Days</label>
                    <input type="number" id="number-days4" name="number-days4" required>
                </div>
            </div>
        </div>
        </div>
        <hr>
        <br>
        <p class="choose-service">CONTACT PERSON PERSONAL INFORMATION</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="contact-firstname2">First Name</label>
                <input type="text" id="contact-firstname2" name="contact-firstname2" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="contact-lastname2">Last Name</label>
                <input type="text" id="contact-lastname2" name="contact-lastname2" placeholder="Dela Cruz" required>
            </div>
        </div>

        <div class="inputs">
            <label for="number2">Contact Number</label>
            <input type="number" id="number2" name="number2" placeholder="09301938102" required>
        </div>

        <div class="inputs">
            <label for="email2">Email</label>
            <input type="email" id="email2" name="email2" placeholder="perpetualfuneralservices@gmail.com" required>
        </div>

        <div class="inputs">
            <label for="relationship">Relationship to the Beneficiary</label>
            <select id="relationship2" name="relationship2" required>
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

<!-- MEMORIAL GATHERING AFTER CREMATION SERVICE -->
  <div id="option3" class="hidden1">
  <br>
            <div class="inputs">
                <p class="choose-service">URN</p>
                <button class="choose-btn" onclick="window.location.href='../services/urns.php'">Choose Urn</button>
            </div>
            <br><hr>
            <br>
            <div class="inputs">
                <p class="choose-service">MEMORIAL GATHERING ARRANGEMENTS</p>
                <br>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="radio-container">
                <input type="radio" id="facility-funeralhome5" class="services-option" name="facility" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option5')">
                <label for="facility-funeralhome5" class="label-name">Memorial Gathering at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home5" class="services-option" name="facility" value="Burial Service" onclick="optionFacility('facility-option6')">
                <label for="facility-home5" class="label-name">Memorial Gathering at Home</label>
            </div>
            </form>
 
            <br>
            
    <div id="facility-option5" class="hidden2">    
            <div class="inputs">
                <p class="choose-service">FACILITY</p>
                <button class="choose-btn" onclick="window.location.href='../services/facilities.php'">Choose Facility</button>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days5">Number of Days</label>
                    <input type="number" id="number-days5" name="number-days5" required>
                </div>
            </div>
        </div>
            <br>
            
        <div id="facility-option6" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="address6">Address</label>
                    <input type="text" id="address6" name="address6" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days6">Number of Days</label>
                    <input type="number" id="number-days6" name="number-days6" required>
                </div>
            </div>
        </div>
        </div>
        <br><hr>
        <br>
        <p class="choose-service">CONTACT PERSON PERSONAL INFORMATION</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="contact-firstname3">First Name</label>
                <input type="text" id="contact-firstname3" name="contact-firstname3" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="contact-lastname3">Last Name</label>
                <input type="text" id="contact-lastname3" name="contact-lastname3" placeholder="Dela Cruz" required>
            </div>
        </div>

        <div class="inputs">
            <label for="number3">Contact Number</label>
            <input type="number" id="number3" name="number3" placeholder="09301938102" required>
        </div>

        <div class="inputs">
            <label for="email3">Email</label>
            <input type="email" id="email3" name="email3" placeholder="perpetualfuneralservices@gmail.com" required>
        </div>

        <div class="inputs">
            <label for="relationship">Relationship to the Beneficiary</label>
            <select id="relationship3" name="relationship3" required>
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

<!-- DIRECT CREMATION SERVICE -->
<div id="option4" class="hidden1">
  <br>
            <div class="inputs">
                <p class="choose-service">URN</p>
                <button class="choose-btn" onclick="window.location.href='../services/urns.php'">Choose Urn</button>
            </div>
            <br><hr>
            <br>
        <p class="choose-service">CONTACT PERSON PERSONAL INFORMATION</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="contact-firstname4">First Name</label>
                <input type="text" id="contact-firstname4" name="contact-firstname4" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="contact-lastname4">Last Name</label>
                <input type="text" id="contact-lastname4" name="contact-lastname4" placeholder="Dela Cruz" required>
            </div>
        </div>

        <div class="inputs">
            <label for="number4">Contact Number</label>
            <input type="number" id="number4" name="number4" placeholder="09301938102" required>
        </div>

        <div class="inputs">
            <label for="email4">Email</label>
            <input type="email" id="email4" name="email4" placeholder="perpetualfuneralservices@gmail.com" required>
        </div>

        <div class="inputs">
            <label for="relationship">Relationship to the Beneficiary</label>
            <select id="relationship4" name="relationship4" required>
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
      <div class="inputs">
            <div class="submit-btn-container">
              <button class="submit-btn" onclick="window.location.href='planning-services-form.php'">SUBMIT</button>
              </div>
      </div>

</div>
</div>

<script  src="../js/forms.js"></script>

</body>
</html>
