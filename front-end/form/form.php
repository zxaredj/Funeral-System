<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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

<div class="main">
    <div class="form">
        <h1 class="title">PICK-UP OF DECEASED FORM</h1>
        <p class="form-intro">Provide information about picking up the deceased before proceeding to funeral arrangements.</p>
        <p class="form-intro">After submitting the form, wait for the confirmation.</p>  
       
        <br><br>
        <p class="docu-text">Please upload the following documents:</p>
        
        <form action="" method="POST">
        <div class="docu-box1">
            <p class="docu-name">Death Certificate</p>
            <input type="file" name="death-cert" id="death-cert">
        </div>
        <div class="docu-box2">
            <p class="docu-name">Release Paper</p>
            <input type="file" name="release-paper" id="release-paper">
        </div>
        <br>
        
        <p class="docu-text">Please input the following information:</p>

            <p class="input-title">Name of Deceased</p>
            <input type="text" name="deceased-name" id="deceased-name" class="form-field1">

            <p class="input-title">Pick-up Location</p>
            <input type="text" name="location" id="location" class="form-field1">
        
        <div class="pickup-box">
        <div class="pickup-date">
            <p class="input-title">Pick-up date</p>
            <input type="date" name="pickup-date" id="pickup-date" class="form-field2">
        </div>
        

        <div class="pickup-time">
            <p class="input-title">Pick-up time</p>
            <input type="time" name="pickup-time" id="pickup-time" class="form-field2">
        </div>
        </div>

        <br>
        <h3>Contact Person</h3>
        <br> 

        <div class="contact-box">    
           <div class="first-box"> 
            <p class="input-title">First Name</p>
                <input type="text" name="first-name" id="first-name" class="form-field1">
            </div>
            
            <div class="last-box">
                <p class="input-title">Last Name</p>
                <input type="text" name="first-name" id="last-name" class="form-field1">
            </div>

         </div>
            <p class="input-title">Contact Number</p>
            <input type="number" name="contact-number" id="contact-number" class="form-field1">

            <p class="input-title">Email</p>
            <input type="email" name="email" id="email" class="form-field1">

            <p class="input-title">Relationship to the deceased</p>
            <select name="relationship" id="relationship" class="relationship">
                <option value="" disabled selected hidden>-- Choose --</option>
                <option value="mother">Mother</option>
                <option value="father">Father</option>
                <option value="sister">Sister</option>
                <option value="brother">Brother</option>
                <option value="grandmother">Grandmother</option>
                <option value="grandfather">Grandfather</option>
                <option value="aunt">Aunt</option>
                <option value="uncle">Uncle</option>
                <option value="cousin">Cousin</option>
                <option value="niece">Niece</option>
                <option value="nephew">Nephew</option>
                <option value="friend">Friend</option>
                <option value="others">Others</option>
            </select>
    
            <button type="submit" value="submit" class="submit-btn">SUBMIT</button>
        </form>
    </div>
</div>

</body>
</html>