<?php
$email = "example.email123@domain.com";

if (preg_match('/^[^\d\._@][^@]*@([^@\.]+\.)+[^@\.]{1,2}$/', $email)) {
    // Valid email address
    echo "Valid email address!";
} else {
    // Invalid email address
    echo "Invalid email address!";
}
?>