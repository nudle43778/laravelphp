<?php
include ('code/helpers.php');
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
            <input type="text" id="firstName" name="firstName" value="<?php echo $firstName;?>">
            <span class="error"><?php echo $modelState["firstNameRequired"]; ?></span>
        </div>
        <div class>
            <label for="LastName">Familienaam</label>
            <input type="text" id="LastName" name="lastName" value="<?php echo $lastName;?>">
            <span class="error"><?php echo $modelState["lastNameRequired"] ?></span>
        </div>
        <div class>
            <label for="Email">E-mail</label>
            <input type="text" id="Email" name="Email" value="<?php echo $email;?>">
            <span class="error"><?php echo $modelState["emailRequired"] ?></span>
            <span class="error"><?php echo $modelState["emailValid"] ?></span>
        </div>
        <div class>
            <label for="password">Wachtwoord</label>
            <input type="text" id="password" name="password" value="<?php echo $password1;?>">
            <span class="error"><?php echo $modelState["passwordRequired"] ?></span>
            <span class="error"><?php echo $modelState["passwordValid"] ?></span>
        </div>
        <div class>
            <label for="passwordConfirm">Wachtwoord bevestigen</label>
            <input type="text" id="passwordConfirm" name="passwordConfirm" value="<?php echo $password2;?>">
            <span class="error"><?php echo $modelState["passwordRequired"] ?></span>
            <span class="error"><?php echo $modelState["passwordValid"] ?></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Adresgegevens</legend>
        <div class>
            <label for="address1">Adres 1</label>
            <input type="text" id="address1" name="address1"value="<?php echo $address1;?>">
            <span class="error"><?php echo $modelState["address1Required"] ?></span>
        </div>
        <div class>
            <label for="address2"></label>
            <input type="text" id="address2" name="address2">
        </div>
        <div class>
            <label for="city"></label>
            <input type="text" id="city" name="city" value="<?php echo $city;?>">
            <span class="error"><?php echo $modelState["cityRequired"] ?></span>
        </div>
        <div class>
            <label for="PostalCode">Postcode</label>
            <input type="text" id="PostalCode" name="PostalCode" value="<?php echo $postalCode;?>">
            <span class="error"><?php echo $modelState["postalCodeRequired"] ?></span>
        </div>
        <div class>
            <label for="Country">Land</label>
            <select id="Country" name="Country">
                <option <?php echo ($country='Be' ? 'selected' : '') ?> value="Be">België</option>
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
            <select id="Course" name="Course">
                <option <?php echo ($course='hboi' ? 'selected' : ''); ?> value="hboi">HBO Informatica</option>
                <option value="hbob">HBO Boekhouden</option>
                <option value="hbow">HBO Winkelmanagement</option>
            </select>
        </div>
        <div class>
            <label for="">Module</label>
            <select id="Module" name="Module">
                <option <?php echo ($module='A5' ? 'selected' : ''); ?> value="A5">Programmeren 1</option>
                <option value="A6">Programmeren 2</option>
                <option value="B2">Programmeren 3</option>
            </select>
        </div>
        <div class>
            <input name="PHP" value='PHP' id="ProgrammingLanguage" type="checkbox"
                <?php echo ($programmingLanguage='PHP' ? 'selected' : ''); ?>>
            <label for="PHP">PHP</label>
            <input name="CSharp" value='C#' id="CSharp" type="checkbox">
            <label for="CSharp">C#</label>
            <input name="JS" value='JS' id="JS" type="checkbox">
            <label for="JS">JavaScript</label>
        </div>
        <div class>
            <input name="Computer" value='NoteBook' id="NoteBook" type="radio"
                <?php echo ($computer='NoteBook' ? 'selected' : ''); ?>>
            <label for="NoteBook">Notebook</label>
            <input name="Computer" value='SchoolComputer' id="SchoolComputer" type="radio">
            <label for="SchoolComputer">School Computer</label>
        </div>
    </fieldset>
    <button type="submit" value="register" name="action">Verzenden</button>
</form>
</body>
</html>