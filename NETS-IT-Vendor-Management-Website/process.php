<?php
include("connect.php");

if(isset($_POST["submit"])){
$company = $_POST["company"];
$email = $_POST["email"];
$title = $_POST["title"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$pnumber = $_POST["pnumber"];
$country = $_POST["country"];
$address = $_POST["address"];
$interest = $_POST["interest"];
$sql = "INSERT INTO vendor(company, email, title, fname, lname, pnumber, country,address, interest)
 VALUES('$company', '$email', '$title','$fname', '$lname', '$pnumber', '$country', '$address','$interest')";

if(mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION["order"] = "submitted";
    header("Location: admin.php");
} else {
    echo "wrong";
}

}

?>