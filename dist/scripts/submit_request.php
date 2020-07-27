<?php
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
$check = filter_input(INPUT_POST, 'check', FILTER_SANITIZE_STRING);
$newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_STRING);

if($address != ""){
    header("Location: http://woodlynsales.com/formsuberror.html");
} else {
    $servername = "localhost";
    $username = "woodlynform";
    $password = "";
    $dbname = "woodlynsalesweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO contact_form (fname, lname, email, title, company, phone, comments, newsletter)
    VALUES ('$fname', '$lname', '$email', '$title', '$company', '$phone', '$comments', '$newsletter')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://woodlynsales.com/formsubsuccess.html");
    } else {
        header("Location: http://woodlynsales.com/formsuberror.html");
    }

}
?>