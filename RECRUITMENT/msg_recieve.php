<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    

$d=Date("d-m-y");
$h=Date("h")+1; 
$t=Date("$h:i:s a");


$con = new mysqli("localhost","root","","ZIP");

$update = $con->query("UPDATE zip_msg SET REPLY='$_POST[msg]',REPLY_DATE='$d',REPLY_TIME='$t' WHERE ID='$_POST[nid]' ");
    
if($update){
echo "<script>location='msg_recieve'</script>";
}else{
echo "<script>window.alert('NO UPDATE')</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "ziprecruiter_clone.css" media = "all" >
    <link rel = "stylesheet" href = "zip.css" media = "all" >
    <title>MSG_RECIEVED</title>

</head>
<body>
    

<div style="float:left;width:100%;">        

    <nav id="wap-div">
            
        <section>
            <div class="wap">
                <button class="cad"><a href="ziprecruiter_clone.php" target="blank" id="cad">HOME</a></button>
            </div>
                        
            <div class="wap">
                 <button class="cad"><a href="login" target="-blank" id="cad">LOGIN</a></button>
            </div>
            
            <div  class="wap">
                <button class="cad"><a href="zip_select" target="--blank" id="cad">REGISTERED CANDIDATES</a></button>
            </div>
        
            <div class="wap">
                <button class="cad"><a href="omega" target="---blank" id="cad">OMEGA CANDIDATES</a></button>
            </div>

            
            <div class="wap">
                <button class="cad"><a href="msg_recieve"  id="cad">MESSAGES</a></button>
            </div>
        
        </section>
    </nav>
</div>



<?php
$con = new mysqli("localhost","root","","ZIP");

$select = $con->query("SELECT * FROM zip_msg");
if ($select) {
    echo "<div style='margin-left:300px;'>";
    while ($row = $select->fetch_assoc()) {
        echo "<div class=msg-rr>";
        echo "
            <h3 style='text-align:center;padding-left:0px;color:gold;'>MESSAGE</hh3> 
            
            <h3 style='text-align:center;padding-left:0px;color:gold;'>FROM</h3>
            
            <h3 style='text-align:center;padding-left:0px;color:gold;'>$row[FULLNAME]</h3>
            

            <h3 style='color:whitesmoke;'>$row[EMAIL]</h3>
            <p style='text-align:right;'>$row[DATE]</p> 
            <p style='text-align:right;'>$row[TIME]</p> 
        
            <div id='msg'>$row[MESSAGE]</div>
        
            <div>
                <button class=ms-id>
                    <a href='msg_recieve.php?msg=$row[FULLNAME]&id=$row[ID]' id=ms-id >REPLY</a>
                </button>
            </div>";
        
        echo "</div>";
        
    }
    echo "</div>";

}



?>




<?php if(isset($_GET['msg'])){ ?>


<div id="u-form" style="display:block;">
<div class="u-form">
    <form name="reply-form" method="post"  action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <p> Reply To:<?php echo $_GET['msg']; ?></p> 
        <p> <textarea name="msg" placeholder="SEND MESSAGE "></textarea> </p>
        <p> <input type="text" name="nid" value="<?php echo $_GET['id'] ?>"> </p>
        <p> <button class="but">SEND</button></p>
    </form>
</div>
</div>

<?php } ?>

</body>
</html>