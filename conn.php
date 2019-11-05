<?php
$servername="localhost";
$username="id11184235_kala_roshan";
$password="admin";
$dbname="id11184235_ippro";
$user=$_POST["email"];
$psw=$_POST["psw"];
$e=$_POST["e"];
$p=$_POST["p"];


$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($user!="")
{
$sql = "INSERT INTO hamara_kursi(user,pass) VALUES ('$user','$psw')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 

}
if($e!="")
{
$result = $conn->query("SELECT * FROM hamara_kursi WHERE user='$e' AND pass='$p'");
$c=$result->num_rows;
if($c > 0)
{
    echo "<a href=home.html><h1>BOOK YOUR BOOKS NOW !...</h1></a>";
}
}




?>