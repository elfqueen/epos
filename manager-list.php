<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_courier_officers";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="wrapper">

<?php include("header2.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Informasi Pengurus
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Paparan </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-pencil-square-o"></i> Informasi Pengurus
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- start script -->
	<script language="JavaScript">
	var checkflag = "false";

	function check(field) {
	if (checkflag == "false")
	{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
	}
	else
	{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
	}

	}
	function confirmDel(field,msg)
	{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}

	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
	}
	</script>
<!-- end script -->
        <div class="row">
            <div class="col-lg-12">
          <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Nama Pengurus</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telefon Number</th>
                                <th>Nama Pejabat</th>
                            </tr>
	<?php
	
	// while($data = dbFetchAssoc($result)){
	// extract($data);	
	if($count = $result->num_rows){
        // echo '<p>', $count , '</p>';
            while($row = $result->fetch_object()){  
?>
                        </thead>
                        <tbody>
                            <tr>
      <td><!--  EDIT  -->
	  <a href="edit-courier.php?cid=<?php echo $row->cid; ?>">
	  <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
      </td>
      <td class="gentxt"><?php echo $row->officer_name; ?></td>
      <td class="gentxt"><?php echo $row->address; ?></td>
      <td class="gentxt"><?php echo $row->email; ?></td>
      <td class="gentxt"><?php echo $row->ph_no; ?></td>
      <td class="gentxt"><?php echo $row->office; ?></td>
	  
    </tr>
    <?php
	}//while
}//endif
	?>
                                </tbody>
                            </table>
                        </div>
                    </div>
              <div class="col-lg-6">
                        <h2>&nbsp;</h2>
                  </div>
                </div>
                <!-- /.row -->

                <div class="row"></div>
        <!-- /.row -->

                <div class="row"></div>
              <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>