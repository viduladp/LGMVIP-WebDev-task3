<!DOCTYPE html>
<html>
<head>
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="hi.css">
</head>
<body>

    
    <center>

        <div id="base1">
            <div class="adm">
            
                <h1 >ADMIN LOGIN PAGE</h1><br>
                <form action="" method="post">
                    Username:<input class="btn"type="text" name="UserName" required><br><br>
                    Password:<input class="btn" type="password" name="password" required><br><br>
                    <input class="btn1"type="submit" name="submit">
                </form><br>
            </div>
            <?php
                session_start();
                if(isset($_POST['submit'])){
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"srdb");
                    $query = "select * from admin where UserName ='$_POST[UserName]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        if($row['UserName']==$_POST['UserName']){
                            if($row['Password']==$_POST['password']){
                                $_SESSION['UserName']==$row['UserName'];
                                header("Location:dashboard.php");
                            }
                            else{
                                echo "Wrong Password";
                            }

                        }
                        else{
                            echo "Wrong username";
                        }
                    }
               
                }
            ?>
        
                

        
        
        
        </div>
    
    </center>
</body>
</html>