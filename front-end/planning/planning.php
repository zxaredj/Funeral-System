<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
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
        <h1 class="title">PLANNING FORM</h1>
        <p class="form-intro">Take charge of your final arrangements by planning ahead, ensuring your loved ones are spared the burden and your wishes are honored with peace of mind.</p>

       
        <br><br>
        <p class="docu-text">Please input the following information:</p>

        <form action="" method="POST">
       <p class="planning-title">Benefactor's Personal Information</p>
        <br><br>
        <div class="contact-box">    
           <div class="first-box"> 
            <p class="input-title">First Name</p>
                <input type="text" name="benefactor-first-name" id="benefactor-first-name" class="form-field1">
            </div>
            
            <div class="last-box">
                <p class="input-title">Last Name</p>
                <input type="text" name="benefactor-last-name" id="benefactor-last-name" class="form-field1">
            </div>
         </div>

            <p class="input-title">Contact Number</p>
            <input type="number" name="benefactor-contact" id="benefactor-contact" class="form-field1">

            <p class="input-title">Address</p>
            <input type="text" name="benefactor-address" id="benefactor-address" class="form-field1">
            
            <p class="input-title">Email</p>
            <input type="email" name="benefactor-email" id="benefactor-email" class="form-field1">

            <p class="input-title">This plan is for my:</p>
            <select name="plan-for" id="plan-for" class="relationship">
                <option value="" disabled selected hidden>-- Choose --</option>
                <option value="self">Self</option>
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
        
        <br>
        <p class="planning-title">Beneficiary's Personal Information</p>
        <br><br>

        <div class="contact-box">    
           <div class="first-box"> 
            <p class="input-title">First Name</p>
                <input type="text" name="beneficiary-first-name" id="beneficiary-first-name" class="form-field1">
            </div>
            
            <div class="last-box">
                <p class="input-title">Last Name</p>
                <input type="text" name="beneficiary-last-name" id="beneficiary-last-name" class="form-field1">
            </div>
         </div>

         <p class="input-title">Gender</p>
            <select name="beneficiary-gender" id="beneficiary-gender" class="relationship">
                <option value="" disabled selected hidden>-- Choose --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>

            <p class="input-title">Birthdate</p>
            <input type="date" name="beneficiary-birthdate" id="beneficiary-birthdate" class="form-field1">

            <p class="input-title">Address</p>
            <input type="text" name="beneficiary-address" id="beneficiary-address" class="form-field1">
            <br>
            <button class="submit-btn">NEXT</button>
        </form>
    </div>
</div>

</body>
</html>