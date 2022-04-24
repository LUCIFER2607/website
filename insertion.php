<?php
$connection=mysqli_connect("localhost", "root", "", "product" );

$heading=mysqli_real_escape_string($connection,$_POST["heading"]);
$cost=$_POST["cost"];
$description=mysqli_real_escape_string($connection,$_POST["description"]);
$category=mysqli_real_escape_string($connection,$_POST["category"]);

echo "$heading <br>";
echo "$cost <br>";
echo "$description <br>";
echo "$category <br>";

echo "connected successfully";

$r=move_uploaded_file($_FILES["image"]["tmp_name"],"uploadedphotos/".$_FILES["image"]["name"]);
$pname=$_FILES["image"]["name"];
echo "$pname <br>";
$s=mysqli_query($connection,"insert into insertion(HEADING,COST,DESCRIPTION,IMAGE,category)values('$heading','$cost','$description','$pname','$category')");
echo "<h2> inserted successfully <h2>";
?>