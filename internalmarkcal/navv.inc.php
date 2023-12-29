<?php
require('connection.inc.php');      /* for database connectivity*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <title>INTERNAL CALCULATION</title>

    <!--<link rel="stylesheet " href="style1.css">-->
    
    <style>
        .navbar{
            background-color: black;
            height: 90px;
            
        }
        .navbar ul{
            overflow: auto;
        }
        .navbar li{
            float:left;
            list-style: none; 
            margin: 17px 20px;
            
        }
        .navbar li a{
            padding: 3px 3px;
            text-decoration: none;
            color: white;
        }
        .navbar li a:hover{
            color: red
        }
        .search{
            float: right;
            color: white;
            padding: 12px 75px;
        }
        .navbar input{
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px 17px;
            width: 129px;
        }
        button
    {
        padding: 9px 25px;
        background-color:#F6F1F1;
        border: none;
        border-radius: 50px;
        cursor:pointer;
        margin-top: 12px;
        transition: all 0.3s ease 0s;
        
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#">INTERNAL CALCULATION</a></li>
                <li><a href="tlogin.php">Home</a></li>
                
                <a class="cta" href="insert.php" STYLE="margin-left:800px;margin-top:11px;"><button>Edit</button></a>
                <div class="search">
                
                <li><a href="tlogout.php" style=" margin-top:15px;">Logout</a></li>
                </div><br>
                <br>
            </ul>
        </nav>
    </header>
    
</body>

</html>