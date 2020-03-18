<?php



function isEmpty($value = null){
        $cleanValue = trim($value);
        return(strlen($cleanValue) <= 0) ? false: true;
    }


function onlyNumbers($value = null){
    return(is_numeric($value)) ? true : false;
}

function numberFormat($value = null){
    return(preg_match("((^(\+)(\d){12}$)|(^\d{11}$))", $value)) ? true : false;
}
   
function isCorrectLentgh($value = null){
    return(strlen($value) >= 2 && strlen($value) <= 15 ) ? true: false;
}

function notStartWithNumber($value = null){
    $firstChar = substr($value, 0, 1);
    return(is_numeric($firstChar)) ? false : true;
}

function notStartWithSpecialCharacter($value = null){
    $firstChar = substr($value, 0, 1);
    return(preg_match('/[^a-zA-Z\d]/', $firstChar)) ? false : true;
}
function notStartWithHtmlTags($value = null){
    return(preg_match('/<\s?[^\>]*\/?\s?>/i', $value)) ? false : true;
}

function validEmail($value = null){
    
    return(filter_var($value, FILTER_VALIDATE_EMAIL)) ? true : false;
}

function validDate($value){
    return (preg_match('/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/',$value)) ? true : false;
}







?>
