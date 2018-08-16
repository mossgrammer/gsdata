<?php

require'./dbConnect.php';
//รับค่าจาก From มาใส่ในฐานข้อมูล
$NoteName=$_POST['NoteName'];
$NoteUser=$_POST['NoteUser'];
$NotePO=$_POST['NotePO'];
$NoteIV=$_POST['NoteIV'];
$NoteService=$_POST['NoteService'];
$NoteMonitor=$_POST['NoteMonitor'];
$NoteMouse=$_POST['NoteMouse'];
$NoteKeyboard=$_POST['NoteKeyboard'];
$NoteDocking=$_POST['NoteDocking'];
$NoteBranch=$_POST['NoteBranch'];
$NoteDate=$_POST['NoteDate'];
$NoteNote=$_POST['NoteNote'];

$sql="insert into tbl_notebook(NoteName,NoteUser,NotePO,NoteIV,NoteService,NoteMonitor,NoteMouse,NoteKeyboard,NoteDocking,NoteBranch,NoteDate,NoteNote)
values('$NoteName','$NoteUser','$NotePO','$NoteIV','$NoteService','$NoteMonitor','$NoteMouse','$NoteKeyboard','$NoteDocking','$NoteBranch','$NoteDate','$NoteNote')";
$result = mysqli_query($con,$sql);
if($result){
  header( "location: ../notebook.php" );
}else {
  echo mysqli_error($con);
}
 ?>
