<!DOCTYPE html>
<html>
<head>
    <title>Student login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="hi.css">
</head>
<body>

    <center>
        <div id="base2">
            <div class="stu">
        
                <h1 >STUDENT LOGIN PAGE</h1><br>
                <form action="" method="post">
                   
                    Name:<input class="btn" type="text" name="StuName" required><br><br>
                    Std. Id:<input class="btn" type="text" name="StuId" required><br><br>
                    <input  class="btn1"type="submit" name="submit">
                    
                </form><br>
                <marquee>All The Best!!!!<marquee>
            </div>
            <?php
                session_start();
                if(isset($_POST['submit'])){
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"srdb");
                    $query = "select * from student where StuName ='$_POST[StuName]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        if($row['StuName']==$_POST['StuName']){
                            if($row['StuId']==$_POST['StuId']){
                                $_SESSION['StuName']=$row['StuName'];
                                $_SESSION['StuId']=$row['StuId'];


                                header("Location:result.php");
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