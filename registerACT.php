<?php
	require_once('connect.php');
    // This test below working on april 14
    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
	    $actname = $_POST['actname'];
        
        $query = "INSERT INTO `actprofile` (username, actname) 
        VALUES ('$username', '$actname')";
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
	<title>ACT INPUT</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
<link rel="stylesheet" href="faeshecss.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <h1>faeshe</h1>
<div class="container">
      <form class="form-signin" method="POST">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

        <h2 class="form-signin-heading">Provide Info Below</h2>
       
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
       
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="actname" id="inputActname" class="form-control" placeholder="Act Name" required autofocus>
      
       
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
 
</body>
 
</html>