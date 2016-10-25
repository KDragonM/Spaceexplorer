<!DOCTYPE html>
<html>
    <head>
        <title>SQL TEST</title>
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    </head>
    <body>
        <?php 
        
        $server = "localhost";
        $user = "webserver";
        
        $passwordFile = fopen(".mysqlpassword", "r") or die("Unable to open password file!"); //Try to get my password now! JK please don't try
        $pass = fgets($passwordFile);
        close($passwordFile);
        
        $connection = mysqli($server,$user,$pass);
        if(!$connection){
            die("connection failed: ". mysqli_connect_error());
        }else{
            echo "Conenction Sucessful!";
        }
        
        
        
        ?>
    </body>
</html>