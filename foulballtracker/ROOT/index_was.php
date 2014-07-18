<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
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
      border=0></a><a class="navblack" 
            href="http://foulballtracker.com/contact.php"><font size="2">Contact Us</font></a></p></td></tr>
  <tr>
    <td bgcolor="#ffffff">
      <p align="left"><a class="navblack" 
      href="http://foulballtracker.com/was.htm"><font size="3">Enter foul ball 
      locations for Nationals Park</font></a></p>
      <h2 align="left">This is the foul ball heat map for 
      Nationals Park:</h2>
<?php
include ('show_was.php');
?>
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
