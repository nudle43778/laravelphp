<?php
// controller
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
$address1 = required('Address1', 'Adres 1', $modelState);
$city = required('City', 'Stad', $modelState);
$postalCode = required('PostalCode', 'Postcode', $modelState);
$country = required('Country', 'Land', $modelState);
$password1 = required('$password1', 'Paswoord', $modelState);
$password2 = required('$password2', 'Paswoord bevestiging', $modelState);

$address2 = getValue('Address2');
$birthday = getValue('Birthday');
$satisfied = getValue('Satisfied');
$computer = getValue('Computer');
$programmingLangue = getValue('ProgrammingLanguage');
$module = getValue('Module');
$course = getValue('Course');



//var_dump($modelState);
//var_dump($key);