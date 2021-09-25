<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="hi.css">




</head>

<body >

    <center>
        <div id="base">
            <div class="container">
                <h1 >STUDENT RESULT MANAGEMENT SYSTEM</h1><br>
                <form action="" method="post">
                    <input class="btn"type="submit" name="admin_login" value="Admin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="btn"type="submit" name="student_login" value="Student">
                </form>
            </div>
            
            <?php
                if(isset($_POST['admin_login'])){
                    header("Location:admin_login.php");
                    
                }
                if(isset($_POST['student_login'])){
                    header("Location:student_login.php");
                    
                }
                


            ?>
        </div>
    </center>
</body>
</html>