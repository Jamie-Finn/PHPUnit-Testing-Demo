<?php

require_once 'vendor/autoload.php';

$pages = new \Controllers\Core\Web\Pages();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHPUnit</title>
	</head>
	<body>
		<h1><?php echo $pages->render(); ?></h1>
		<pre><?php var_dump($pages->returnArray()); ?></pre>
	</body>
</html>
