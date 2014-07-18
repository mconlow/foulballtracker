<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<meta name="verify-v1" content="poWGv8euL5pbnBB/inhSGguBrp4QHsyQKtadaJW3q2Q=" >
<meta name="description" content="See heat maps of where foul balls land in MLB stadiums.  Enter in locations of where foul balls land.  Know the best place to sit in every stadium to catch a foul ball.">

<meta name="keywords" content="catch a foul ball, how to catch a foul ball, foul ball tracker, best seats to catch a foul ball, foul ball, home run seats, best home run seats, citizens bank park, yankee stadium, fenway park, national park, foul ball citizens bank park, foul ball yankee stadium, foul ball fenway park, where to sit to catch a foul ball">
<meta name="GENERATOR" content="PageBreeze Free HTML Editor (http://www.pagebreeze.com)">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
<title>Foul Ball Tracker - Catch a Foul Ball</title>
<style>
a.navwhite:link { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:visited { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:hover { text-decoration: underline; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:link { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:visited { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:hover { text-decoration: underline; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
</style>

<style>
<!--
h1 { font-family: Arial, sans-serif; font-size: 30px; color: #004080;}
h2 { font-family: Arial, sans-serif; font-size: 18px; color: #004080;}

body,p,b,i,em,dt,dd,dl,sl,caption,th,td,tr,u,blink,select,option,form,div,li { font-family: Arial, sans-serif; font-size: 12px; }

/* IE Specific */
body, textarea {
  scrollbar-3dlight-color: #808080;
  scrollbar-highlight-color: #808080;
  scrollbar-face-color: #004080;
  scrollbar-shadow-color: #808080;
  scrollbar-darkshadow-color: #805B32;
  scrollbar-arrow-color: #000000;
  scrollbar-track-color: #F8EFE2;
}
/* END IE Specific */
-->
</style>



<script language="javascript" type="text/javascript">
<!--
//Browser Support Code
function ajaxFunction(){

var ajaxRequest; // The variable that makes Ajax possible!

try{
// Opera 8.0+, Firefox, Safari
ajaxRequest = new XMLHttpRequest();
} catch (e){
// Internet Explorer Browsers
try{
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
try{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
} catch (e){
// Something went wrong
alert("Your browser broke!");
return false;
}
}
}

var word = document.getElementById('form_x').value;
var word2 = document.getElementById('form_y').value;
var queryString = "?word=" + word + "&word2=" + word2;
ajaxRequest.open("GET", "php_ajax_input_script.php" + queryString, true);
ajaxRequest.send(null);

}

//-->
</script>

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
<script language="JavaScript">

function point_it(event){

    pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
    pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
    document.getElementById("cross").style.left = (pos_x-1) ;
    document.getElementById("cross").style.top = (pos_y-15) ;
    document.getElementById("cross").style.visibility = "visible" ;
    document.pointform.form_x.value = pos_x;
    document.pointform.form_y.value = pos_y;
    ajaxFunction(); 
}

</script>


</head>
<body bgcolor="#ffffff" >
<p>
<table cellspacing="1" cellpadding="3" align="center" bgcolor="#004080" border="0" 
>
  
  <tr>
    <td>
      <h1 align="center"><font color="#ffffff"><img height="287" alt="Catching a foul ball" hspace="0" 
      src="images/610x2.jpg" width=609 border=0>       </font></h1></td></tr>
  <tr>
      <td bgcolor="#c0c0c0">
      <p align="center">&nbsp; <a 
      href="http://foulballtracker.com/index_phl.php"><img height="50" 
      alt=Philadelphia hspace=0 src="images/phl.gif" width=75 border=0></a><a 
      href="http://foulballtracker.com/index_was.php"><img 
      height=50 alt=Washington hspace=0 src="images/was.gif" width=75 
      border=0></a></p></td></tr>
  <tr>
    <td bgcolor="#ffffff">


     <p>Use this form to submit your comments, questions, requests.</p>
 
<form action="/contact/mailer.php" method="post" name="form1" id="form1" style="margin:0px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px; width:300px;" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">

Your e-mail:<br />
<input name="from" type="text" id="from" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:18px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['from'];?>"/>
<br />
<br />

Subject:<br />
<input name="subject" type="text" id="subject" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:18px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;" value="<?php echo $_GET['subject'];?>"/>
<br />
<br />

Type verification image:<br />
<input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:18px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
<img src="/contact/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
<br />

<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
<?php if(isset($_GET['wrong_code'])){?>
<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div><br /> 
<?php ;}?>

Message:<br />
<textarea name="message" cols="6" rows="5" id="message" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:100px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"><?php echo $_GET['message'];?></textarea>

<input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;" value="Send Message"/>
</form>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td></tr>
  <tr>
      <td ></td></tr></table></ P></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9742096-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
