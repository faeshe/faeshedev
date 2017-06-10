<?php
	ini_set('mysqli.connect_timeout',300);
	ini_set('default_socket_timeout',300);
?>
<!DOCTYPE html>
<html>
<head>
	<title>youtubetry</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<br />
	<input type="file" name="image" />
	<br /><br />
	<input type="submit" name="submit" value="upload" />
	</form>
<?php
	require_once 'connect.php';
	if(isset($_POST['upload']))
	{
		$target = "images/" .basename($_FILES['name']['image']);
		$db = mysqli_connect('localhost', 'root', '', 'datanew1');
			if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
			{
				echo 
				"Please select an image.";
			}
			else
			{
					$image= addslashes($_FILES['image']['tmp_name']);
					$name= addslashes($_FILES['image']['name']);
					$image= file_get_contents($image);
					$image= base64_encode($image);
					saveimage($name,$image);
					
			}
	}
	

	function saveimage($name,$image)
	{
		$con=mysqli_connect("localhost","root","","datanew1");
		mysqli_select_db($con, "datanew1");
		$qry="insert into images ('name','image') values ('$name','$image')";
		mysqli_query($con, $qry);
			
		if (move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
			$msg = "Success";
		}
	/*
		$result=mysqli_query($con,$qry);
		if($result)
		{
				echo "<br />Image uploaded.";
		}
		else {
			echo "<br />Image not uploaded.";
		}
	*/
	
		mysqli_close($con);
	}

	?>
</body>
</html>