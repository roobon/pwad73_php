<?php
$pswd = "supersecret";
$pswd2 = "supersecret";
if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}
?>