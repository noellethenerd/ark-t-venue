
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSddIT7GticbfkJq804Apd_wovzFcmmi-3e_rS23iOT8GjkW8g/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
<?php
/*Here we are going to declare the variables*/
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gname = $_POST['gname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$room1 = $_POST['room1'];
$room2 = $_POST['room2'];
$room3 = $_POST['room3'];
$room4 = $_POST['room4'];
$mainhall = $_POST['mainhall'];
$ehd = $_POST['ehd'];
$ec = $_POST['ec'];
$ep = $_POST['ep'];
$efcs = $_POST['efcs'];
$date = $_POST['date'];
$time = $_POST['time'];
$purpose = $_POST['purpose'];
$pay = $_POST['pay'];
$marketing = $_POST['marketing'];
$tandc = $_POST['tandc'];
$qs = $_POST['qs'];




//Save visitor name etc and entered message into one variable:
$formcontent="NAME: $fname    $sname  \n\r
GROUP NAME: $gname    \n\r
ADDRESS: $address    \n\r
PHONE: $phone    \n\r
EMAIL: $email    \n\r
WHICH ROOM(s) 1: $room1    \n\r
ROOM 2: $room2    \n\r
ROOM 3: $room3    \n\r
ROOM 4: $room4    \n\r
MAIN HALL: $mainhall    \n\r
EXTRAS REQUIRED: $ehd     $ec      $ep     $efcs    \n\r
DATE:  $date   \n\r
START TIME AND END TIME: $time    \n\r
WHY DO THEY WANT IT: $purpose    \n\r
HOW WILL THEY PAY: $pay    \n\r
DO THEY WANT MARKETING?: $marketing    \n\r
HAVE THEY AGREED TO THE Ts and Cs: $tandc    \n\r
ANY QUESTIONS OR COMMENTS: $qs    \n\r
";
$recipient = "noellekaly@gmail.com";
$subject = "Venue booking form";
$mailheader = "From: $email\\r\\n";
$mailheader .= "Reply-To: $email\\r\\n";
$mailheader .= "MIME-Version: 1.0\\r\\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Failure!");
echo "<p style=\"font-family: verdana, arial, sans-serif\">Thank you for your online booking request. We will call you on the phone number provided within the next 2 working days to confirm your booking with you and take payment. We look forward to talking to you then.</p>";
?>
