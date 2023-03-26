<meta charset="UTF-8" />
<?php 
echo "<pre>"; 
print_r($_POST); 
echo "</pre>"; 
require_once('connect.php'); 
    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย 
    date_default_timezone_set('Asia/Bangkok'); 
    //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด 
    $date1 = date("Ymd_His"); 
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน 
    $numrand = (mt_rand()); 
    //รับชื่อไฟล์จากฟอร์ม 
    $title = $_POST['title']; 
    $txtMessage = $_POST['txtMessage']; 
    $m_time = $_POST['times']; 
    $img = (isset($_POST['img']) ? $_POST['img'] : ''); 
    
    $upload=$_FILES['img']; 
    if($upload <> '') { 
        //โฟลเดอร์ที่เก็บไฟล์ 
        $path="img/"; 
        //ตัวขื่อกับนามสกุลภาพออกจากกัน 
        $type = strrchr($_FILES['img']['name'],"."); 
        //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่ 
        $newname =$numrand.$date1.$type; 
        $path_copy=$path.$newname; 
        $path_link="img/".$newname; 
        //คัดลอกไฟล์ไปยังโฟลเดอร์ 
        move_uploaded_file($_FILES['img']['tmp_name'],$path_copy); 
    } 
    
    
            $sql = "INSERT INTO news(title, txtMessage, times, img ) 
            VALUES 
            ( 
            '$title', 
            '$txtMessage', 
            '$m_time', 
            '$newname' 
            )"; 
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn)); 
    mysqli_close($conn);
if($result){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('เพิ่มข่าวเรียบร้อย');"; 
    echo "window.location='status_new.php';"; 
    echo "</script>"; 
} 
else{ 
    echo "<script type='text/javascript'>"; 
    echo "alert('Error!');"; 
    echo "window.location='list_article.php';"; 
    echo "</script>"; 
    } 
?>