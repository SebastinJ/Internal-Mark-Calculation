<?php
require('navv.inc.php');      /* for database connectivity*/
?>

   <?php 
       if(isset($_GET['delete']))
         {
           $remove_id=$_GET['delete'];
           mysqli_query($con, "delete from studentmarks where regno='$remove_id'" );
           
         }
   ?>
<?php
/*
   if(!empty($_GET['addtocart']))
   {
        $pid=$_GET['pid'];
        $qty=$_GET['qty'];
        $uid=$_GET['uid'];
        $query="insert into cart(userid,productid,qtty) values($uid,$pid,$qty)";
        if(mysqli_query($con,$query))
        {
          echo "recored inserted";
        }
        else
        {
          echo "not recorded";
        }
   }
?>
<?php 
    if(isset($_GET['remove']))
      {
        $remove_id=$_GET['remove'];
        mysqli_query($con, "delete from cart where cartid='$remove_id'" );
        header('location:checkout1.php');
      }
      */
?> 
<html>
<head>
  
    <link rel="stylesheet" href="tlogin.css"/>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!--<h2> <?php echo $_SESSION['ADMIN_USERNAME']?> </h2>-->
<div class="cart-table" style="margin-top:100px;"> 
  <div class="container-fluid">
      <!--<button class="sub-cart-button"><a href="insert.php">EDIT</a></button>-->
    <div class="table-responsive col-lg-12">
      
        <table class="table table-light table-striped table-hover table-borderless">
          <thead class=" table-dark">
            <tr>
              <!---<th scope="col">Product id</th>--->
              <th scope="col">REGNO</th>
              <th scope="col">NAME</th>
              <th scope="col">SESSIONAL 1</th>
              <th scope="col">SESSIONAL 2</th>
              <th scope="col">ASSIGNMENT 1</th>
              <th scope="col">ASSIGNMENT 2</th>
              <th scope="col">SEMINAR </th>
              <th scope="col">ATTENDANCE </th>
              <th scope="col">INTERNAL MARKS </th>
              <th scope="col">DELETE </th>
              <th scope="col">EDIT </th>

              
            </tr>
          </thead>
            <?php 
              
              $username=$_SESSION['ADMIN_USERNAME'];
                    $subcode=$_SESSION['SUBCODE'];
                    if($username == true && $subcode==true)
                    {
      
                    }
                    else
                    {
                      header('location:index.php');
                    }
              
              $query="SELECT regno,fullname,ss1,ss2,assign1,assign2,sem,atten,internalmarks FROM  studentmarks  where subcode='$subcode'" ;
              $result=mysqli_query($con,$query);
              while($row=mysqli_fetch_assoc($result))
              {
            ?>
            <tr>
              <td class="cell"><?php echo $row['regno'];?></td>
              <td class="cell"><?php echo $row['fullname'];?></td>
              <td class="cell"><?php echo $row['ss1'];?></td>
              <td class="cell"><?php echo $row['ss2'];?></td>
              <td class="cell"><?php echo $row['assign1'];?></td>
              <td class="cell"><?php echo $row['assign2'];?></td>
              <td class="cell"><?php echo $row['sem'];?></td>
              <td class="cell"><?php echo $row['atten'];?></td>
              <td class="cell"><?php echo $row['internalmarks'];?></td>
              <td class="cell"><a href="tlogin.php?delete=<?php echo $row['regno'] ?>" onclick="return confirm('delete student details?')" class="delete-btn""><i class="fas fa-trash" style="color:black;"></i></a></td>
              <td><button class="update-button"><a href="update.php?regno=<?php echo $row['regno']?> ">UPDATE</a></button></td>
            </tr>
            
            <?php } ?>
            
        </table> 
                   
      
       
    </div>
  </div>
</div>
</body>


</html> 