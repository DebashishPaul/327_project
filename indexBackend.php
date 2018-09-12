<?php
//connection to database
$connection = mysqli_connect('localhost', 'root', '', 'loco');

if(!$connection){
	echo "Sorry";
}

else {
	/*$_POST['lastname'].$_POST['middlename'];
	$_REQUEST['username'];*/
	if(!empty($_POST)) {
		$Post_Content = $_POST['message'];

		if(strlen($Post_Content) > 0) {
			$result= "INSERT INTO post (Post_content) VALUES (".'"'.$Post_Content.'")';

			if ($connection->query($result) === FALSE) {
				echo "Error: " . $result . "<br>" . $connection->error;
			}
			
			$connection->close();
		}
	}		
}