<!--This one works-->
<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
</head>
<body>
<h1>faeshe search results</h1>
<?php
$searchtype=$_POST['searchtype'];
$searchterm=trim($_POST['searchterm']);

if(!$searchtype || !$searchterm) {
	echo '<p>You have not entered search details.<br />
	Try again.</p>';
	exit;
}
switch ($searchtype) {
	case 'username';
	case 'password';
	case 'email';
	break;
	defaul:
	echo '<p>That is not a valid search type. <br />
	Try again.</p>';
	exit;
}
$db = new mysqli('localhost', 'root', '', 'datanew1');
if (mysqli_connect_errno()){
	echo '<p>Error: Could not connect to the database.<br />
	Try again.</p>';
	exit;
}
$query = "SELECT username, password, email, id
		FROM user WHERE $searchtype = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('s', $searchterm);
$stmt->execute();
$stmt->store_result();

$stmt->bind_result($username, $password, $email, $id);

echo "<p>Number of Items Found: ".$stmt->num_rows."</p>";

while($stmt->fetch()) {
	echo "<p><strong>Username: ".$username."</strong>";
	echo "<br />Password: ".$password;
	echo "<br />Email: ".$email;
	echo "<br />ID: ".$id. "</p>";
}
$stmt->free_result();
$db->close();
?>
	</body>
</html>