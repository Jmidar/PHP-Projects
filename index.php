<?php include("header.php")?>

<?php
	if(isset($_POST['submit'])){
		$name   = $_POST['name'];
		$gender = $_POST['gender'];
		$dep    = $_POST['dep'];
		$coder  = $_POST['coder'];
	
?>
<table class="tblone">
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>
	
	<tr>
		<td>Name: </td>
		<td><?php echo $name;?></td>
	</tr>
	
	<tr>
		<td>Gender: </td>
		<?php
		if($gender == "Male"){?>
			<td><?php echo $gender;?></td>
		<?php }
		else if($gender == "Female"){?>
			<td><?php echo $gender;?></td>	
		<?php } ?>
	</tr>
	
	<tr>
	
		<td>Department: </td>
		<?php
		if($dep == "CSE"){?>
			<td><?php echo $dep;?></td>
		<?php }
		else if($dep == "English"){?>
			<td><?php echo $dep;?></td>	
		<?php }
		else if($dep == "LLB"){?>
			<td><?php echo $dep;?></td>	
		<?php } ?>
	</tr>
	
	<tr>
		<td>Coder: </td>
		<td><?php echo $coder;?></td>
	</tr>
</table>

<?php } ?>

<form action="" method="post" name="myform" id = "myform" onsubmit = "clickHere(); return false;" >
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" required="1" /></td>	
		</tr>
		<tr>
			<td>Gender: </td>
			<td><input type="radio" name="gender" value="Male" />Male	
			<input type="radio" name="gender" value="Female" />Female</td>	
		</tr>
		<tr>
			<td>Department: </td>
			<td>
				<input type="checkbox" name="dep" value="CSE" />CSE
				<input type="checkbox" name="English" value="CSE" />English
				<input type="checkbox" name="dep" value="LLB" />LLB
			</td>	
		</tr>
		<tr>
			<td>Coder: </td>
			<td>
				<select name="coder" requierd="1">
					<option value="">Selected One</option>
					<option value="JAVA">JAVA</option>
					<option value="PHP">PHP</option>
					<option value="JS">JS</option>
					<option value="C#">C#</option>
				</select>
			</td>	
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit" /><input type="reset" value="Clear" /><td>
		</tr>
	</table>
</form>


<?php include("footer.php")?>
