<!DOCTYPE html>
<html lang="en">
    <head>

        <title>index</title>
        <style>
        #clickhere {
                border:10px solid green;
                border-style:outset;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20%;
            }
            #clickhere:hover {
                border:10px solid green;
                border-style:inset;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <a  href="/beta/log.txt">
        <legend id="clickhere" >
            <div style="text-align: center">
                <h1>Acess the log</h1>
            </div>
        </legend>
       </a>
       
       
       
       <?php
            $logfile = fopen("../beta/log.txt", "a+") or die("Code 1");
            $timestamp = date('Y-m-d h:i:sa');
            fwrite($logfile, $timestamp." IP: ".$_SERVER['REMOTE_ADDR']." Port: ".$_SERVER['REMOTE_PORT']." Host: ".$_SERVER['REMOTE_HOST']." User Agent: ".$_SERVER['HTTP_USER_AGENT']." Page: ".$_SERVER['REQUEST_URI']."\n");
            fclose($logfile);      
        ?>
    </body>
</html>

