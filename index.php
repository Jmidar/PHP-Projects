<?php include("header.php")?>

<script>
	function checkFunction(){
		var length = document.myform.coder.length;
		$result = "";
		for(i=0; i<length; i++){
			
			var checkValue = document.myform.coder[i].checked;
			if(checkValue){
				$result += document.myform.coder[i].value+", ";
			}
		}
		var showData = "You Selected : "+$result;
		document.getElementById('show').innerHTML = showData;
	}
</script>

<form action="index.php"  name="myform" id = "myform" onsubmit="checkFunction(); return false;" >
	<table>
		<tr>
			<td>Programming Language :<td>
			<td><input type="checkbox" name="coder" value="PHP" />PHP<td>
			<td><input type="checkbox" name="coder" value="Java" />Java<td>
			<td><input type="checkbox" name="coder" value="C#" />C#<td>
			
		</tr>
		<tr>
			<td><td>
			<td><input type="submit" name="submit" value="Submit" /><input type="reset" value="Clear" /><td>
		</tr>
	</table>
</form>
<div id="show"></div>



<?php include("footer.php")?>
