
<?php

include_once("utilities/validation.php");


$firstname = $_POST['firstname'];
//echo $firstname, "\n";

$lastname = $_POST['lastname'];
//echo $lastname, "\n";

$middlename = $_POST['middlename'];
//echo $middlename, "\n";

$address = $_POST['address'];
//echo $address, "\n";

$date = $_POST['date'];
//echo $date, "\n";
    
$place = $_POST['place'];
//echo $place, "\n";

$gender = $_POST['gender'];
//echo $gender, "\n";

$guardian = $_POST['guardian'];
//echo $guardian, "\n";

$contact = $_POST['contact'];
//echo $contact, "\n";

$status = $_POST['status'];
//echo $status, "\n";

$yearlvl = $_POST['yearlvl'];
//echo $yearlvl, "\n";

$course = $_POST['course'];
//echo $course, "\n";

$schoolyear = $_POST['schoolyear'];
//echo $schoolyear, "\n";

$email = $_POST['email'];
//echo $email, "\n";

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];


if(isEmpty($firstname) && isEmpty($lastname) && isEmpty($middlename) && isEmpty($place) && isEmpty($guardian) && isEmpty($contact) && isEmpty($status) && isEmpty($schoolyear)
 && isCorrectLentgh($firstname) && isCorrectLentgh($lastname)){
    echo "Inputs are good, <br>";
}
else{
    echo "Inputs are bad / Must be proper length, <br>";
}

if(onlyNumbers($contact) && numberFormat($contact)){
    echo "\nContact number and contact format is good, <br>";
}
else{
    echo "\nContact number format is bad, <br>";
}

if(notStartWithNumber($firstname) && notStartWithNumber($lastname) && notStartWithNumber($middlename) && notStartWithNumber($guardian) && notStartWithNumber($status)  && notStartWithNumber($email)){
    echo "\nGood kaayo!, <br>";
}
else{
    echo "\nShould not start with a number, <br>";
}

if(notStartWithSpecialCharacter($firstname) && notStartWithSpecialCharacter($lastname) && notStartWithSpecialCharacter($middlename) && notStartWithSpecialCharacter($guardian) && notStartWithSpecialCharacter($status)){
    echo "\nOKEEY KAAYO, <br>";
}
else{
    echo "\nNo DI PWEDE MAG START OG SPECIAL CHARACTER, <br>";
}

if (notStartWithHtmlTags($firstname) && notStartWithHtmlTags($lastname) && notStartWithHtmlTags($middlename) &&
notStartWithHtmlTags($guardian) && notStartWithHtmlTags($contact) && notStartWithHtmlTags($status) && notStartWithHtmlTags($schoolyear) && notStartWithHtmlTags($email)){
    echo "\nGOOD BCUZ NO HTMLTAGS, <br>";
}
else{
    echo "\nSHOULD NOT BE START WITH HTML TAGS!, <br>";
}

if(validEmail($email)){
    echo "\n$email is a valid Email, <br>";
}
else{
    echo "\n$email is not a valid Email, <br>";
}

if(validDate($date)){
    echo "\nValid Date, <br>";
}
else {
    echo "\nNot a valid date, <br>";
}



?>
