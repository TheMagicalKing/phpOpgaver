<form action="" method="get">
<input type="text" name="firstName">
<input type="text" name="lastName">
<input type="submit" value="Submit">
</form>
<?php
//Dette er håndtering af indlæsning for Firstname og Cookie setting
$firstName = $_GET["firstName"];
$cookie1stName = "firstname:";
$cookie1stValue = $firstName;
setcookie($cookie1stName, $cookie1stValue, time() + (86400 * 30), "/"); // 86400 = 1 day
//Dette er håndtering af indlæsning for Lastname og Cookie setting
$lastName = $_GET["lastName"];
$cookieLastName = "lastname:";
$cookie2ndValue = $lastName;
setcookie($cookieLastName, $cookie2ndValue, time() + (86400 * 30), "/"); // 86400 = 1 day

if(null == ($_COOKIE[$cookie1stName] && $_COOKIE[$cookieLastName])){
    echo "Cookies not set!";
}else{
echo "Hello ", $firstName, " ", $lastName, "!<br>";
echo "Cookies set! Firstname: ", $_COOKIE[$cookie1stName], " Lastname: ", $_COOKIE[$cookieLastName]; // Her bruger vi Cookie, Kunne som udgangspunkt godt have brugt Session i stedet for, der er fordele og ulemper ved begge
}
?>