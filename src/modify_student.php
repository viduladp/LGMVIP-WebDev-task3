<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"srdb");
    $query = "update student set StuName='$_POST[sname]',Gender='$_POST[sgender]',DOB='$_POST[sdob]',ClassName='$_POST[cname]',
    Mathematics='$_POST[mat]',Science='$_POST[sc]',SocialScience='$_POST[ss]',English='$_POST[eng]',Kannada='$_POST[kan]',
    Hindi='$_POST[hin]',Total='$_POST[total]',Grade='$_POST[grd]' where StuId='$_POST[StuId]'";
    $query_run = mysqli_query($connection,$query);
    


?>
<script type="text/javascript">
    alert("Details modified successfully");
    window.location.href="dashboard.php";
</script>