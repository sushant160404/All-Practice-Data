<?php
$conn=mysqli_connect("localhost","root","","bpprogram");
if($conn){
    //echo "Connected";
}else{
    echo "Fail";
}

$uname=$_POST["uname"];
$password=$_POST["password"];

$data="INSERT INTO login VALUES('','$uname','$password')";
$check=mysqli_query($conn,$data);
if($check){
    //echo "Data Sended Sushant!";
    header('Location: http://127.0.0.1:5500/about/index.html');
}else{
    echo "Data is not send!";
}
?>