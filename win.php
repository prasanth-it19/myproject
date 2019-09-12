<?php
$serverneme="121.200.55.60:3307";
$username="2019UIT1018";
$password=" 21-10-2001";
$database="2019UIT1018";
//create connection
$conn= mysqli_connect($servername,$username,$password,$database);
//check connection
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
echo "connected sucessfully";
$sql="CREATE TABLE mytable(id INT(6),name VARCHAR(30)NOT NULL)";
if($conn->query($sql)=== TRUE){
echo "Table mytable create sucessfully";
}else{
echo "error in creating table:".$conn->error;
}
?>
