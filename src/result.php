<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
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
             background-color: rgb(243, 200, 185);;
            min-height:100vh;
            width:100%;
            background-size:cover;
            position:fixed;
            
            


        }
        .btn{
            width:200px;
            height:50px;
            font-size:1.5rem;
            background-color:rgb(27, 7, 91);
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
            height:78%;
            width:77%;
            background-color:whitesmoke;
            position:fixed;
            left:20%;
            top:15%;
            color:red;
            border: solid 1px black;
        } 
        #rside  .a{
            margin-top:30px;
            font-size:1.5rem;
            margin-left:35%;
        }
        
        
        #rside .b{
            margin-top:15px;
            margin-left:20%;
            font-size:1.5rem;
        }
        #rside table{
            color:black;

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
        <center>RESULT &nbsp;&nbsp;&nbsp;<a href="logout.php">LogOut</a></center>
        
            
        
    </div>
    
    <div id="lside">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input class= "btn"type="submit" name="result" value="RESULT">
                        
                    </td>
                </tr>
                
            </table>
        </form>
   
   
    </div>
    <div id="rside">
        <div id="demo">
            
            <?php
                if(isset($_POST['result'])){
                    $query="select * from student where StuId ='$_SESSION[StuId]'";
                    $query_run=mysqli_query($connection,$query);
                    while($row= mysqli_fetch_assoc($query_run)){
                        ?>
                        <form class="b">
                            <table>
                                <tr>
                                    <td>
                                        <b>Student Id:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['StuId']?>"disabled>
                                    </td>
                                    <td>
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['StuName']?>"disabled>
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Gender:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Gender']?>"disabled>
                                    </td>
                                    <td>
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['DOB']?>"disabled>
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Class Name:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['ClassName']?>"disabled>
                                    </td>
                                    
                                </tr>
                            </table>
                        </form>
                        <form class="a">
                            <table border='1'>
                                <tr>
                                        <th>Subject&nbsp;&nbsp;&nbsp;</th>
                                        <th>Marks&nbsp;&nbsp;&nbsp;</th>
                                        
                                </tr>
                                <tr>
                                    <td>
                                        <b>Mathematics:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Mathematics']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Science:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Science']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Social Science:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['SocialScience']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>English:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['English']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Kannada:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Kannada']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Hindi:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Hindi']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Total:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Total']?>"disabled>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <b>Grade:</b>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['Grade']?>"disabled>
                                    </td>
                                    
                                </tr>
                            </table>
                        </form>
                        <?php

                    }
                }
            ?>
        </div>
                        
    </div>
</body>
</html>

