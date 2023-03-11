<?php
@include 'profile.php';

if(isset($_POST['register'])){

    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $contact=mysqli_real_escape_string($conn,$_POST['contact']);
    $pass=md5($_POST['password']);
    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
    }else{
        $error[]='Incorrct email or password';
    }       
};
?>