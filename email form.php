<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'ewankroontje@gmail.com';

$email_subject = 'New form Submission';

$email_body =   "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "User Subject: $subject.\n".
    "User Message: $message.\n";

$to = 'ewankroontje@gmail.com';

$headers = "From : $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$email_body,$headers);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email form</title>
</head>
<body>
    <form action="email%20form.php" method="Post">
        <input type="text" name="name" placeholder="Naam" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="subject" placeholder="Reden" required>
        <textarea rows="8" name="message" placeholder="Bericht" required></textarea>
        <button type="submit" class="hero-btn beta-btn">Versturen</button>
    </form>
</body>
</html>