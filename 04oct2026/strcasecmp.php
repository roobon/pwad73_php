<?php
$email1 = "admin@example.com";
$email2 = "ADMIN@example.com";
if (! strcmp($email1, $email2)){
echo "The email addresses are identical!";
} else {
    echo "Emails are not equal";
}
?>