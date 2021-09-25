<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"srdb");
    $query = "insert into student values('','$_POST[StuId]','$_POST[sname]','$_POST[sgender]','$_POST[sdob]','$_POST[cname]','$_POST[mat]','$_POST[sc]','$_POST[ss]','$_POST[eng]','$_POST[kan]','$_POST[hin]','$_POST[total]','$_POST[grd]')";
    $query_run = mysqli_query($connection,$query);
    
    
    


?>
<script type="text/javascript">
    alert("Student added successfully");
    window.location.href="dashboard.php";
</script>