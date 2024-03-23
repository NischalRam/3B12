<?php
$ipAddress = shell_exec("ifconfig eth0 | awk '/inet / {print $2}'");
echo "<h1>This is my IP:<h1> <h2>$ipAddress<h2>";
?>
