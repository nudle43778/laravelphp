<?php
// controller
// var_dump($_POST);
$modelState = array();


function required($key, $name, &$modelStatePassThrough) {
    if (isset($_POST[$key])) {
        $data = stripslashes($_POST[$key]);
        $data = htmlspecialchars($data);
        $data = trim($data);
        if (empty($data)) {
            $modelStatePassThrough["{$key}Required"] = "$name is verplicht";
        } else {
            $modelStatePassThrough["{$key}Required"] = '';
            // doe er iets mee, bv opslaan in database
        }
    } else {
        $modelStatePassThrough["{$key}Required"] = "$name is verplicht";
        $data = '';
    }
    return $data;
}

function getValue($key) {
    if (isset($_POST[$key])) {
        return $_POST[$key];
    } else {
        return '';
    }
}


// make model
$firstName = required('FirstName', 'Voornaam', $modelState);
$lastName = required('LastName', 'Familienaam', $modelState);
$email = required('Email', 'E-mail', $modelState);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $modelState["EmailValid"] = 'Ongeldig enmail adres!';
}  else {
    $modelState["EmailValid"] = '';

}
$address1 = required('Address1', 'Adres 1', $modelState);
$city = required('City', 'Stad', $modelState);
$postalCode = required('PostalCode', 'Postcode', $modelState);
$country = required('Country', 'Land', $modelState);
$password1 = required('Password1', 'Paswoord', $modelState);
$password2 = required('Password2', 'Paswoord bevestiging', $modelState);
if (!(empty($password1) or empty($password2))) {
    if ($password1 != $password2) {
        $modelState["Password1Valid"] = 'Paswoorden moeten gelijk zijn';
    } else {
        $modelState["Password1Valid"] = '';
    }
} else {
    $modelState["Password1Valid"] = '';
}

$address2 = getValue('Adress2');
$birthday = getValue('Birthday');
$satisfied = getValue('Satisfied');
$computer = getValue('Computer');
$programmingLanguage = getValue('ProgrammingLanguage');
$module = getValue('Module');
$course = getValue('Course');

$modelStateValid = true;
foreach($modelState as $key => $value) {
    if (!empty($value)) {
        $modelStateValid = false;
        break;
    }
}

if ($modelStateValid) {
    $person = $firstName . ';' .
        $lastName . ';' .
        $email . ';' .
        $address1 . ';' .
        $city . ';' .
        $postalCode . ';' .
        $country . ';' .
        $password1 . ';' .
        $password2 . ';' .
        $address2 .  ';' .
        $birthday . ';' .
        $satisfied . ';' .
        $computer . ';' .
        $programmingLanguage . ';' .
        $module . ';' .
        $course;
    file_put_contents('data/person.txt',$person, FILE_APPEND);
}
//var_dump($modelState);
//var_dump($key);