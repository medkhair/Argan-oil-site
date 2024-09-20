<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');  

require "../Database/db.php";

$connection = DataBase::connect();
$array = array(
    "firstname" => "",
    "name" => "",
    "email" => "",
    "phone" => "",
    "country" => "",
    "city" => "",
    "adress" => "",
    "product" => "",
    "message" => "",
    "firstnameERR" => "",
    "nameERR" => "",
    "emailERR" => "",
    "phoneERR" => "",
    "countryERR" => "",
    "cityERR" => "",
    "adressERR" => "",
    "productERR" => "",
    "messageERR" => "",
    "isSuccess" => false,
);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $array["firstname"] = verifyinput($_POST['firstname']);
    $array["name"] = verifyinput($_POST['name']);
    $array["email"] = verifyinput($_POST['email']);
    $array["phone"] = verifyinput($_POST['phone']);
    $array["country"] = verifyinput($_POST['country']);
    $array["city"] = verifyinput($_POST['city']);
    $array["adress"] = verifyinput($_POST['adress']);
    $array["product"] = verifyinput($_POST['product']);
    $array["message"] = verifyinput($_POST['message']);
    $array["isSuccess"] = true;

    if (empty($array["firstname"])) {
        $array["firstnameERR"] = "We want to know your first name!";
        $array["isSuccess"] = false;
    }
    if (empty($array["name"])) {
        $array["nameERR"] = "We want to know your name!";
        $array["isSuccess"] = false;
    }
    if (!isEmail($array["email"])) {
        $array["emailERR"] = "That's not an email!";
        $array["isSuccess"] = false;
    }
    if (!isPhone($array["phone"])) {
        $array["phoneERR"] = "That's not a phone number!";
        $array["isSuccess"] = false;
    }
    if (empty($array["country"])) {
        $array["countryERR"] = "We want to know your country!";
        $array["isSuccess"] = false;
    }
    if (empty($array["city"])) {
        $array["cityERR"] = "We want to know your city!";
        $array["isSuccess"] = false;
    }
    if (empty($array["adress"])) {
        $array["adressERR"] = "We want to know your address!";
        $array["isSuccess"] = false;
    }
    if (empty($array["product"])) {
        $array["productERR"] = "We want to know your product!";
        $array["isSuccess"] = false;
    }
    if (empty($array["message"])) {
        $array["messageERR"] = "We want to know what you want to say!";
        $array["isSuccess"] = false;
    }

    if ($array["isSuccess"]) {
        $statement = $connection->prepare("INSERT INTO orders (firstname, name, email, phone, country, city, shippingAdress, product, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $array["firstname"],
            $array["name"],
            $array["email"],
            $array["phone"],
            $array["country"],
            $array["city"],
            $array["adress"],
            $array["product"],
            $array["message"]
        ]);
        DataBase::disconnect();
    }

    echo json_encode($array);
    exit;  
} else {
    header("Location: order.php");
    exit;
}

function verifyinput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function isPhone($var){
    return preg_match("/^[0-9 ]*$/", $var);
}
?>
