<?php
  require'db./dbConnect.php';
  $query="SELECT * FROM tbl_computer WHERE ComputerID = '".$_GET["ComputerID"]."' ";
  $result=mysqli_query($con,$query);
?>
<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="saveNoteCom.php?CusID=<?php echo $_GET["ComputerID"];?>" name="frmEdit" method="post">

<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="160"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="70"> <div align="center">Budget </div></th>
    <th width="70"> <div align="center">Used </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5" value="<?php echo $objResult["CustomerID"];?>"></div></td>
    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["Name"];?>"></td>
    <td><input type="text" name="txtEmail" size="20" value="<?php echo $objResult["Email"];?>"></td>
    <td><div align="center"><input type="text" name="txtCountryCode" size="2" value="<?php echo $objResult["CountryCode"];?>"></div></td>
    <td align="right"><input type="text" name="txtBudget" size="5" value="<?php echo $objResult["Budget"];?>"></td>
    <td align="right"><input type="text" name="txtUsed" size="5" value="<?php echo $objResult["Used"];?>"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">


  </form>
</body>
</html>
