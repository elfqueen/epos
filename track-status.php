<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Cari dan Kesan</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
<link href="css/track.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>

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


</head>
<!-- end head -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<style type='text/css'>
a.linkopacity img {filter:alpha(opacity=50);-moz-opacity: 0.5;opacity: 0.5;-khtml-opacity: 0.5;}
a.linkopacity:hover img {filter:alpha(opacity=100);-moz-opacity: 1.0;opacity: 1.0;-khtml-opacity: 1.0; }
</style>


<div style='display:scroll; position:fixed; top:0px; right:0px;'>
<a class='linkopacity' href='http://www.facebook.com/juliahunny' imageanchor='1' rel='nofollow' style='margin-left: 1em; margin-right: 1em;' target='_blank' title='facebook'>

<img border="0" src="http://img.photobucket.com/albums/v486/mafiatrg/232.png" />
</a><br /><a class='linkopacity' href='http://twitter.com/.....' imageanchor='1' rel='nofollow' style='margin-left: 1em; margin-right: 1em;' target='_blank' title='twitter'>

<img border="0" src="http://img.photobucket.com/albums/v486/mafiatrg/432.png" />
</a><br /><a class='linkopacity' href='http://juliahunny-hahahunnyachoo.blogspot.com/' imageanchor='1' rel='nofollow' style='margin-left: 1em; margin-right: 1em;' target='_blank' title='feed'>

<img border="0" src="http://img.photobucket.com/albums/v486/mafiatrg/blogger_64x64.png" /></a><br />
</div> 



    <section class="header">
     
      <a href="index.php">
      <img src="images\backbutton.png" alt="kembali" style="width:42px;height:42px;border:0;" align="left">
      </a>

      <center>
      <br><br><br><br><br><br>
      <h1>Cari dan Kesan</h1><br><br>

      <div class="well" >
      <h2>Sila masukkan nombor tracking anda</h2>

      <!-- form -->
      <form action="track-result2.php" method="post" name="form" id="form" class="cont">
          <!-- START VALIDATION SCRIPT -->
          <script language="javascript">
              function validate()
                {
               if (form.Consignment.value == "" )
                   {
                    alert("Consignment No is required.");
                    form.track.focus( );
                    return false;
                  }
                }
            </script>
            <!-- END VALIDATION SCRIPT -->
            <input name="Consignment" class="srchFld" placeholder="" ng-model="search" id="Consignment" maxlength="50" type="text"> 
            <button name="Submit" type="submit" class="srchBtn"  onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue">Carian</button>
      </form>
      <!-- end form -->

      <h3>Contoh:   EF006144864MY</h3></center>

      </div>


        </section><!-- endsection -->
</body>
</html>