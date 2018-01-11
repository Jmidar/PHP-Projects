<?php
	$fonts = "verdana";
	$bgcolor = "#444";
	$fontcolor = "#FC8C41";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
		.body{font-family:<?php echo $fonts;?>}
		.phpcoding{width:900px; margin: 0 auto;background: <?php echo "#ddd"; ?> }
		
		.headeroption,
	    .footeroption{background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor; ?>;text-align:center; padding: 20px;}
		.headeroption h2, .footeroption h2{margin: 0;}
		.maincontent{min-height: 400px;padding: 20px;}
	
	</style>
</head>
<body>

<div class="phpcoding">
	<section class="headeroption">
		<h2><?php echo"PHP Fundamentals Training"; ?></h2>
	</section>
	PHP Sorting Array<hr>
	
	<section class="maincontent">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			Username:<input type="text" name="username" />
			<input type="submit" name="Submit" />
		</form>
		<?php
		
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$name = $_POST['username'];
				if(empty($name)){
					echo "<spam style='color:red'>Username field must not be empty !</spam>";
				}
				else{
					echo "<spam style='color:green'>You have submitted: ".$name."</spam>";
				}
			}
			
		?>
	</section>
	<section class="footeroption">
		<h2><?php echo"www.jmidar-info.ml"; ?></h2>
	</section>
</div>
</body>
</html>






