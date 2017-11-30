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
            <input type="text" id="FirstName" name="FirstName" value="<?php echo $firstName;?>">
            <span class="error"><?php echo $modelState["FirstNameRequired"]; ?></span>
        </div>
        <div class>
            <label for="LastName">Familienaam</label>
            <input type="text" id="LastName" name="LastName" value="<?php echo $lastName;?>">
            <span class="error"><?php echo $modelState["LastNameRequired"] ?></span>
        </div>
        <div class>
            <label for="Email">E-mail</label>
            <input type="text" id="Email" name="Email" value="<?php echo $email;?>">
            <span class="error"><?php echo $modelState["EmailRequired"] ?></span>
            <span class="error"><?php echo $modelState["EmailValid"] ?></span>
        </div>
        <div class>
            <label for="password">Wachtwoord</label>
            <input type="text" id="Password1" name="Password1" value="<?php echo $password1;?>">
            <span class="error"><?php echo $modelState["Password1Required"] ?></span>
            <span class="error"><?php echo $modelState["Password1Valid"] ?></span>
        </div>
        <div class>
            <label for="PasswordConfirm">Wachtwoord bevestigen</label>
            <input type="text" id="Password2" name="Password2" value="<?php echo $password2;?>">
            <span class="error"><?php echo $modelState["Password2Required"] ?></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Adresgegevens</legend>
        <div class>
            <label for="Address1">Adres 1</label>
            <input type="text" id="Address1" name="Address1" value="<?php echo $address1;?>">
            <span class="error"><?php echo $modelState["Address1Required"] ?></span>
        </div>
        <div class>
            <label for="Address2"></label>
            <input type="text" id="Address2" name="Address2">
        </div>
        <div class>
            <label for="City"></label>
            <input type="text" id="City" name="City" value="<?php echo $city;?>">
            <span class="error"><?php echo $modelState["CityRequired"] ?></span>
        </div>
        <div class>
            <label for="PostalCode">Postcode</label>
            <input type="text" id="PostalCode" name="PostalCode" value="<?php echo $postalCode;?>">
            <span class="error"><?php echo $modelState["PostalCodeRequired"] ?></span>
        </div>
        <div class>
            <label for="Country">Land</label>
            <select id="Country" name="Country">
                <option <?php echo ($country='Be' ? 'selected' : '') ?> value="Be">België</option>
                <option value="Nl">Nederland</option>
                <option value="Tr">Turkije</option>
                <option value="Mg">Madagascar</option>
            </select>
            <span class="error"><?php echo $modelState["CountryRequired"] ?></span>
        </div>
    </fieldset>
    <fieldset>
        <legend>Persoonlijke gegevens</legend>
        <div class>
            <label for="Mobile">GSM</label>
            <input type="text" id="Mobile" name="Mobile">
        </div>
        <div class>
            <label for="Birthday">Geboortedatum</label>
            <input type="date" id="Birthday" name="Birthday">
        </div>
        <div class>
            <label for="Satisfied">Hoe tevreden ben je?</label>
            <input type="range" id="Satisfied" name="Satisfied">
        </div>

        <div class>
            <label for="">Opleiding</label>
            <select id="Course" name="Course">
                <option <?php echo ($course='hboi' ? 'selected' : ''); ?> value="hboi">HBO Informatica</option>
                <option <?php echo ($course='hbob' ? 'selected' : ''); ?> value="hbob">HBO Boekhouden</option>
                <option <?php echo ($course='hbow' ? 'selected' : ''); ?> value="hbow">HBO Winkelmanagement</option>
            </select>
        </div>
        <div class>
            <label for="">Module</label>
            <select id="Module" name="Module">
                <option <?php echo ($module='A5' ? 'selected' : ''); ?> value="A5">Programmeren 1</option>
                <option <?php echo ($module='A6' ? 'selected' : ''); ?> value="A6">Programmeren 2</option>
                <option <?php echo ($module='B2' ? 'selected' : ''); ?> value="B2">Programmeren 3</option>
            </select>
        </div>
        <div class>
            <input name="PHP" value='PHP' id="ProgrammingLanguage" type="checkbox"
                <?php echo ($programmingLanguage='PHP' ? 'checked' : ''); ?>>
            <label for="PHP">PHP</label>
            <input name="CSharp" value='C#' id="CSharp" type="checkbox"
                <?php echo ($programmingLanguage='CSharp' ? 'checked' : ''); ?>>
            <label for="CSharp">C#</label>
            <input name="JS" value='JS' id="JS" type="checkbox"
                <?php echo ($programmingLanguage='JS' ? 'checked' : ''); ?>>
            <label for="JS">JavaScript</label>
        </div>
        <div class>
            <input name="Computer" value='NoteBook' id="NoteBook" type="radio"
                <?php echo ($computer='NoteBook' ? 'checked' : ''); ?>>
            <label for="NoteBook">Notebook</label>
            <input name="Computer" value='SchoolComputer' id="SchoolComputer" type="radio"
                <?php echo ($computer='SchoolComputer' ? 'checked' : ''); ?>>
            <label for="SchoolComputer">School Computer</label>
        </div>
    </fieldset>
    <button type="submit" value="register" name="action">Verzenden</button>
</form>
</body>
</html>