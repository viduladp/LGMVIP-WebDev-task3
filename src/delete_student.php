<script type="text/javascript">
    if(confirm("Are you sure you want to delete?")){
        document.write("<?php 
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"srdb");
            $query = "delete from student where StuId='$_POST[StuId]'";
            $query_run = mysqli_query($connection,$query);
            ?>");
            window.location.href="dashboard.php";

            

    }
    else{
        window.location.href="dashboard.php";
    }
    

</script>




