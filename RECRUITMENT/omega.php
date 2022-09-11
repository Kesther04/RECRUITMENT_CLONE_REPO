<!DOCTYPE html>
<html>
<head>
<title>OMEGA</title>
<meta charset="UTF-8">
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
                <button class="cad"><a href="omega"  id="cad">OMEGA CANDIDATES</a></button>
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
    echo "<body style='background:linear(to bottom,red,blue);height:2000px;'>";
    echo "<div style='display:block;margin-left:300px;width:80%;'>";
    while($row=$select->fetch_assoc()){
    
    echo "
        <div class='lect'>
        <h3 style='text-align:center;padding-left:0px;color:gold;'>$row[FULLNAME]</h3>
        <p>EMAIL : $row[EMAIL]</p>
        <p>PASSWORD : $row[PASSWORD]</p>
        <p>DOB : $row[DOB]</p>
        <p>LOCATION : $row[LOCATION]</p>
        <p>WORK DURATION : $row[WORK_DURATION]</p>
        <p>WORK AREA : $row[WORK_AREA]</p>
        <p>PARTICULAR SKILL : $row[PARTICULAR_SKILL]</p>
        <p>INDUSTRY : $row[INDUSTRY]</p>
        <p>MINIMUM WAGE : $row[MINIMUM_WAGE]</p>
        </div>


        ";
    }
    echo "</div>";
    echo "</body>";
}


$up = $con->query("UPDATE zip_registration SET FULLNAME = 'OKIKE RAYMOND' WHERE ID=5");


?>

</body>
</html>

