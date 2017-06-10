<!DOCTYPE html>
<html>
<head>
  <title>faeshe database input</title>
</head>
<body>
  <h1>faeshe database input</h1>
  <?php

    if (!isset($_POST['username']) || !isset($_POST['email'])
         || !isset($_POST['password']) || !isset($_POST['id'])) {
       echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
       exit;
    }

    // create short variable names
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
   

    @$db = new mysqli('localhost', 'root', '', 'datanew1');

    if (mysqli_connect_errno()) {
       echo "<p>Error: Could not connect to database.<br/>
             Please try again later.</p>";
       exit;
    }

    $query = "INSERT INTO user VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ssss', $username, $email, $password, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>Book inserted into the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The item was not added.</p>";
    }

    $db->close();
  ?>
</body>
</html>