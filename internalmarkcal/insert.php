<?php
require('navv.inc.php');      /* for database connectivity*/
?>
<?php 
 if(isset($_POST['calculate'])) 
 {
    $username=$_SESSION['ADMIN_USERNAME'];
    $subcode=$_SESSION['SUBCODE'];
    if($username == true && $subcode==true)
    {

    }
    else
    {
        header('location:index.php');
    }
     
     
     $fullname=$_POST['fullname'];
     
     $regno=$_POST['regno'];
     $ss1=$_POST['ss1'];
     $ss2=$_POST['ss2'];
     $ss3=$_POST['assign1'];
     $ss4=$_POST['assign2'];
     $ss5=$_POST['sem'];
     $ss6=$_POST['atten'];
     $internal_mark=($ss1+$ss2+$ss3+$ss4+$ss5+$ss6);
    
    
     $query="insert into studentmarks(fullname,subcode,regno,ss1,ss2,assign1,assign2,sem,atten,internalmarks) values('$fullname','$subcode','$regno','$ss1','$ss2','$ss3','$ss4','$ss5','$ss6','$internal_mark')";
     
     if(mysqli_query($con,$query))
     {
        
         ?>
         <script>
             alert("Details added)");
         </script>
         <!---<?php header('location:tlogin.php'); ?>-->
         <?php
     }
     else
     {
             ?>
         <script>
             alert("action not successful");
         </script>
         
         <?php
             
     }
     
    

     

    }
 
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="insert.css" />
  </head>
  <body>
  <!--<h2> <?php echo $_SESSION['ADMIN_USERNAME']?> </h2>
  <h2> <?php echo $_SESSION['SUBCODE']?> </h2>-->
  
    <div class="container" style="margin-top:50px;margin-bottom:50px;margin-left: 390px;background-image:url(images/background2.jpg)">
      <h1 class="form-title">ENTER MARKS</h1>
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="main-user-info">
            <div class="user-input-box">
              <label for="fullName" style="color:black;">Full Name</label>
              <input type="text"
                      id="fullName"
                      name="fullname"
                      />
            </div>
            <div class="user-input-box">
              <label for="username" style="color:black;">Registration no</label>
              <input type="text"
                      id="username"
                      name="regno"
                      />
            </div>
            <div class="user-input-box">
              <label for="sessional1" style="color:black;">Sessional 1(10)</label>
              <input type="text"
                      id="email"
                      name="ss1"
                      />
            </div>
            <div class="user-input-box">
              <label for="sessional2" style="color:black;">Sessional 2(10)</label>
              <input type="text"
                      id="phoneNumber"
                      name="ss2"
                     />
            </div>
            <div class="user-input-box">
              <label for="sessional3" style="color:black;">Assignment 1(5)</label>
              <input type="text"
                      id="password"
                      name="assign1"
                      />
            </div>
            <div class="user-input-box">
              <label for="sessional4" style="color:black;">Assignment 2(5)</label>
              <input type="text"
                      id="confirmPassword"
                      name="assign2"
                      />
            </div>
            <div class="user-input-box">
              <label for="sessional4" style="color:black;">Seminar(5)</label>
              <input type="text"
                      id="confirmPassword"
                      name="sem"
                      />
            </div>
            <div class="user-input-box">
              <label for="sessional4" style="color:black;">Attendance(5)</label>
              <input type="text"
                      id="confirmPassword"
                      name="atten"
                      />
            </div>
          
        </div>
        
        <div class="form-submit-btn" style="background-color:black;">
          <input type="submit" value="calculate" name="calculate">
        </div>
      </form>
    </div>
  </body>
</html>