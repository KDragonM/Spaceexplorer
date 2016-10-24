<?php
    $chat = htmlspecialchars($_POST['message']);
    date_default_timezone_set("America/Denver");
    $pass = "command";
    $timestamp = date("Y/m/d h:i:sa");
    if($chat == "$pass clear"){
        $chatLog = fopen("chatLog.txt","w+") or die("Eror loading chat... Please try again later");
        fclose($chatLog);
        fwrite($chatLog, "BEGIN $timestamp <br>");
    }else{
        $chatLog = fopen("chatLog.txt","a+") or die("Eror loading chat... Please try again later");
        fwrite($chatLog, "$timestamp $chat <br>");
        fclose($chatLog); 
    }
?>