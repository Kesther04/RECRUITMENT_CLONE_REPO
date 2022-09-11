<?php
session_start();


if($_SERVER['REQUEST_METHOD']=="POST"){


$con = new mysqli("localhost","root","","ZIP");

$email=$_POST['email'];
$pass=$_POST['pword'];

if(empty($email)){
    header("location:login.php?m=enter your email address ");
}
elseif (empty($pass)) {
    header("location:login.php?m=enter your password");
}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("location:login.php?m=invalid email address");

}else{
    $sel = $con->query(" SELECT * FROM zip_registration WHERE EMAIL = '$email' AND PASSWORD = '$pass' ");
    if($sel->num_rows>0){
        $row =$sel->fetch_assoc();
        $_SESSION['id'] = $row['ID'];
        $_SESSION['pic'] = $row['PICTURE'];
        $_SESSION['email'] = $row['EMAIL'];
        $_SESSION['pass'] = $row['PASSWORD'];
        $_SESSION['name'] = $row['FULLNAME'];

        header("location:user");
    }else{
        header("location:login.php?m=incorrect email or password ");
    }
}

}

?>