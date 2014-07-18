<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<?php
$ballpark_id = $_GET['ballpark_id'];
include 'mlb_data.php';
if ( strlen ($ballpark_id) < 1)
{
   $ballpark_id = 1;
} 
?>	

<meta name="description" content="See heat maps of where foul balls land in MLB stadiums.  Enter in locations of where foul balls land.  Know the best place to sit in every stadium to catch a foul ball.">

<meta name="keywords" content="catch a foul ball, how to catch a foul ball, foul ball tracker, best seats to catch a foul ball, foul ball, home run seats, best home run seats, citizens bank park, yankee stadium, fenway park, national park, foul ball citizens bank park, foul ball yankee stadium, foul ball fenway park, where to sit to catch a foul ball">
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link rel=File-List href="cbp_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
b\:* {behavior:url(#default#VML);}
shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Enter Foul Balls for Yankee Stadium</title>
<style>
<!--
 /* Style Definitions */
ol
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
ul
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
@page
	{size:8.0302in 11.0in;}
-->
</style>
<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="3075" fill="f" fillcolor="white [7]"
  strokecolor="black [0]">
  <v:fill color="white [7]" color2="white [7]" on="f"/>
  <v:stroke color="black [0]" color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="#ccc [4]"/>
  <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
  <o:colormenu v:ext="edit" fillcolor="blue [1]" strokecolor="black [0]"
   shadowcolor="#ccc [4]"/>
 </o:shapedefaults><o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->




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
var ballpark_id = "<?php echo $ballpark_id; ?>";

var queryString = "?word=" + word + "&word2=" + word2 + "&ballpark_id=" + ballpark_id;
ajaxRequest.open("GET", "php_ajax_input_script.php" + queryString, true);
ajaxRequest.send(null);
alert('Thanks for submitting a foul ball.');
}

//-->
</script>

<script language="JavaScript">

function isPointInPoly(poly, pt){
	for(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
			((poly[i].y <= pt.y && pt.y < poly[j].y) || (poly[j].y <= pt.y && pt.y < poly[i].y))
					&& (pt.x < (poly[j].x - poly[i].x) * (pt.y - poly[i].y) / (poly[j].y - poly[i].y) + poly[i].x)
							&& (c = !c);
								return c;
								}

</script>	



<script language="JavaScript">
points = [
<?php
echo $infield[$ballpark_id];
?>
];

function point_it(event){

    pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
    pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
    document.getElementById("cross").style.left = (pos_x-6) ;
    document.getElementById("cross").style.top = (pos_y-6) ;
    document.getElementById("cross").style.visibility = "visible" ;
    document.pointform.form_x.value = pos_x;
    document.pointform.form_y.value = pos_y;
    if (isPointInPoly(points, {x: pos_x, y: pos_y})) 
       {  
	 alert('Liar, that ball is not foul!'); 
	 }
	else { 
	  ajaxFunction();
       } 
}

</script>
</head>

<body style='margin:0'>
<form name="pointform" method="post">
You entered a foul ball at x = <input id="form_x" type="text" name="form_x" size="4" /> - y = <input id="form_y" type="text" name="form_y" size="4" />
<div id="pointer_div" onclick="point_it(event)" style = "background-image:url('images/park_<?php echo $abbreviation[$ballpark_id],'.',$image_type[$ballpark_id], '\');width:',$xval[$ballpark_id],'px;height:',$yval[$ballpark_id],'px;" >'   ?>
<img src="images/baseball.png" id="cross" style="position:relative;visibility:hidden;z-index:2;"></div>


</form>

<!--
<form>
<input id="test" value="" name="test" size="30" style="color:#990000; font-weight:bold"> <input class="button" onClick="ajaxFunction();" value="Enter" type="button">
</form>
<a href="php_ajax_output.php">Check Live Table</a>
-->

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
