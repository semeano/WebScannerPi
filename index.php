<?php
 if (isset($_POST['email'])) {
  shell_exec("./script/scan.sh " . $_POST['email']);
 }
?>

<!DOCTYPE html>

<html>

<head>

 <style>
 
  body { padding-top:70px; font-family:verdana; }
  p { text-align:center; font-size:50px; }
  form { text-align:center; }
  input { width:400px; height:50px; padding:10px; font-size:20px; border:1px solid #aaa; }
  input:hover { border:1px solid #bb1042; }
  img { width:96px; }

 </style>

 <script type="text/javascript" src="lib/jquery.js"></script>

 <script type="text/javascript">

  function scan() {
   $('#email').fadeOut(500, function(){});
   setTimeout(function() { $('#scanning').fadeIn(500, function(){}); }, 1000);
  }

 </script>

</head>

<body onload="init()">

<p><img src="img/pi.png" title="raspberry pi" /> + <img src="img/scanner.png" title="your scanner" /> = <img src="img/email.jpg" title="straight to your inbox!" /></p>
<p></p>
<p id="scanning" style="display:none;">Scanning... please wait.</p>

<div>
 <form method="post" action="" onsubmit="return scan()">
  <input id="email" name="email" type="text" required pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" title="email address"></input>
 </form>
</div>

<body>

</html>
