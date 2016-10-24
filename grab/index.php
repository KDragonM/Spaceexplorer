 <!DOCTYPE html>
<html>
<head>
  
</head>
<body>

 <?php 
				  	if(!isset($_GET['url'])){
				  		header('Location: http://wallpapercave.com/wp/3PlUguT.png');
				   		// header('Location: http://portfoliotheme.org/enigmatic/wp-content/uploads/sites/9/2012/07/placeholder1.jpg');
				    }else{
				    	header("Location: ". $_GET['url']);
				    }
				  	
				    if($_SERVER['REMOTE_ADDR'] <> "68.170.80.33"){
				    	$file = fopen("../beta/test.txt","a+") or die("cant open/create file");
				   	 	fwrite($file,$_SERVER['REMOTE_ADDR']."\n");
				      	fclose($file);
				     }
					?>
</body>
</html>