<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$full=$_POST['full'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$dob=$_POST['day'].'/'.$_POST['mon'].'/'.$_POST['year'];
$loc=$_POST['cloc'];
$wd=$_POST['wd'];
$wa=$_POST['wa'];
$pja=$_POST['pja'];
$sii=$_POST['sii'];
$mm=$_POST['mm'];


if($pja=="NIL"){
    $pja=$_POST['pax'];
      }

      if ($sii=="NIL") {
    $sii=$_POST['sic'];
}


$con = new mysqli("localhost","root","","ZIP");

$insert= $con->query("INSERT INTO zip_registration
(FULLNAME,EMAIL,PASSWORD,DOB,LOCATION,WORK_DURATION,WORK_AREA,PARTICULAR_SKILL,INDUSTRY,MINIMUM_WAGE,PICTURE)VALUE('$full','$email','$pass','$dob','$loc','$wd','$wa','$pja','$sii','$mm','')");
if($insert){

        
        echo "<script> window.location='login'; </script>";
        
}else{
    echo "<div style='border:10px solid green;padding:20px;margin:20px;' align=center>";
    echo "<p>NOT INSERTED AT ALL</p> <p>PLEASE TRY AGAIN LATER</p> <p>THANK YOU!</p>";
    echo "</div>";
}


}


?>

<!DOCTYPE html>
<html>
<head>
<title>ZIP_RECRUITER</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="ziprecruiter_clone.css" media="all">
</head>
<body>



<div class="first-div">

        <div style="float:left;padding:10px;"><img src="med/reed.svg" width="160"></div>

    <div class="buck">
            <a href="#" class="aaa">Job Seekers</a>

        <div class="rack">
            <p><a href="#">Search Jobs</a></p>
            <p><a href="#">Search Salaries</a></p>
            <p><a href="#">Job Seeker Reviews</a></p>
            <p><a href="#">Get the App</a></p>
            <p><a href="#">Create Free Account</a></p>
            <p><a href="#">Job Seeker Support</a></p>
        </div>

    </div>


    <div class="buck">
            <a href="" class="aaa">Small & Medium Businesses</a>
        <div class="rack" >
            <div><a href="#">1 - 5,000 Employees</a></div>
            <p><a href="#">Post a Job</a></p>
            <p><a href="#">How it works</a></p>
            <p><a href="#">Employer Reviews</a></p>
            <p><a href="#">Plans</a></p>
            <p><a href="#">New Account Help</a></p>
            <p><a href="#">Employer Support</a></p>
            <p><a href="#">Call: (877)252-1062</a></p>
        </div>
    
    </div>


    <div class="buck">
            <a href="" class="aaa">Enterprise Businesses</a>
        <div class="rack" >
            <div><a href="#">5,000+ Employees</a></div>
            <p><a href="#">Enterprise Overview</a></p>
            <p><a href="#">How it works</a></p>
            <p><a href="#">Customer stories</a></p>
            <p><a href="#">Get the App</a></p>
            <p><a href="#">Frequently Asked Questions</a></p>
            <p><a href="#">Request a Consultation</a></p>
        </div>
    
    </div>

    <div style="float:right;">

        <div style="float:left;margin-right:40px;padding:18px;">
            <button class="bbb">Post a Job</button>
            
        </div>
    
        <div style="float:left;margin-right:80px;padding:20px;">
            <a href ="login" target="-blank" class="aaa">sign in</a> 
        </div>

    </div>

</div>


 
    <div style="background:white;display:block;float:left;width:100%;">
        
        <section style="width:100%;margin-top:80px;float:left;">

             <div style="text-align:left;height:600px;">
                    
                    <video class="vid" src="med/bab.mp4" muted loop autoplay ></video>
                    


    
                    <div class="b-d">
                    
                        <h1 class="a-d">
                            More flexibility. A job<br> you love. A new <br>career. 
                            <span style="color:gold;">it all starts<br> here.</span>
                        </h1>
                    
                                <button onclick="bolt()" class="c-d">DISCOVER JOBS</button> 
        
                    </div>    
    
            </div>
    

        </section>
    
    </div>



    <script src="zip.js"></script>

<div id="main-div">
<button onclick="rolt()">BACK</button>

<div style="width:100%;" >
    <form name="zip-form"  id="zip-form" method="post" target="-blank" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <div  class="sub-div">
      <h1 style="text-align:center;color:gold;">ZIP RECRUITER FORM</h1>
            <div class="p-div" >
                <table>
                <tr> <td>FULLNAME:</td> <td><input type="text" size="30" name="full" required pattern="[A-Z ]{3,}"></td></tr> 
                
                <tr> <td>EMAIL:</td> <td><input type="text" size="30" required name="email"></td></tr> 
                
                <tr> 
                
                    <td>PASSWORD:</td> 
                    
                    <td class="p-a-s"> 
                        <span>
                            <input type="password" size="30" required name="pass" id="p-p-p" onclick="record()"> 
                        </span>
                        
                        <span id="p-a-t">
                            <input type="button" value="SHOW" onclick="login()" id="aaa"> 
                            <input type="button" value="SHOW" onclick="lob()" id="bbb">
                        </span>
                    
                    </td>
                    
            
                </tr>
               
                <tr> <td>DATE OF BIRTH:</td>
            
            <td>
<select name="day" required>
    <option>DAY</option>
    <?php for ($a=1; $a <= 31; $a++) { ?>
    <option><?php echo $a; ?></option>
    <?php } ?>  
</select>  
    :
      
    <select name="mon" required>
        <option>MONTH</option>
        <?php for ($a=12; $a >= 1; $a--) { ?>
        <option><?php echo $a; ?></option>
        <?php } ?>  
    </select>  
    :  
    <select name="year"  required>
        <option>YEAR</option>
        <?php for ($a=2022; $a >= 1990; $a--) { ?>
            <option><?php echo $a; ?></option>
            <?php } ?>  
    </select>  
</td>  </tr>

        <tr>
            <td>CURRENT LOCATION:</td>
         
            <td><select  name="cloc" style="text-transform:uppercase;" required>
             <option></option>
             <option>AFRICA</option>
             <option>UNITED STATES OF AMERICA</option>
             <option>SOUTH AMERICA</option>
             <option>NORTH AMERICA</option>
             <option>EUROPE</option>
             <option>ENGLAND</option>
             <option>GERMANY</option>
             <option>RUSSIA</option>
             <option>AUSTRALIA</option>
             <option>ASIA</option>
             <option>ANTARCTICA</option>
             </select></td>
        </tr>

                </table>
            </div>

            <div class="w-div">
           <table>
          <tr>  <td>WORK-DURATION:</td>
 <td><select name="wd" style="width:200px;" required>
     <option></option>
     <option>FULL TIME</option>
     <option>PART TIME</option>
 </select></td> </tr>

    <tr>  <td>WORK-PLACE/WORK-AREA:</td>
 <td><select name="wa" style="width:200px;" required>
    <option></option>
    <option>OFFICE</option>
    <option>REMOTE</option>
    <option>HYBRID</option>
</select></td> </tr>

<tr>
    <td>PARTICULAR SKILL:</td>
    <td >
        <select name="pja" id="ina" style="text-transform:uppercase;" required onchange="rock()">
            <option></option>
            <option>Customer Services</option>
            <option>Communication</option>
            <option>Computer Programming</option>
            <option>Software Engineering</option>
            <option>Driving</option>
            <option>Medical Science</option>
            <option>Data Science</option>
            <option>Project Management</option>
            <option>Social Media</option>
            <option>Sales</option>
            <option>NIL</option>
        </select>
        <input type="text" id="ind" size="25" name="pax"  placeholder="OTHER SKILLS">
    </td> 
</tr>
 

<tr>
<td>SPECIFIIED INDUSTRY OF INTEREST:</td>

<td> 
    <select name="sii"  id="ink" style="text-transform:uppercase;" required onchange="deck()">
           <option></option>
           <option>business</option>
                   <option>transportation and storage</option>
                           <option>retail</option>
                               <option>healthcare</option>
                                           <option>Finance and insurance</option>
                                               <option>manufacturing</option>
                                                   <option>technology</option>
                                                               <option>food</option>
                                                                       <option>caregiving</option>
                                                                           <option>travel</option>
                                                                               <option>NIL</option>
    </select><input type="text"  id="ino" size="25" name="sic"  placeholder="OTHER INDUSTRY">
</td>
</tr>


<tr> <td> MINIMUM WAGE OF EXPECTATION:</td> <td><input type="text" size="20" name="mm" value="$" required ></td> </tr>

</table>
</div>
            
<div class="but-div">
    <button class="but">REGISTER</button>
</div>
    
    
    </div>

</form>

</div>
</div>



<div class="reg-div">

    <div style="padding-left:100px;color:black;font-weight:bolder;">
                    <h1>With a personal recruiter, you'll get matched to roles that are right for you.</h1>
    </div>

    <div id="reg-div">

            <div class="cur-in">
                    <div class="cur-ina">
                        <div class="sqr">
                        <h3>Discover New Opportunities</h3>
                        <p>Phil, your AI personal recruiter, works 24/7 to send you jobs</p> 
                        <p>that are a great match for your skills and experience—so you </p>
                        <p>never miss an opportunity.</p>
                        </div>
                        
                        <div class="imga"><img src="med/1a.webp" width="320"></div>
                    </div>

                    <div class="cur-inb">
                        <div class="sqr">
                        <h3>Get Invited to Apply to Jobs</h3>
                        <p>Phil pitches your profile to employers for jobs you'll love so</p> 
                        <p>you stand out and these companies can reach out to you</p> 
                        <p>directly.</p>
                        </div>
                        <div class="imgb"><img src="med/1b.png" ></div>
                    </div>
                    
                    <div class="cur-inc">
                        <div class="sqr">
                        <h3>Save time with 1-Click Apply</h3>
                        <p>No more filling out lengthy applications! Once Phil has your</p>
                        <p>key info, you can apply to most jobs with one click.</p>
                        </div>
                        <div class="imgc"><img src="med/1c.png" ></div>
                    </div>
            </div>

    </div>


</div>

<div class="opax">
    <div>
        <p>www.ziprecruiter_clone.com <span style="float:right;">Copyright@ kestherogbu.com</span></p>
    </div>

</div>


</body>
</html>