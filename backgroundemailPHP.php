<?php
$teamname = $_POST['teamname'];
$opportunity = $_POST['opportunity'];
$regard = $_POST['regard'];
$incident = $_POST['incident'];
$means = $_POST['means'];
$now = $_POST['now'];
$is = $_POST['is'];
$contact = $_POST['contact'];
$with = $_POST['with'];
$hope = $_POST['hope'];
$luck = $_POST['luck'];
$goodbye = $_POST['goodbye'];


$to = $_POST["email"];
$subject = "An Apology";
$from= "squire@jugglermeadow.org";
$msg= $msg= stripslashes("Dear $teamname, \n \n We wish to take this opportunity to $opportunity in regard to the $regard incedints of this past $incident. Please rest assured that every means will be taken to $means. Even now our $now is $is. Please contact our $contact with any $with. We sincerley hope that $hope. Good luck with $luck. \n \n$goodbye\nSquire, Juggler Meadow Morris Men \n\n\n\n\n\n ---------------\nCreated with Juggler Meadow Morris Men's Self-adjusting Letter of Apology. Create your own here: https://bit.ly/2HzLQob");
$headers = "From: $from";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent. Please allow up to 15 minutes, or one Longborough Trunkles, for the message to be recieved. If you still encounter issues, please email roo@roocase.org.";

?>