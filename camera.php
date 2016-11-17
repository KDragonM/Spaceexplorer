<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>3D Print Monitor</title>
    </head>

    <body>
        <div id="video">
            <?php 
            
            header('Content-type: image/jpeg');
            echo file_get_contents("admin:pass1634@192.168.1.22/video.cgi");
        </div>
    </body>
</html>
