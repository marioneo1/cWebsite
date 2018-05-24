<html>
    <head>
        <title>PHP mail() test</title>
    </head>
<body>

    
Thank you for visiting, <?php 
//
//$msg = "   Name: " . $_POST["name"] . "  Email: ". $_POST["email"];


//echo $_POST["name"], $_POST["email"];
//echo $msg;
//mail("neo_marcos29@yahoo.com","My subject",$msg);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$guests = $_POST['guests'];
$type = $_POST['type'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$message = $_POST['message'];
$formcontent="msg";
$comfirmcontent="msg";
$fromname="mydomain.com";
$fromemail="neo_marcos29@yahoo.com";
$confirmheader=
'From: "' . $fromname . '" <' . $fromemail . '>'  . "\r\n" .
'Reply-To: "' . $fromname . '" <' . $fromemail . '>'  . "\r\n" .
'X-Mailer: PHP v' . phpversion();
$recipient = "info@mydomain.com";
$subject = "Contact From Website";
$mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
mail($email, $confirmsubject, $comfirmcontent, $confirmheader) or die("Error!");
header('Location: party-form-thank-you.html')

?>


</body>
</html>