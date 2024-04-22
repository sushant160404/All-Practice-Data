<?php
     $YourName = $_POST['YourName'];
     $email = $_POST['email'];
     $userName = $_POST['userName'];
     $password = $_POST['Yourname'];
     $confirmpassword = $_POST['confirmpassword'];

     $conn = new mysql('localhost','root','test');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into register(YourName, email, userName, password, confirmpassword) values(?, ?, ?, ?, ?)");
    
    $stmt->blind_param("sssssi", $YourName, $email, $userName, $password, $confirmpassword);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}

?>