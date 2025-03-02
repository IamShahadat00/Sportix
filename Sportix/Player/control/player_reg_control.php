<?php

require_once "../model/palyer_db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $email = trim($_POST['email']);
    $dob  = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $Player_cat = trim($_POST['Player_cat']);
    $Player_role = trim($_POST['Player_role']);
    $phone = trim($_POST['phone']);
    $photo = trim($_POST['photo']);

    if (empty($username) || empty($password) || empty($confirm_password) || empty($email) || empty($dob) || empty($gender) || empty($Player_cat) || empty($Player_role) || empty($phone) || empty($photo))
{
    die( "ALL FIELDS ARE REQUIRED ");
}

if($password !== $confirm_password)
{
    die("PASSWORD DOES NOT MATCH!");
}

if (!preg_match("/^[0-9]$/" , $phone))
{
    die("INVALID PHONE NUMBER!... THE NUMBER MUST BE 11 DIGITS");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("INVALID EMAIL FORMAAT!");
}

if (empty($gender)) {
    die("MUST SELECT A GENDER!");
}

$db = new Db();
if($db->insertplayer($username,$email, $password, $phone, $Player_cat,$Player_role, $dob, $photo, $gender))
{
    echo "REGISTRATION SUCCESSFUL";
    exit();
}
else
{
    die("REGISTRATION FAILED");
}
}
?>