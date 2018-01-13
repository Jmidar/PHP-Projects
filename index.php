<?php
	$fonts = "verdana";
	$bgcolor = "#444";
	$fontcolor = "#FC8C41";
	$errname = $erremail = $errweb = $errgender = "";
	   $name = $email = $website = $comment = $gender = "";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
			  if(empty($_POST["name"])){
				$errname = "<span style='color:red'>Name is required</span>";
			    }else{
				   $name = validate($_POST["name"]);
			       }
			  if(empty($_POST["email"])){
				 $erremail = "<span style='color:red'>Email is required</span>";
			    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
				 $erremail = "<span style='color:red'>Invalid Email Formate!</span>";	
				}else{
					$email = validate($_POST["email"]);
				    }
			  if(empty($_POST["website"])){
				 $errweb = "<span style='color:red'>Website is required</span>";
			    }elseif(!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
				 $errweb = "<span style='color:red'>Invalid Website Formate!</span>";	
				}else{
					$website = validate($_POST["website"]);
				    }
			  if(empty($_POST["gender"])){
				 $errgender = "<span style='color:red'>Gender is required</span>";
			    }else{
					$errgender = validate($_POST["gender"]);
				    }
				$comment = validate($_POST["comment"]);
			  
			}
			function validate($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
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
	PHP Form Validation<hr>
	
	<section class="maincontent">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
		<table>
		
		<p style="color: red">* Required field</p>
			<tr>
				<td>Name:</td>
				<td><input type = "text" name = "name"/>*<?php echo $errname;?></td>
			</tr>
			<tr>
				<td>E-mail </td>
				<td><input type = "text" name = "email"/>*<?php echo $erremail;?></td>
			</tr>
			<tr>
				<td>Website </td>
				<td><input type = "text" name = "website"/>*<?php echo $errweb;?></td>
			</tr>
			<tr>
				<td>Comment </td>
				<td><textarea name="comment"rows="5"cols="40"   ></textarea></td>
			</tr>
			<tr>
				<td>Gender </td>
				<td><input type = "radio" name = "gender" value="female" />Female
				<input type = "radio" name = "gender" value="female" />male
				*<?php echo $errgender;?></td>
			</tr>
			<tr></tr>			
			<tr>
				<td></td>
				<td><input type = "submit" name = "Submit" value="Submit" /></td>
			</tr>
		</table>
		</form>
	<?php
		echo date("Y/m/d")."<br>";
		echo date("l");
	?>
	<hr>
	<?php
		if(isset($_FILES['image'])){
			$filename = $_FILES['image']['name'];
			$filetmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp,"images/".$filename);
			echo "Image Uploaded Successfully";
		}else{
			echo "error";
		}
	?>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image" />
		<input type="submit" Value="Submit" />
	</form>
	
	</section>
	<section class="footeroption">
		<h2><?php echo"www.jmidar-info.ml"; ?></h2>
	</section>
</div>
</body>
</html>






