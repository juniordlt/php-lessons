<html>
	
	<head>
	<style>
	#peeps {
		color:red;
	}
	</style>
	</head>
	
	
	<body>
	<?php
		echo "Hellow WOrld - form: ".$_SERVER['SERVER_SOFTWARE'];
		echo "<h1 id='peeps'>".$_SERVER['HTTP_HOST']."</h1>";
		echo "hi".$_SERVER['PHP_SELF']
	?>
	</body> 



</html>
