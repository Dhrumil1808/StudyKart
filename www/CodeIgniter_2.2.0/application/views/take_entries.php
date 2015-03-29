

<h1> Hii...this is view </h1>
<html>
<body>

<form method = "POST" action = "insert_data">

 Name: <input type='text' name='name' id='name' /><br />
 Username: <input type='text' name='username' id='username' /><br />
 Password: <input type='text' name='pswd' id='pswd' /><br />
 Email: <input type='text' name='email' id='email' /><br />
 Contact Number: <input type='text' name='contact' id='contact' /><br />


 Stream: <input type='text' name='stream' id='stream' /><br />

 Address: <input type='text' name='address' id='address' /><br />
 City: <input type='text' name='city' id='city' /><br />
 

 State: <select name='state'>
 
 <?php
 	$sql= "SELECT * FROM states";
    $result=mysql_query($sql);

 	while($r=mysql_fetch_object($result))
	{
		//echo $r->State;
	?>
	<option value="<?php echo $r->State; ?>" > <?php echo $r->State; ?>
	 </option>
 	<?php
 	}
 	?>
 	</select>
 	<br/>

 Pincode: <input type='text' name='pincode' id='pincode' /><br />
 
 
 <input type='submit' value='Submit' />  
</form>

</body>
</html>

