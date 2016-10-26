<!DOCTYPE html>
<html>
    <head>
        <title>SQL TEST</title>
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    </head>
    <body>
	<h1>SQL Test Page</h1>
        <?php 
        $server = "localhost";
        $user = "webserver";
        $passwordFile = fopen(".mysqlpassword", "r") or die("Unable to open password file!"); //Try to get my password now! JK please don't try
	 $pass = fgets($passwordFile);
	$pass = rtrim($pass,"\r\n");
        fclose($passwordFile);
        $connection = mysqli_connect($server,$user,$pass,"test");
        if(!$connection){
            die("connection failed: ". mysqli_connect_error());
        }else{
            echo "Connection Sucessful!";
        }
        $sql = "SELECT * FROM persons";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["personNumber"]. " - Name: " . $row["personName"]. " " ."<br>";
    }
}
        
        ?>
    </body>
</html>
