<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "zip.css" media = "all" >
    <title>USER MESSAGES</title>
</head>
<body>
    
    <div class="ccc">
        
        <div class="dap">
            <button class="c-d"><a href="user" class="cd">USER PAGE</a></button>
        </div>
        
        <div class="dap">
            <button class="c-d"><a href="msg_user"  class="cd">VIEW MESSAGES</a></button>
        </div>
    </div>

<?php
$con = new mysqli("localhost","root","","ZIP");


$select = $con->query("SELECT * FROM zip_msg WHERE FULLNAME='$_SESSION[name]'  ");
if($select){
    echo "<div class='sccd' >";
    while ($row=$select->fetch_assoc()) {
        echo "<div style='margin-bottom:20px;' class=smg-rr>";
        
        echo "
        <h3 style='text-align:center;padding-left:0px;color:gold;'>$row[FULLNAME]</h3>";
        
        echo "<div id='selo' style='float:left;'>
        
        <h3 style='padding-left:0px;color:gold;'>MESSAGE</h3>
            <p>$row[MESSAGE]</p>
        <div style='float:right;'>
            <p>$row[DATE]<br>$row[TIME]</p>
        </div>

        </div>";

        if($row['REPLY']==""){
            echo "";
        }else{
        echo "
        <div id='leso' style='float:right;'>
        <h3 style='padding-left:0px;color:gold;'>ADMINISTRATOR'S REPLY</h3>
        <p>$row[REPLY]</p>
        <div style='float:right;'>
            <p>$row[REPLY_DATE]<br>$row[REPLY_TIME]</p>
        </div>
        </div>";
        }
        echo "</div>";
    }
    echo "</div>";
}

?>

<script src='msg_ud.js'></script>

</body>
</html>