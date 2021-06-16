<?php
$to_email = "sumitdasit1806440@gmail.com";
$subject = "Github Updates";

$body = "Hi, this is your github link for daily upadtes.

Click on the libk to see your updates.
https://github.com/Sumitdas009";

$headers = "From: sumitkumardas080@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
