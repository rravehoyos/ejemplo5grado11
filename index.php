<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="esti.css">
	</head>
	

<body>

<div class="hola">
<?php
include 'hola.php';
$h=$hola;
$t = date("M");
if ($t > "20") {
  echo "<h1 class='et'>Have a good day! $h</h1>";
}
?>
</div>
</body>
</html>


