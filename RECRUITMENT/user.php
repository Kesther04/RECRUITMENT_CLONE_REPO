<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
if ($_SERVER['REQUEST_METHOD']=="POST") {
   
    
    $id=$_POST['id'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $date=Date("d-m-y");
    $hour=Date("h")+1; 
    $time=Date("$hour:i:s a");
    
    
    $con = new mysqli("localhost","root","","ZIP");
    $insert = $con->query("INSERT INTO zip_msg 
    (USER_ID,FULLNAME,EMAIL,MESSAGE,DATE,TIME,REPLY,REPLY_DATE,REPLY_TIME)VALUE('$id','$uname','$email','$msg','$date','$time','','','')");

    if ($insert) {
         echo "<script>location='user.php'</script>";
    }else{
        echo "<script>window.alert('not inserted')</script>";
    }
    
}    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "zip.css" media = "all" >
    <title>USER</title>
</head>
<body>

    <div class="ccc" style="display:block;">
        
        <div class="dap">
            <button class="c-d"><a href="user" class="cd">USER PAGE</a></button>
        </div>
        
        <div class="dap">
            <button class="c-d"><a href="msg_user"  class="cd">VIEW MESSAGES</a></button>
        </div>
        
    </div>
    
    <div class="sccc">
    
    <div class="user">
        <p><?php echo $_SESSION['name'] ?></p>
    </div>
    
    <div class="imag">
        <div class="imgee">
        <?php
        
        $con = new mysqli("localhost","root","","ZIP");

        $select = $con->query("SELECT * FROM zip_registration");    
        if ($select){
            echo "<div style='height:100%;'><img src='pics/$_SESSION[pic]' style=' width:100%;height:100%;border-radius:20px;'></div>";
        }
        ?>
        </div>
    </div>
    
    <div>
            <button onclick="pro()" class="d-d" >UPDATE PROFILE PICTURE</button>        
    </div>

    <div>
            <button onclick="msg()" class="d-d" >SEND MESSAGE</button>
    </div>
    
    <script src="userd.js"></script>

    <div id="u-form">
        <div class="u-form">
        <form name="uf" method="post" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <p>MESSAGE:</p> 
            <p><textarea name="msg" title="SUCH MESSAGE WILL BE SENT DIRECTLY TO THE ADMINISTRATOR" placeholder="SEND MESSAGE <?php echo $_SESSION['name'] ?>"></textarea></p>
            <p><input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>"></p>
            <p><input type="hidden" name="uname" value="<?php echo $_SESSION['name'] ?>"></p>
            <p><input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>"></p>
            <p><button class="but" >SEND</button></p>
        </form>
        </div>
    </div>
    
    <div id="pro-form">
        <div class="pro-form">
        <form name="pro-f"  method="post"  action="userd.php" enctype="multipart/form-data">
        
            <?php if(isset($_GET['m'])){ 
                echo $_GET['m']; 
                }
            ?>
        
            <p>UPLOAD FILE:<input type="file" name="pic" size="40"   ></p>   
            <p><input type="hidden" name="did" value="<?php echo $_SESSION['id'] ?>" ></p>
            <p><button>UPDATE</button></p>
        </form>
        </div>
    </div>

    <div class="drec">
        <button class="d-d" onclick="if(window.confirm('Are you sure you want to log out')){window.location='login.php';}">LOG OUT</button>
    </div>


    </div>
    

</body>
</html>