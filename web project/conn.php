<?php
$username=$_POST["username1"];
$password=$_POST["password"];



$conn=new mysqli("localhost","root","","freebook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["button1"])) {
	if($username!="" && $password!=""){
	$result = $conn->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
	$c=$result->num_rows;
	if($c > 0){
    echo "<a href=home.php><h1>BOOK YOUR BOOKS NOW !...</h1></a>";
	}
	else{
		echo "Please sign up f";	
	}
}
}
if (isset($_POST["button2"])) {
	$email=$_POST["email"];
	$repeatpassword=$_POST["psw-repeat"];
	if($username!=""){
		$sql = "INSERT INTO login(username,password,email,repeatpassword) VALUES ('$username','$password','$email','$repeatpassword')";
	}
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} 
}









?>