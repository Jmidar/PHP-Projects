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
	PHP Array<hr>
	
	<section class="maincontent">
		<?php
			$a = array(
				array("volvo", 20, 30),
				array("vol", 10, 40),
				array("vo", 20, 60)
			);
			for($r=0;$r<3;$r++){
				echo "This is row:";
				echo "<ul>";
				for($c=0;$c<3;$c++){
						echo "<li>".$a[$r][$c]."</li>";
				}
				echo "</ul>";
			}
			
		?>
	</section>
	<section class="footeroption">
		<h2><?php echo"www.jmidar-info.ml"; ?></h2>
	</section>
</div>
</body>
</html>






