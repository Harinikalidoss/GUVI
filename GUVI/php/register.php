<?php
@include 'profile.php';
$sql = "SELECT * FROM `user_form`;";

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
        $error[]='user already exist!';
    }else{
        $insert="INSERT INTO user_form(name,age,dob,email,contact,password) VALUES('$name','$age','$dob','$email','$contact','$pass')";
            mysqli_query($conn,$insert);
            header('location:login.html');
    }
};
?>
<form action="login.html" method="POST">
<?php
if(isset($error)){
    foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
    };
};
?>
</form>