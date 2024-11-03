<!DOCTYPE html>
<!-- File index.php -->
<html>
<head>
<title> Hello world </title>
<meta charset="utf-8" />
</head>
<body>
<h1>Hello world: appache/php<h1>
<?php
$load = sys_getloadavg();
?>
  Serverzeit: <?php echo date('c'); ?><br />
  Serverauslastung: <?php echo $load[0]; ?>
</body>
</html>
