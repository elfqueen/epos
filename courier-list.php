<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);		

?>
<!-- END PHP DATABASE -->



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                            Kemaskini Bungkusan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Paparan </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-pencil-square-o"></i> Kemaskini Bungkusan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                
<!-- START SCRIPT -->
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
<!-- END SCRIPT -->

                <div class="row">
                    <div class="col-lg-12">
                  <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Edit</th>
                                        <th>Consignment No </th>
                                        <th>Shipper</th>
                                        <th>Receiver</th>
                                        <th>Pickup Date/Time</th>
                                        <th>Status</th>
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
                                        <td><?php echo $row->cons_no; ?></td>
                                        <td><?php echo $row->ship_name; ?></td>
                                        <td><?php echo $row->rev_name; ?></td>
                                        <td><?php echo $row->pick_date; ?></td>
                                        <td><?php echo $row->status; ?></td>
                                    </tr>
            <?php
        	}//endwhile
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
