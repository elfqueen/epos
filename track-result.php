<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);


  if($count = $result->num_rows){
        // echo '<p>', $count , '</p>';
            while($row = $result->fetch_object()){  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	


<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Shipment </strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name : </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $row->ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $row->phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
			<?php echo $row->s_add; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $row->rev_name; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
			<?php echo $row->r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
			<?php echo $row->r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment No  : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $row->cons_no; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $row->type; ?>&nbsp;</td>
    </tr>
    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $row->mode; ?></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $row->pick_date; ?>
        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $row->status; ?></td> 
    </tr> 

     

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $row->comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
<?php }//while
}//if
else {
echo 'In else....';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">


	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="search-edit.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>



<?php 
}//else
?>