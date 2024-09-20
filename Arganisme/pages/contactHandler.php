
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
    "subject" => "",
    "message" => "",
    "firstnameERR" => "",
    "nameERR" => "",
    "emailERR" => "",
    "phoneERR" => "",
    "subjectERR" => "",
    "messageERR" => "",
    "isSuccess" => false,
);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $array["firstname"] = verifyinput($_POST['firstname']);
    $array["name"] = verifyinput($_POST['name']);
    $array["email"] = verifyinput($_POST['email']);
    $array["phone"] = verifyinput($_POST['phone']);
    $array["subject"] = verifyinput($_POST['subject']);
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
    if (empty($array["subject"])) {
        $array["subjectERR"] = "We want to know your subject!";
        $array["isSuccess"] = false;
    }
    if (empty($array["message"])) {
        $array["messageERR"] = "We want to know what you want to say!";
        $array["isSuccess"] = false;
    }

    if ($array["isSuccess"]) {
        $statement = $connection->prepare("INSERT INTO contact (firstname, name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $array["firstname"],
            $array["name"],
            $array["email"],
            $array["phone"],
            $array["subject"],
            $array["message"]
        ]);
        DataBase::disconnect();
    }

    echo json_encode($array);
    exit;  
} else {
    header("Location: contact.php");
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
