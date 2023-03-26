<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style> ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>

<body>
<ul>
  <li><a href="status_new.php">Home</a></li>
  <li><a href="add_news.php">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>    
<table width="100%" border="0" align="center" class="square">
  <tr><td colspan="3" bgcolor="#CCCCCC"><b>Product</b></td></tr>
  
<?php
//connect db
    include("connect.php");
	$id = $_GET['id']; //สร้างตัวแปร p_id เพื่อรับค่า
	
	$sql = "SELECT * FROM news WHERE id=$id";  //รับค่าตัวแปร p_id ที่ส่งมา
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด
	echo "<tr>";
  	echo "<td width='25%' valign='top'><b>Title</b></td>";
    echo "<td width='279'>" . $row["title"] . "</td>";
    echo "<td width='20%' rowspan='4'><img src='img/" . $row["img"] . " ' width='100'></td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>Detail</b></td>";
    echo "<td width='50%'>" . $row["txtMessage"] . "</td>";
  	echo "</tr>";
  	//echo "<tr>";
    //echo "<td valign='top'><b>Price</b></td>";
    //echo "<td>" .number_format($row["p_price"],2) . "</td>";
  	//echo "</tr>"; 
  	echo "<tr>";
    echo "<td colspan='1' align='center'>";
    echo "<a href='cart.php?id=$row[id]&act=add'> แก้ไขข้อมูล </a></td>";
    //echo "<td colspan='1' align='center'>";
    //echo "<a href='deteled.php?id=$row[id]&act=add'> ลบข้อมูลทั้งหมด </a></td>";
    echo "<td><a href='deteled.php?id=<?=$row[id]?> class='btn btn-danger'> ลบข้อมูลทั้งหมด </a></td>";
    echo "</tr>";
?>
</table>

<p><center><a href="status_new.php">กลับไปหน้าสถานะ</a></center>
</body>
</html>