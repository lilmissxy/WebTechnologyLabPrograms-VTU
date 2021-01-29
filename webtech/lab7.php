<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="refresh" content="1">

 <?php
 date_default_timezone_set('Asia/kolkata');
 $today= date('h:i:s');
 echo "<h1 align='center'>The time from Server is:".$today."</h1>";
 ?>

 <script type="text/javascript">
 function starttime()
 {
 var d=new Date();
 var h=d.getHours();
 var m=d.getMinutes();
 var s=d.getSeconds();
 document.getElementById('txt').innerHTML=h+":"+m+":"+s;
 setTimeout('starttime()',1000);
 }
 </script>
 
 <style type="text/css">
 h1{font-size:30px; }
 body{ background-color:gold; }
 </style>
</head>

<body onload="starttime()">
 <h1 align="center">The time from local system is:
 <span id="txt"></span>
 </h1>
</body>
</html>