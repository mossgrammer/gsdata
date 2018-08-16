<?php
include('dbConnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$Username = $_REQUEST["Username"];
  $Password =$_REQUEST["Password"];
  $Password = md5($Password);
  $Name = $_REQUEST["Name"];




	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_login(Username, Password, Name)
			 VALUES('$Username', '$Password', '$Name')";

	$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());

	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = '../index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>
