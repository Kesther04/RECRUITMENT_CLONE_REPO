<?php
$server="localhost";
$username="root";
$password="";

$con = new mysqli("localhost","root","","ZIP");


if($con){
    echo "connection successful";
}else{
    echo "not connected";
}


$db= $con->query("CREATE DATABASE if not exists ZIP");
if($db){
    echo "<p>database created</p>";
}else{
    echo "<p>database not created</p>";
}



$table= $con->query("CREATE TABLE if not exists zip_registration
(ID int(80)not null primary key auto_increment,
FULLNAME varchar(90)not null,
EMAIL varchar(80)not null,
PASSWORD varchar(100)not null,
DOB varchar(90)not null,
LOCATION varchar(90)not null,
WORK_DURATION varchar(90)not null,
WORK_AREA varchar(80)not null,
PARTICULAR_SKILL varchar(90)not null,
INDUSTRY varchar(90)not null,
MINIMUM_WAGE varchar(80)not null,
PICTURE varchar(100)not null)ENGINE=innoDB");
if($table){
    echo "table created";
}else{
    echo "table not created";
}
?>

<?php 

$con = new mysqli("localhost","root","","ZIP");

$table= $con->query("CREATE TABLE if not exists zip_msg
(ID int(80)not null primary key auto_increment,
USER_ID int(90)not null,
FULLNAME varchar(90)not null,
EMAIL varchar(80)not null,
MESSAGE text(160)not null,
DATE varchar(100)not null,
TIME varchar(80)not null,
REPLY text(160)not null,
REPLY_DATE varchar(90)not null,
REPLY_TIME varchar(90)not null)ENGINE=innoDB");
if($table){
    echo "<p>2nd table created</p>";
}else{
    echo "table not created";
}

?>

