<?php
require('connection.inc.php');      /* for database connectivity*/
?>
<?php 
if(isset($_POST['login'])) 
{
    $username=$_POST['username'];
    $passwd=$_POST['pswd'];
    $subcode=$_POST['subcode'];
    $query="select * from teacher where username='$username' and password='$passwd' and subcode='$subcode'";         
    $result=mysqli_query($con,$query);
    $r=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
        if($count>0)
        {   
        $_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']=$username;
        $_SESSION['SUBCODE']=$subcode;
        
            ?>
            <script>
                alert("Login successfull");
                
            </script>
            <?php header('location:tlogin.php');  ?>
            <?php
        }
        else
        {
        ?>
        <script>
            alert("Login unsuccessfull");
        </script>
        <?php
        }

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body >
    
    <div class="signin">
    <H1>INTERNAL MARK CALCULATION</H1>
        <h2 style="padding-left:125px;">TEACHER'S LOGIN</h2>
       <div class="container"> 
        
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 ">
                        <h1 style="margin-left:85px;"> SIGN IN </h1>
                        <form  method="post">
                            <div class="form-group">
                                <label class="labels">Username</label><br>
                                <input type="text" name="username" placeholder="Username" class="form-control" required><br><br>
                            </div>
                            <div class="form-group">
                                <label for="PASSWORD" class="labels">Password</label><br>
                                <input type="password" name="pswd" class="form-control"  placeholder="Password" required><br><br>
                            </div>
                            <div class="form-group">
                                <label for="" class="labels">Subcode</label><br>
                                <input type="text" name="subcode" class="form-control"  placeholder="Subject code" required><br><br>
                            </div>
                                <input type="submit" name="login" class="signup-button" value="Sign In"> 
                            
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>