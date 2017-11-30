<?php
    // var_dump($_POST);
    if (isset($_POST['firstName'])) {
        $data = stripslashes($_POST['firstName']);
        $data = htmlspecialchars($data);  
        $data = trim($data);
        if (empty($data)) {
            $modelState['firstNameRequired'] = 'Voornaam is verplicht!';
        } else {
            // doe er iets mee, bv opslaan in database
        }
    }
    
    function required($key){
        $data = stripslashes($_POST['firstName']);
        $data = htmlspecialchars($data);  
        $data = trim($data);
        if (empty($data)) {
            $modelState[{$key}'Required'] = 'Voornaam is verplicht!';
        } else {
            // doe er iets mee, bv opslaan in database
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">      
        <fieldset>
            <legend>Accountgegevens</legend>
            <div class>
                <label for="firstName">Voornaam</label>
                <input type="text" id="firstName" name="firstName" value= "<?php echo $_POST['firstName'];?>">
                <span class="error"><?php echo $modelState["firstNameRequired"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="lastName">Familienaam</label>
                <input type="text" id="lastName" name="lastName">
                <span class="error"><?php echo $modelState["lastNameRequired"]?></span>
             </div>
            <legend></legend>
            <div class>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
                <span class="error"><?php echo $modelState["emailRequired"]?></span>
                <span class="error"><?php echo $modelState["emailValid"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="password">Wachtwoord</label>
                <input type="text" id="password" name="password">
                <span class="error"><?php echo $modelState["passwordRequired"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="passwordConfirmed">Wachtwoord Bevestigen</label>
                <input type="text" id="passwordConfirmed" name="passwordConfirmed">
                <span class="error"><?php echo $modelState["passwordRequired"]?></span>
                <span class="error"><?php echo $modelState["passwordValid"]?></span>
           </div>
            
        </fieldset>
        <fieldset>
            <legend>Adresgegevens</legend>
            <div class>
                <label for="address1">Adres 1</label>
                <input type="text" id="address1" name="address1">
                <span class="error"><?php echo $modelState["address1Required"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="address2">Adres 2</label>
                <input type="text" id="address2" name="address2">
                <span class="error"></span>
            </div>
            <legend></legend>
            <div class>
                <label for="city">Stad</label>
                <input type="text" id="city" name="city">
                <span class="error"><?php echo $modelState["cityRequired"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="postalCode">Postcode</label>
                <input type="text" id="postalCode" name="postalCode">
                <span class="error"><?php echo $modelState["postalCodeRequired"]?></span>
            </div>
            <legend></legend>
            <div class>
                <label for="country">Kies een land</label>
                <select id="country" name="country">
                    <option value=BE>Belgie</option>
                    <option value=GB>Groot-Brittannie</option>
                    <option value=FR>Frankrijk</option>
                    </select>
                <span class="error"></span>
            </div>
            
        </fieldset>
        <fieldset>
            <legend>Persoonlijke gegevens</legend>
            <div class>
                <label for="mobile">GSM</label>
                <input type="text" id="mobile" name="mobile">
                <span class="error"></span>
            </div>
            <legend></legend>
            <div class>
                <label for="birthday">Geboortedatum</label>
                <input type="date" id="birthday" name="birthday">
                <span class="error"></span>
            </div>
            <legend></legend>
            <div class>
                <label for="happyMeter">Hoe tevreden ben je?</label>
                <input type="range" id="happyMeter" name="happyMeter">
                <span class="error"></span>
            </div>
            <legend></legend>
            <div class>
                <label for="department">Kies een afdeling</label>
                <select id="department" name="department">
                    <option value=hboi>HBO Informatica</option>
                    <option value=hbob>HBO Boekhouden</option>
                    <option value=hbow>HBO Winkelmanagement</option>
                    </select>
                <span class="error"></span>
            </div>
            <legend></legend>
            <div class>
                <label for="module">Kies een module</label>
                <select id="module" name="module">
                    <option value=PR3>Programmeren 3</option>
                    <option value=PR4>Programmeren 4</option>
                    <option value=PR5>Programmeren 5</option>
                    </select>
                <span class="error"></span>
            </div>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>