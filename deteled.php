<?php 
include 'connect.php';
$ids=$_Get['id'];
$sql="DELETE FROM news WHERE id='$ids'";
if(mysqli_query($conn, $sql)){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');"; 
    echo "window.location='status_new.php';</script>"; 
} 
else{ 
    echo "Error : " . $sql . "<br>" .mysqli_error($conn);
    echo "<script>alert('Error!');</script>"; 
    } 

mysqli_close($conn);

?>