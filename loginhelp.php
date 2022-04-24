<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');


$email = $_POST['email'];
$pass = $_POST['password'];

$data = mysqli_query($connection,"select * from credentials where EMAIL='$email' and PASSWD='$pass'");


if($row=mysqli_fetch_array($data))
    header('location:loginsuccessful.php');

else 
    echo "<br>Error while logging In";

?>