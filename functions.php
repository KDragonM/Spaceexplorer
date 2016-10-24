<?php
    function logIp(){
        $logfile = fopen("beta/log.txt", "a+") or die("Code 1");
        $timestamp = date('Y-m-d h:i:sa');
        fwrite($logfile, $timestamp." IP: ".$_SERVER['REMOTE_ADDR']." Port: ".$_SERVER['REMOTE_PORT']." Host: ".$_SERVER['REMOTE_HOST']." User Agent: ".$_SERVER['HTTP_USER_AGENT']." Page: ".$_SERVER['REQUEST_URI']."\n");
        fclose($logfile);
    }
?>