<?php
require('nav.inc.php');      /* for database connectivity*/
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
  
    <link rel="stylesheet" href="slogin.css"/>
</head>
<body>
  <h2> <?php echo $_SESSION['ADMIN_USERNAME']?> </h2>
<div class="cart-table"> 
  <div class="container-fluid">
      <h3>My Cart</h3>
    <div class="table-responsive col-lg-12">
      
        <table class="table table-light table-striped table-hover table-borderless">
          <thead class=" table-dark">
            <tr>
              <!---<th scope="col">Product id</th>--->
              <th scope="col">SUBJECT CODE</th>
              <th scope="col">SESSIONAL 1</th>
              <th scope="col">SESSIONAL 2</th>
              <th scope="col">SESSIONAL 3</th>
              <th scope="col">SESSIONAL 4</th>
              <th scope="col">INTERNAL MARKS</th>

            </tr>
          </thead>
            <?php 
              
              $regno=$_SESSION['ADMIN_USERNAME'];
              if($regno == true)
              {

              }
              else
              {
                header('location:index2.php');
              }
              $query="SELECT * FROM studentmarks where regno='$regno'" ;
              $result=mysqli_query($con,$query);
              while($row=mysqli_fetch_assoc($result))
              {
            ?>
            <tr>
              <td><?php echo $row['subcode'];?></td>
              <td><?php echo $row['ss1'];?></td>
              <td><?php echo $row['ss2'];?></td>
              <td><?php echo $row['ss3'];?></td>
              <td><?php echo $row['ss4'];?></td>
              <td><?php echo $row['internalmarks'];?></td>
    
              
              <td>
              <!--<a href="slogin.php?remove=<?php echo $row['regno'] ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"">--><i class="fas fa-trash">
              </i></a>
              </td>
            </tr>
            
            <?php } ?>
            
        </table> 
                   
      
       
    </div>
  </div>
</div>
</body>


</html> 