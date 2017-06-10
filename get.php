<?php
require_once ('connect.php');
$link = mysqli_connect("localhost", "root", "", "datanew1");
$id = addslashes($_REQUEST['id']);

$image = mysqli_query($link, "SELECT * FROM store WHERE id=$id");
$image = mysqli_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");

echo $image;
?>