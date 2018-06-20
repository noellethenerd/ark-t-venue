<?php
/*Here we are going to declare the variables*/
$name = $_POST['name'];
$role = $_POST['role'];
$start = $_POST['start'];
$issue = $_POST['issue'];
$reporter = $_POST['reporter'];
$reportee = $_POST['reportee'];
$end = $_POST['end'];
$assess = $_POST['assess'];
$taken = $_POST['taken'];
$assign = $_POST['assign'];
$actioned = $_POST['actioned'];




//Save visitor name etc and entered message into one variable:
$formcontent="NAME: $name    $role  \n\r
DATE/TIME START OF INCIDENT: $start    \n\r
ISSUE/EVENT: $issue    \n\r
REPORTED BY: $reporter    \n\r
REPORTED TO: $reportee    \n\r
DATE/TIME END OF INCIDENT: $end    \n\r
ASSESSMENT/DECISION/ACTION: $assess    \n\r
TAKEN BY: $taken    \n\r
ASSIGNED TO: $assign    \n\r
DATE/TIME ACTIONED: $action    \n\r
";
$recipient = "trevor.eddolls@greensquaregroup.com";
$subject = "BCP event log";
$mailheader = "From: $name\\r\\n";
$mailheader .= "MIME-Version: 1.0\\r\\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Failure!");
echo "<p style=\"font-family: verdana, arial, sans-serif\">Thank you for your completing the online event log.<br />
<a href='http://bcp.greensquaregroup.com'>Back to BCP page of the website.</a></p>";
?>