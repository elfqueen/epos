<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
  $error = checkUser($_POST['txtusername'],$_POST['txtpassword']);
}//endif

require_once('database.php');
$sql = "SELECT DISTINCT(off_name) FROM tbl_offices";
$result = dbQuery($sql);

// XAMPP version
// // $result = dbQuery($sql);
//   if($result = $dbConn->query("$sql")){
//         if($count = $result->num_rows){
//           // echo "yay.success";
//             echo '<p>' , $count ,  '</p>';
//             $rows = $result->fetch_all();
//             // print_r($rows);
//             echo '<pre>', print_r($rows), '</pre>';
//         }
//   }else{
//     die($dbConn->error);
//   }
//   // return $result;
?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>
<!-- <link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css"> -->
<link href="css/login.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script>
</head>
<!-- end of head -->

<!-- start body -->
<!-- <body> -->
<body onLoad="document.form1.txtusername.focus();">

<center>
<br>
<a href="index.php"><img src="images\backbutton.png" alt="kembali" style="width:42px;height:42px;border:0;">
</a>
</center>
<div class="login-page">
  <div class="form">             
    <form class="login-form" name="form1" id="form1" method="post" onsubmit="return memloginvalidate()">
          <font color="#FF0000" style="font-size:12px;">
            <?php echo $error; ?>
          </font>
      <input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="text">
      <input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password">
      <button name="Submit" type="submit">login</button>
    </form>
  </div>
</div>
</body>
</html>


<style type="text/javascript">

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

</style>