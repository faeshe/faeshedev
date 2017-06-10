
<?php
/*
$uploads_dir = '/uploads';
foreach ($_FILES["UploadImage"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["UploadImage"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["UploadImage"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
?>
*/

require_once ('connect.php');
	if(isset($_POST['submit']))
	{
		if($con = mysqli_connect('localhost','root','','datanew1'))
		{
			$filetemp = $_FILES['UploadImage']['tmp_name'];
			$filename = $_FILES['UploadImage']['name'];
			$filetype = $_FILES['UploadImage']['type'];
			$filepath = "image11/".$filename;

			move_uploaded_file($filetemp,$filepath);

			$query = mysqli_query($con,"call imageInsert('$filename','$filepath','filetype')");
		
			if($query)
			{
			echo "Success";
			}
			else
			{
			echo "Fail";
			}
		}
	}
	?>