<?php
  session_start();
  require'db./dbConnect.php';
    if(!isset($_SESSION['UserID']))
    {
      	header("location:index.php");
      exit();
    }

    $query="select * from tbl_printer where 1 ";
    if($_POST["ddlSelect"] != "" and  $_POST["txtKeyword"]  != '')
    {
      $query .= " AND (".$_POST["ddlSelect"]." LIKE '%".$_POST["txtKeyword"]."%' ) ";
    }
    $result = mysqli_query($con,$query);
  ?>



<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "Printer"; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <link rel="stylesheet" type="text/css" href="file/jquery.fancybox.min.css">
	<script src="file/jquery.fancybox.min.js"></script>


    <script src='file/excelexportjs.js'></script>
    <script src='file/jquery.tabledit.js'></script>

    <style>
    body{
      background: #f4f4f4;
    }
    th{
      text-align: center;
    }
    .fancybox-slide--iframe .fancybox-content {
	width  : 330px;
	height : 300px;
}
#ddlSelect{
height: 34px;
}

    </style>
  </head>
  <body style="background: #f4f4f4">
    <nav id='nav'class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="computer.php">Greenspot</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id='navbarNav'>
    <ul class="navbar-nav col-lg-11">
      <li class="nav-item">
        <a class="nav-link" href="computer.php" >Computer </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notebook.php">Notebook</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="printer.php" >Printer <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projector.php">Projector</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="frmlogout" action="logout.php" method="post">
        <a href="sysopr.php"><span class="glyphicon glyphicon-cog"></span></a>
      <button class="btn btn-outline-danger navbar-btn" type="submit">Logout</button>
    </form>
  </div>
</nav>

<div class="container">
<div class="form-inline">
<form name="frmSearch" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">

<div class="form-group mx-sm-3 mb-2">
    <th><h4>Select :
      <select class="form-control" name="ddlSelect" id="ddlSelect" >

        <option value="PrintName" <?if($_POST["ddlSelect"]=="PrintName"){echo"selected";}?>>Name</option>
        <option value="PrintPO" <?if($_POST["ddlSelect"]=="PrintPO"){echo"selected";}?>>PO</option>
        <option value="PrintIV" <?if($_POST["ddlSelect"]=="PrintIV"){echo"selected";}?>>IV</option>
        <option value="PrintService" <?if($_POST["ddlSelect"]=="PrintService"){echo"selected";}?>>Service Tag</option>
        <option value="PrintBranch" <?if($_POST["ddlSelect"]=="PrintBranch"){echo"selected";}?>>Branch</option>
        <option value="PrintDepart" <?if($_POST["ddlSelect"]=="PrintDepart"){echo"selected";}?>>Depart</option>
        <option value="PrintDate" <?if($_POST["ddlSelect"]=="PrintDate"){echo"selected";}?>>Date</option>

      </select>
</div>
      <div class="form-group mx-sm-3 mb-2">


      <input name="txtKeyword" placeholder="Keyword" class="form-control" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
</div>
<button type="submit" class="btn btn-warning mb-2">Search</button></th></h4>
</form>
</div>
</div>

    <div class="container">
      <div class="row">
        <div class="col-lg-2">
       <form name="frmnewcom" action="newprint.php" method="post">
        <button class="btn btn-info" name="new" type="submit">
          <span class="glyphicon glyphicon-plus"></span> NewPrinter</button>
       </form>
       </div>
       <div class="col-lg-2">
       <form name="frmexport">
       <button id='DLtoExcel' class="btn btn-success">
       <span class="glyphicon glyphicon-cloud-download"></span> ExportPrinter</button>
       </div>
       </div>

<div class="table-responsive">


      <table id='tableData' class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>PrinterName</th>
        <th>PO</th>
        <th>IV</th>
        <th>Service Tag</th>
        <th>Branch</th>
        <th>Depart</th>
        <th>Date</th>
        <th>Note</th>
      </thead>

      <tbody>

               <?php
               $i=0;
               while ($row=mysqli_fetch_array($result))
               {
                 $i++;
                 ?>
               <tr>
               <td><?php echo $row['PrinterID'];?></td>
               <td><?php echo $row['PrintName'];?></td>
               <td><?php echo $row['PrintPO'];?></td>
               <td><?php echo $row['PrintIV'];?></td>
               <td><?php echo $row['PrintService'];?></td>
               <td><?php echo $row['PrintBranch'];?></td>
               <td><?php echo $row['PrintDepart'];?></td>
               <td><?php echo $row['PrintDate'];?></td>
               <td><a id="edit<?php echo $i;?>" class="varios iframe" href="editprint.php?PrinterID=<?php echo $row["PrinterID"];?>">Note</a></td>

               </tr>

               <?php
             }
             ?>

   </tbody>
      </table>
</div>
    </div>

      <script type="text/javascript">
      $(document).ready(function(){
            $('#tableData').Tabledit({
                  url:'db/dbActionPrint.php',
                  columns:{
                    identifier:[0,"PrinterID"],
                    editable:[[1,'PrintName'],[2,'PrintPO'],[3,'PrintIV'],[4,'PrintService'],[5,'PrintBranch'],[6,'PrintDepart'],[7,'PrintDate']]
                  },
                  onSuccess:function(data,textStatus,jqXHR){
                    if(data.action=='delete'){
                      $('#'+data.PrinterID).remove();
                    }
                  }
                });
          });
        var $btnDLtoExcel=$('#DLtoExcel');
        $btnDLtoExcel.on('click',function () {
         $("#tableData").excelexportjs({
           containerid:"tableData",datatype:'table'
         });
         });
          $('a[id^="edit"]').fancybox({
				'type'				: 'iframe',
				onClosed	:	function() {
					parent.location.reload(true);
				}
			});
      </script>
  </body>
</html>
