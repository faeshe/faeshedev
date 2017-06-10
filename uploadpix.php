<?php
	require_once('connect.php');
    
    if (isset($_POST['bgpic']) && isset($_POST['portrait']))
    {
        $bgpic = $_POST['bgpic'];
	    $portrait = $_POST['portrait'];
        
        $query = "INSERT INTO `actprofile` (bgpic, portrait) 
        VALUES ('$bgpic', '$portrait')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }
        else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
	<title>ACT PICS</title>
    </head>
<body>
<input type="file" value="bgpic"><br /><br />
<input type="file" value="portrait"><br /><br />
<input type="submit" value="upload"> 
</body>
</html>


	