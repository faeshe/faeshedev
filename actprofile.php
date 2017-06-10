<?php
	require_once('connect.php');
    /*
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
        */
        $query = "INSERT INTO `actprofile` (username, actname, bgpic, portrait, description, genre, size, priceset, star_rating, link) VALUES ('username', 'actname', 'bgpic','portrait', 'description', 'genre', 'size', 'priceset', 'star_rating', 'link')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    
    ?>
<html>
<head>
	<title>Create Act Profile</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
<link rel="stylesheet" href="faeshecss.css" >
<link rel="stylesheet" href="formstyles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"> var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
    var label    = input.nextElementSibling,
        labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
        var fileName = '';
        if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        else
            fileName = e.target.value.split( '\\' ).pop();

        if( fileName )
            label.querySelector( 'span' ).innerHTML = fileName;
        else
            label.innerHTML = labelVal;
    });
});
</script>
</head>
<body>
 <h1>faeshe</h1>
 
 <!--
<div class="container">
      <form class="form-signin" method="POST">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Create your profile page</h2>
        
        <div class="input-group">
	 
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>

        <label for="inputactname" class="sr-only">Act Name</label>
        <input type="actname" name="actname" id="inputactname" class="form-control" placeholder="Email address" required autofocus>
        
        <label for="inputgenre" class="sr-only">Genre</label>
        <input type="genre" name="genre" id="inputgenre" class="form-control" placeholder="Genre" required>

        <label for="inputsize" class="sr-only">Number of players</label>
        <input type="size" name="size" id="inputsize" class="form-control" placeholder="Number" required>

        <label for="inputprice" class="sr-only">Price per set</label>
        <input type="price" name="price" id="inputprice" class="form-control" placeholder="Price" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>

<form class="form-style-9" action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    

<input type="file" name="file" id="file" class="inputfilee" />
<label for="file">Choose a file</label>

<input type="file" name="file" id="file" class="inputfilee" data-multiple-caption="{count} files selected" multiple />
    <br />
    <input type="submit" value="Upload Image" class="filed-style field-split align-right" name="submit">
</form>


</div>
-->
 
<h2 class="form-signin-heading">Create your profile page</h2>
 <form class="form-style-9" method="POST">
 <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<ul>
<li>
    <input type="text" name="username" class="field-style field-split align-left" placeholder="username" />
    <input type="text" name="actname" class="field-style field-split align-right" placeholder="act name" />

</li>
<li>
    <input type="text" name="genre" class="field-style field-split align-left" placeholder="genre" />
    <input type="text" name="size" class="field-style field-split align-right" placeholder="Number of players" />
</li>
<li>
    <input type="text" name="priceset" class="field-style field-split align-left" placeholder="Price per set" />
    <input type="text" name="star_rating" class="field-style field-split align-right" placeholder="Star Rating (1-5)" />
</li>

<li>
<input type="url" name="link" class="field-style field-full align-none" placeholder="Link to your portfolio on youtube etc." />
</li>
<li>
<textarea name="description" class="field-style" placeholder="Describe your act in 255 characters"></textarea>
</li>
<li>
<input type="submit" value="Submit" />
</li>
</ul>
</form>
</body>
 
</html>