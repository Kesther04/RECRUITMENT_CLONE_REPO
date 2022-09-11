<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    
       $filename = $_FILES['pic']['name'];

       $filesize = $_FILES['pic']['size'];
   
       $tmp = $_FILES['pic']['tmp_name'];
   
       $filetype = $_FILES['pic']['type'];

$con = new mysqli("localhost","root","","ZIP");

if ($filesize > 10000000) {
    header("location:user.php?m=FILESIZE IS TO LARGE");
}elseif ($_FILES['pic']['type']!="image/png" AND $_FILES['pic']['type']!="image/jfif" AND 
$_FILES['pic']['type']!="image/jpg" AND $_FILES['pic']['type']!="image/bmp" AND $_FILES['pic']['type']!="image/jpeg") {
    header("location:user.php?m=INVALID FILE TYPE");
}else {
    $up = $con->query("UPDATE zip_registration SET PICTURE='$filename' WHERE ID='$_POST[did]' ");
    if ($up) {
        move_uploaded_file($tmp, "pics/".$_FILES['pic']['name']);
    }
}

}

?>