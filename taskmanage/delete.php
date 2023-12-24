<?php
include 'connection.php';
mysqli_query($con,"DELETE FROM tasks WHERE id='" . $_GET["id"] . "'");
echo '<script type="text/javascript"> alert("Data Deleted Successfuly!") 
document.location.href="create_task.php";
</script>';
?> 
