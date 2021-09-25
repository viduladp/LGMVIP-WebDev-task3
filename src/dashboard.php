<!DOCTYPE html>
<html>
<head>
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #header{
            height:8%;
            width:1540px;
            top:2%;
            background-color:rgb(27, 7, 91);
            
            color:white;
            text-transform:uppercase;
            font-size:2.5rem;
            
        }
        #lside{
            
            padding:10px 20px;
            padding-top:8%;
            background-color: rgb(148, 245, 148);
            min-height:100vh;
            width:100%;
            background-size:cover;
            position:fixed;
            


        }
        .btn{
            width:250px;
            height:50px;
            font-size:1.5rem;
            background-color:rgb(27, 7, 91);;
            text-transform:uppercase;
            color:white;
        }
        .btn:hover{
            background-color:crimson;
        }
        
        #header a{
            font-size:1rem;
            color:orange;
            
        }
        #rside{
            height:85%;
            width:78%;
            background-color:whitesmoke;
            position:fixed;
            left:20%;
            top:14%;
            color:red;
            border: solid 1px black;
        } 
        #rside form{
            
            font-size:1.5rem;
            font-weight:700;
            font-size:1.5rem;
           
            
            
            

        } 
        #rside form input{
            padding:5px 20px;
            
        } 
        h1{
            font-size:1.5rem;
        }
        #rside  .a{
            margin-top:30px;
            font-size:1.3rem;
            margin-left:35%;
        }
        
        
        #rside .b{
            margin-top:15px;
            margin-left:15%;
        }
        #rside table{
            color:black;

        }
        .btn2{
            margin-top:10px;
            margin-left:45%;


        }
        #rside  .c{
            margin-top:20px;
            font-size:1.3rem;
            margin-left:15%;
            
        }
        #rside .d{
            margin-top:30px;
            font-size:1.3rem;
            margin-left:35%;
        }
        #rside .f{
            font-size:1.5rem;
            font-weight:700;
            font-size:1.5rem;
            margin-top:20%;
        }
       
        
            

        
        
        
            
            
            
            

        
        
    </style>
    <?php
        session_start();
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"srdb");
        
                    
    ?>

