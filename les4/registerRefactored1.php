<?php
    // var_dump($_POST);
    $modelState = array();
    
    function required($key, $name, &$modelStatePassThrough) {
       $data = stripslashes($_POST[$key]);
        $data = htmlspecialchars($data);  
        $data = trim($data);
        if (empty($data)) {
           $modelStatePassThrough["{$key}Required"] = "$name is verplicht";
       } else {
            // doe er iets mee, bv opslaan in database
        }
        $key = 'plopperdeplop';
        return $data;
    }
    
    $firstName = required('firstName', 'Voornaam', $modelState);
    $modelStateEenAnder = array();
    $lastName = required('lastName', 'Familienaam', $modelStateEenAnder);

        var_dump($modelState);
             //var_dump($key);
    
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
    <!-- form>(fieldset>(legend+div.class>label[for=]+input#[name=]+span.error)*5)*3 -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>Accountgegevens</legend>
            <div class>
                <label for="firstName">Voornaam</label>
                <input type="text" id="firstName" name="firstName" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ;?>">
                <span class="error"><?php echo $modelState["firstNameRequired"]; ?></span>
            </div>
            <div class>
                <label for="LastName">Familienaam</label>
                <input type="text" id="LastName" name="lastName">
                <span class="error"><?php echo $modelState["lastNameRequired"] ?></span>
            </div>
            <div class>
                <label for="Email">E-mail</label>
                <input type="text" id="Email" name="Email">
                <span class="error"><?php echo $modelState["emailRequired"] ?></span>
                <span class="error"><?php echo $modelState["emailValid"] ?></span>
            </div>
            <div class>
                <label for="password">Wachtwoord</label>
                <input type="text" id="password" name="password">
                <span class="error"><?php echo $modelState["passwordRequired"] ?></span>
               <span class="error"><?php echo $modelState["passwordValid"] ?></span>
            </div>
             <div class>
                <label for="passwordConfirm">Wachtwoord bevestigen</label>
                <input type="text" id="passwordConfirm" name="passwordConfirm">
                <span class="error"><?php echo $modelState["passwordRequired"] ?></span>
             <span class="error"><?php echo $modelState["passwordValid"] ?></span>
              </div>
        </fieldset>
        <fieldset>
            <legend>Adresgegevens</legend>
            <div class>
                <label for="address1">Adres 1</label>
                <input type="text" id="address1" name="address1">
             <span class="error"><?php echo $modelState["address1Required"] ?></span>
            </div>
            <div class>
                <label for="address2"></label>
                <input type="text" id="address2" name="address2">
            </div>
            <div class>
                <label for="city"></label>
                <input type="text" id="city" name="city">
             <span class="error"><?php echo $modelState["cityRequired"] ?></span>
            </div>
            <div class>
                <label for="PostalCode">Postcode</label>
                <input type="text" id="PostalCode" name="PostalCode">
              <span class="error"><?php echo $modelState["postalCodeRequired"] ?></span>
           </div>
            <div class>
                <label for="Country">Land</label>
                <select id="Country" name="Country">
                    <option value="Be">België</option>
                    <option value="Nl">Nederland</option>
                    <option value="Tr">Turkije</option>
                    <option value="Mg">Madagascar</option>
                </select>
              <span class="error"><?php echo $modelState["countryRequired"] ?></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Persoonlijke gegevens</legend>
            <div class>
                <label for="mobile">GSM</label>
                <input type="text" id="mobile" name="mobile">
             </div>
            <div class>
                <label for="birthday">Geboortedatum</label>
                <input type="date" id="birthday" name="birthday">
             </div>
            <div class>
                <label for="satisfied">Hoe tevreden ben je?</label>
                <input type="range" id="satisfied" name="satisfied">
              </div>
            <div class>
                <label for=""></label>
                <input type="text" id="" name="">
                <span class="error"></span>
            </div>
            <div class>
                <label for="">Opleiding</label>
                <select id="Country" name="Country">
                    <option value="hboi">HBO Informatica</option>
                    <option value="hbob">HBO Boekhouden</option>
                    <option value="hbow">HBO Winkelmanagement</option>
                 </select>
            </div>
            <div class>
                <label for="">Module</label>
                <select id="Country" name="Country">
                    <option value="A5">Programmeren 1</option>
                    <option value="A6">Programmeren 2</option>
                    <option value="B2">Programmeren 3</option>
                 </select>
            </div>
        </fieldset>
        <button type="submit" value="register" name="action">Verzenden</button>
    </form>
</body>
</html>