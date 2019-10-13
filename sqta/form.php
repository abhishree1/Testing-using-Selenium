

<?php

// Create connection
$conn = new mysqli('localhost', 'root', '','sqta');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$comments =$_POST['comment'];
	if($email && $comments){
		$query ="insert into sqta(email,comments) values('$email','$comments');";

		$result = mysqli_query($conn,$query);
		if(!$result){
			die('Query failed'.mysql_error());
		}
		else{
			echo "<h2>Order Submitted</h2><br> <a href='index.php'>Click here</a>";
		}
	}
	else{
		echo "mysql_error()";
	}
}

if(isset($_POST['buy'])){
	$name = $_POST['name'];
	$address =$_POST['address'];
	if($name && $address){
		$query = "insert into orders(name,address) values('$name','$address');";
		$result = mysqli_query($conn,$query);
		if(!$result){
			die('Query failed'.mysqli_error());
		}
		else{
			echo "<h2>Order Submitted</h2><br> <a href='index.php'>Click here</a>";
		}
	}
	else{
		echo "mysql_error()";
	}
}

?>