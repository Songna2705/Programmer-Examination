<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>
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
<table width="100%" border="1" align="center" bordercolor="#666666">
  <tr>
    <td width="5%" align="center" bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td width="20%" align="center" bgcolor="#CCCCCC"><strong>title</strong></td>
    <td width="40%" align="center" bgcolor="#CCCCCC"><strong>Detail</strong></td>
    <td width="25%" align="center" bgcolor="#CCCCCC"><strong>Image</strong></td>
    <td width="15%" align="center" bgcolor="#CCCCCC"><strong>Status</strong></td>
  </tr>
  
  
  <?php
  //connect db
  include("connect.php");
  $sql = "SELECT * FROM news order by id";  //เรียกข้อมูลมาแสดงทั้งหมด
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
    echo "<td align='center'>" . $row['id'] . "</td>";
    echo "<td align='left'>" . $row["title"] . "</td>";
    echo "<td align='left'>" . $row["txtMessage"] . "</td>";
    echo "<td align='center'><img src='img/" . $row["img"] ." ' width='80'></td>";
    echo "<td align='center'><a href='news_detail.php?id=$row[id]'>คลิก</a></td>";
	echo "</tr>";
  }
  ?>
</table>