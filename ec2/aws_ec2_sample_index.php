<?php
// read ip.txt
$ip = file_get_contents('ip.txt');
$rgb = file_get_contents('rgb.txt');
if ((string)$_GET['trigger']==='1') {
	$timeout = $_GET['timeout'] ?: 60;
	$cmd = "stress --cpu 4 --timeout {$timeout}";
	echo "<pre>$cmd</pre>";
	$output = shell_exec($cmd);
	exit;
}
?>
<html>
<head><title>EC2: <?php echo $ip; ?></title></head>
<body style="background-color: <?php echo $rgb; ?>">
	<h2>Hello from <?php echo $ip; ?></h2>
	<p>
		<a href="index.php?trigger=1&timeout=120" target="_blank">Trigger CPU load</a>
	</p>
</body>
</html>
