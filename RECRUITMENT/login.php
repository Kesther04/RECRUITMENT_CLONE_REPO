<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "zip.css" media="all">
    <link rel = "stylesheet" href = "rep_zip.css" media="all">
    <title>LOGIN</title>
</head>

<body class="log-body">
    
    <div class="first-div">
    
        <form name="log"  action = "backend_login.php" method = "post">
        
            <div style="text-align:center;padding:10px;">
                <img src="med/reed.svg" width="230">
            </div>
            
            <div>
                <h1 style="text-align:center;color:gold;">LOGIN</h1>
            </div>
            
            <p style="color:red;text-align:center">
            <?php if(isset($_GET['m'])){ 
                echo $_GET['m']; 
            }
            ?>
            </p>

            <table>
                
                <tr> 
                    <td>EMAIL ADDRESS:</td> 
                    <td><input type="text" size="40" placeholder="EMAIL ADDRESS" style="font-size:15px;" name="email"></td> 
                </tr>
                
                <script src="pass.js"></script>

                <tr> 
                    <td>PASSWORD:</td> 
                    <td><input type="password" size="40" placeholder="PASSWORD" style="font-size:15px;" id="p-pass" name="pword"></td>
                </tr>

                <tr>
                    
                    <td id="tock"><input type="button" value="TEXT" style="font-size:15px;"  onclick="login()"></td>
                    <td id="pock"><input type="button" value="TEXT" style="font-size:15px;"  onclick="lob()"></td>
                </tr>
            
            </table>
            
            <p style="text-align:center;">
                <i>
                <a href="" style="font-size:15px;text-decoration:none;color:gold;">forgot password?</a>
                </i>
            </p>
                
            <p id="btn"> 
                <button class="btn">LOGIN</button> 
            </p>

        </form>
    
    </div> 

</body>

</html>


