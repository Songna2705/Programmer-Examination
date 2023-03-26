<?php 
include 'connect.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADD ARTICLE devbanban.com</title>
	<!--bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
        <br><br><br>
    <form action="insert new.php" method="POST" enctype="multipart/form-data"  name="addform" class="form-horizontal" id="addform">
    	<div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
       <h3> เพิ่มข่าว : </h3>
       </div>
       </div>
       <div class="form-group">
       	<div class="col-sm-2" align="right"> หัวข้อข่าว : </div>
          <div class="col-sm-8" align="left">
            <input  name="title" id="title" type="text" required class="form-control"  placeholder="หัวข้อข่าว"/>
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" align="right">รายละเอียด</div>
          <div class="col-sm-8" align="left">
           <textarea name="txtMessage" id="txtMessage" class="ckeditor" cols="69" rows="5"></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
        <div class="col-sm-2" align="right">ไฟล์ประกอบ</div>
          <div class="col-sm-7" align="left">
            <input type="file" name="img" id="img" required>
          </div>
        </div>
        <div class="form-group">
        <div class="dropdown">
            <div class="col-sm-2" align="right">ประเภทข่าว</div>
              <div class="col-sm-7" align="left">
                <div class="col-sm-4" align="left">
                    <select name="times" id="times" required="required" class="form-control">
                      <option value="">-เลือกประเภท-</option>
                      <option value="8:30">กีฬา</option>
                      <option value="9:00">บันเทิง</option>
                      <option value="19:00">การเมือง</option>
                      <option value="19:30">การเงิน</option>
                    </select>
                  </div>
              </div>
            </div>
        </div>
        
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn"> draft</button>
          <button type="submit" class="btn btn-primary" id="btn"> enable</button>
          <button type="submit" class="btn btn-primary" id="btn"> disable</button>
          <button type="reset" class="btn btn-danger" id="btndeletc"> delete</button>
          </div>
           
      </div>
      </form>
</div>
</div>
</div>	
</body>