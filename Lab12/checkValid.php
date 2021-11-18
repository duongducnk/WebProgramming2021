<html>
<head><title>Check Validation</title></head>
<body>
<?php
$email = $_POST["email"];
$url = $_POST["url"];
$phone = $_POST["phonenumber"];

$regex_mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
if (preg_match($regex_mail, $email)) {
    echo "$email, is a valid email<br><br>";
}else{
    echo "$email, is an invalid email<br><br>";
}

$regex_url = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
if ( preg_match($regex_url, $url) ) {
    echo "$url, is a valid URL <br><br>";
} else {
    echo "$url, is an invalid URL<br><br>";
}

$regex_phone = '/^[0-9]{10}+$/';
if(preg_match($regex_phone, $phone)){
    echo "$phone, is a valid phone number<br><br>";
}else{
    echo "$phone, is an invalid phone number<br><br>";
}

?>

</body>
</html>