<!DOCTYPE html>
<html>
<head>
<title>REGISTERED</title>
<meta charset="utf-8">
</head>
<body>

<div style="float:right;width:100%;">
    

    <nav id="wap-div">
                
        <section>
            <div class="wap">
                <button class="cad"><a href="ziprecruiter_clone.php" target="blank" id="cad">HOME</a></button>
            </div>
            
            <div class="wap">
                <button class="cad"><a href="login" target="-blank" id="cad">LOGIN</a></button>
            </div>

            <div  class="wap">
                <button class="cad"><a href="zip_select"  id="cad">REGISTERED CANDIDATES</a></button>
            </div>
        
            <div class="wap">
                <button class="cad"><a href="omega" target="---blank" id="cad">OMEGA CANDIDATES</a></button>
            </div>
            
            <div class="wap">
                <button class="cad"><a href="msg_recieve" target="----blank" id="cad">MESSAGES</a></button>
            </div>
        
        
        </section>
    </nav>
</div>

<?php

$con = new mysqli("localhost","root","","ZIP");

$select=$con->query("SELECT * FROM zip_registration");
if($select){
    echo "<link rel='stylesheet' href='ziprecruiter_clone.css' media='all'>";
    echo "<div class=zpp-div style='display:block;margin-left:310px;'>";
    echo "<table>";
    echo "<tr id=rad>
    <td>FULLNAME</td> 
    <td>EMAIL</td> 
    <td>PASSWORD</td> 
    <td>DOB</td> 
    <td>LOCATION</td> 
    <td>WORK_DURATION</td> 
    <td>WORK_AREA</td> 
    <td>PARTICULAR_SKILL</td> 
    <td>INDUSTRY</td> 
    <td>MINIMUM_WAGE</td>
    </tr>";
    while($row=$select->fetch_assoc()){
    echo "<tr>";
    echo "<td class='rud'>$row[FULLNAME]</td> <td>$row[EMAIL]</td> <td>$row[PASSWORD]</td> <td>$row[DOB]</td> <td>$row[LOCATION]</td> <td>$row[WORK_DURATION]</td>
    <td>$row[WORK_AREA]</td> <td>$row[PARTICULAR_SKILL]</td> <td>$row[INDUSTRY]</td> <td>$row[MINIMUM_WAGE]</td></tr>";
    }
    echo "</table>";
    echo "</div>";
}

$up=$con->query("UPDATE zip_registration SET ID = '16'  WHERE ID=23;");


?>


</body>
</html>
