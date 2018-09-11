<?php

$connection = mysqli_connect('localhost', 'root', '', 'loco');


if(!$connection){
	echo "Sorry";
}
else{
	echo "Connection Successful";
}

var_dump($_POST);

 /*$_POST['lastname'].$_POST['middlename'];
 $_REQUEST['username'];*/



$Post_content=$_POST['message'] ;


$result= "INSERT INTO `post`(`Post_content`) values ('$Post_content')";




if ($connection->query($result) === TRUE) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $result . "<br>" . $connection->error;
}$connection->close();
header("Location:index.php");


?>