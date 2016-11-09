<?php 
session_start();
require_once('library.php');
$rand = get_rand_id(8);
// echo $rand;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Barang</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
<!--     <link href="css/plugins/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Date CSS -->
    <link href="css/date.css" rel="stylesheet">

    <!-- calendar library -->
      	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>

<!-- calendar DATEPICKER-->
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();

  } );
  </script>



</head>
<body>
<div id="wrapper">
        <?php
        include("header2.php");
        ?> 
      <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah data baru
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-plus-circle"></i>  <a href="index.html">Tambah </a>
                            </li>
                        </ol>
                    </div>
                </div>




<div class="col-lg-8">
 <div class="card">

<!-- display message -->

	<?php   
	if(isset($_GET['msg']))
    {
    ?>
    <div class="alert alert-success">
    <?php 
        $Message = "<center><span> Data berjaya disimpan ! </span></center>";
        echo $Message;
    }
    ?>
 </div>


<form action="process.php?action=add-cons" method="post" name="frmShipment" > 
 <div class="row">
 <div class="col-lg-6">
 	<div class="header">
        <h4 class="title" align="center">Info Pengirim</h4>
    </div>
		    <div class="form-group">
		        <input class="form-control" name="Shippername" id="Shippername" type="text" placeholder="Nama Pengirim" required>
		    </div>
		    <div class="form-group">
		        <input class="form-control" name="Shipperphone" id="Shipperphone" type="tel" placeholder=" Nombor Telefon" required>
		    </div>
		    <div class="form-group">
		        <textarea class="form-control" name="Shipperaddress" id="Shipperaddress" type="text" placeholder=" Alamat Pengirim" required></textarea>
		    </div>
 </div><!-- end col6 -->

 <div class="col-lg-6">
    <div class="header">
        <h4 class="title" align="center">Info Penerima</h4>
    </div>
		    <div class="form-group">
		        <input class="form-control" name="Receivername" id="Receivername" type="text" placeholder="Nama Penerima" required>
		    </div>
		    <div class="form-group">
		        <input class="form-control" name="Receiverphone" id="Receiverphone" type="tel" placeholder=" Nombor Telefon" required>
		    </div>
		    <div class="form-group">
		        <textarea class="form-control" name="Receiveraddress" id="Receiveraddress" type="text" placeholder=" Alamat Penerima" required></textarea>
		    </div>

</div><!-- end col6 -->
</div><!-- endrow -->


<div class="row">
    <div class="header">
        <h4 class="title" align="center">Info Barang</h4>
    </div>
    <div class="col-lg-6">
		    <div class="form-group">
		        <input class="form-control" name="ConsignmentNo" id="ConsignmentNo" type="text" placeholder="Nombor Tracking " required>
		        <p class="help-block" style="color:gray;font-size: 12px;">Contoh: EF006144864MY</p>
		    </div>
    </div><!-- end col4 -->
    <div class="col-lg-6">
		    <div class="form-group">
		        <input class="form-control" name="Qnty" id="Qnty" type="number" placeholder="Bilangan" required>
		    </div> 
    </div><!-- end col4 -->
</div><!-- endrow 2-->
<div class="row">
    <div class="col-lg-6">
            <div class="form-group">
                <select class="form-control" id="Shiptype" name="Shiptype">
                	<!-- <option disabled selected>Jenis Barang</option> -->
                    <option value="Surat">Surat</option>
                    <option value="Bungkusan">Bungkusan</option>
                </select>
            </div>
    </div><!-- end col4 -->
           
    <div class="col-lg-6">
            <div class="form-group">
                <select class="form-control" id="Mode" name="Mode">
                		<!-- <option disabled selected>Cara Penghantaran</option> -->
		                <option value="Posmen">Posmen</option>
		                <option value="Skynet">Skynet</option>
						<option value="Lain-lain">Lain-lain</option>
                </select>
            </div>
    </div><!-- end col4 -->
</div><!-- endrow 3 -->

<div class="row">
	<div class="col-lg-6"><!-- 
		<div class="form-group" action="" method="post">  -->
		<div class="form-group" >
			<!-- start date -->
			<input type="text" name="Packupdate" id="datepicker" class="form-control" placeholder="Tarikh tiba" required="">

			<!-- end date -->
		</div><!-- endclassform  -->
	</div><!-- endcol 6 -->


	<div class="col-lg-6">
		<div class="form-group" >
				<select class="form-control" id="status" name="status">
						<!-- <option disabled selected>Status</option> -->
		                <option value="Sampai">Sampai</option>
		                <option value="Hilang">Hilang</option>
		                <option value="Rosak">Rosak</option>
						<option value="Lain-lain">Lain-lain</option>
                </select>
		</div> <!-- endform -->
	</div><!-- endcol 6 -->
</div><!-- endrow 4 -->



<div class="row">
	<div class="col-lg-12">
	<textarea class="form-control" name="Comments" id="Comments" type="text" placeholder=" Ulasan"></textarea>
	</div><!-- endcol 12 -->
</div><!-- end row 5 -->


<div class="row">
	<div class="col-lg-12" >
		<br><b>
<input name="Submit" type="submit" value="Tambah" class="form-control" style="background-color: #7BC3F2;" ></b>

<!-- <button value="Tambah" class="form-control" name="submit" type="submit"></button> -->
	</div><!-- end col 4 -->
</div><!-- endrow 6 -->



</form>






 </div><!-- endcard -->
 </div><!-- end col8 -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body></html>