</head>
<body >
    <div id="header">
        <center>ADMIN DASHBOARD &nbsp;&nbsp;&nbsp;<a href="logout.php">LogOut</a></center>
        
            
        
    </div>
    
    <div id="lside">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input class= "btn"type="submit" name="search" value="search student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class= "btn" type="submit" name="modify" value="modify student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class= "btn" type="submit" name="add" value="add student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class= "btn" type="submit" name="delete" value="delete student">
                    </td>
                </tr>
            </table>
        </form>
   
   
    </div>
    <div id="rside">
        <div id="demo">
            <?php
                if(isset($_POST['search']))
                {
                    ?>
                    <center>
                        <form class="f" action="" method="post">
                            Enter Student Id:
                            <input type="text" name="StuId">
                            <input  type="submit" name="search_by_id" value="search">
                        </form>
                    </center>
                    <?php
                }
                if(isset($_POST['search_by_id']))
                {
                    
                    $query = "select * from student   where StuId  ='$_POST[StuId]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                        <form class="b">
                        
                            <table  >
                                <tr>
                                    <td>Student Id:</td>
                                    <td>
                                        <input type="text" value="<?php echo $row['StuId'];?>" disabled>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name:</td>
                                    <td>
                                        <input type="text" value="<?php echo $row['StuName'];?>" disabled>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Gender'];?>" disabled>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB:</td>
                                    <td>
                                        <input type="text" value="<?php echo $row['DOB'];?>" disabled>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Class Name:</td>
                                    <td>
                                        <input type="text" value="<?php echo $row['ClassName'];?>" disabled>
                                    </td>
                                </tr>
                                
                            
                                
                            </table><br>
                        </form>
                        <form class="a">
                            <table border='1'>
                                <tr>
                                    <th>Subject&nbsp;&nbsp;&nbsp;</th>
                                    <th>Marks&nbsp;&nbsp;&nbsp;</th>
                                    
                                </tr>
                                <tr>
                                    <th>Mathematics&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Mathematics'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Science&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Science'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Social Science&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['SocialScience'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>English&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['English'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kannada&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Kannada'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Hindi&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Hindi'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Total'];?>" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Grade&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" value="<?php echo $row['Grade'];?>" disabled>
                                    </td>
                                </tr>
                                
                            </table>
                        </form>
                        
                        <?php
                    }
                }
               
                   
                
            ?>
            <?php
                if(isset($_POST['modify']))
                {
                    ?>
                    <center>
                        <form class="f" action="" method="post">
                            Enter Student Id:
                            <input type="text" name="StuId">
                            <input type="submit" name="search_by_idm" value="search">
                        </form>
                    </center>
                    <?php
                }
                if(isset($_POST['search_by_idm']))
                {
                    
                    $query = "select * from student   where StuId  ='$_POST[StuId]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                        
                        <form  action="modify_student.php" method="post">
                            <table class="c">
                                <tr>
                                    <td>Student Id:</td>
                                    <td>
                                        <input type="text" name="StuId" value="<?php echo $row['StuId'];?>" >
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name:</td>
                                    <td>
                                        <input type="text"name="sname" value="<?php echo $row['StuName'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <input type="text" name="sgender" value="<?php echo $row['Gender'];?>" >
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB:</td>
                                    <td>
                                        <input type="text" name="sdob" value="<?php echo $row['DOB'];?>" >
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Class Name:</td>
                                    <td>
                                        <input type="text" name="cname" value="<?php echo $row['ClassName'];?>" >
                                    </td>
                                </tr>
                                
                            
                                
                            </table>
                        
                    
                    
                            <table class="d" border='1'>
                                <tr>
                                    <th>Subject&nbsp;&nbsp;&nbsp;</th>
                                    <th>Marks&nbsp;&nbsp;&nbsp;</th>
                                    
                                </tr>
                                <tr>
                                    <th>Mathematics&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="mat" value="<?php echo $row['Mathematics'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>Science&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="sc" value="<?php echo $row['Science'];?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Social Science&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="ss"value="<?php echo $row['SocialScience'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>English&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="eng" value="<?php echo $row['English'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kannada&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="kan" value="<?php echo $row['Kannada'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>Hindi&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="hin" value="<?php echo $row['Hindi'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text" name="total"value="<?php echo $row['Total'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>Grade&nbsp;&nbsp;&nbsp;</th>
                                    <td>
                                        <input type="text"name="grd" value="<?php echo $row['Grade'];?>" >
                                    </td>
                                </tr>
                                
                                
                            </table>
                            <input class="btn2" type="submit" name="mod" value="SAVE">
                        </form>
                        
                        <?php
                    }
                }
               
                   
                
            ?>
            <?php
                if(isset($_POST['add'])){
                    ?>
                    <center><h1>ENTER THE DETAILS:</h1></center>
                    
                        <form class="a" action="add_student.php" method="post">
                            <table>
                                
                                        <tr>
                                            <td>Student Id:</td>
                                            <td>
                                                <input type="text" name="StuId" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Student Name:</td>
                                            <td>
                                                <input type="text" name="sname" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>
                                                <input type="text" name="sgender" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DOB:</td>
                                            <td>
                                                <input type="text" name="sdob" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Class Name:</td>
                                            <td>
                                                <input type="text" name="cname" required>
                                            </td>
                                        </tr>
                            </table>
                            <table>
                                        <tr>
                                            <td>Mathematics:</td>
                                            <td>
                                                <input type="text" name="mat" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Science:</td>
                                            <td>
                                                <input type="text" name="sc" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Science:</td>
                                            <td>
                                                <input type="text" name="ss" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>English:</td>
                                            <td>
                                                <input type="text" name="eng" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kannada:</td>
                                            <td>
                                                <input type="text" name="kan" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hindi:</td>
                                            <td>
                                                <input type="text" name="hin" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total:</td>
                                            <td>
                                                <input type="text" name="total" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Grade:</td>
                                                <td>
                                                <input type="text" name="grd" required>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="add" value="ADD">
                                            </td>
                                        </tr>
                                    
                                
                                
                                
                                
                            </table>
                        </form>
                    
                    <?php


                }
            ?>
            <?php
                if(isset($_POST['delete'])){
                    ?>
                    <center>
                        <form class="f" action="delete_student.php" method="post">
                            Enter Student Id:
                            <input type="text" name="StuId">
                            <input type="submit" name="search_by_idd" value="DELETE">
                        </form>
                    </center>
                    <?php
                }
            ?>
        </div>
                        
    </div>
</body>
</html>

