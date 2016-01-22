<?php

include __DIR__ . '/vendor/autoload.php';

use Gregwar\Image\Image;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image']['tmp_name'])) {

	$tmp_name = $_FILES['image']['tmp_name'];

	$y = $_POST['y'];
	$x = $_POST['x'];
	$w = $_POST['w'];
	$h = $_POST['h'];

	$filename = sprintf('%s/croped/%s.jpg', __DIR__, uniqid());

	Image::open($tmp_name)
		 ->crop($x, $y, $w, $h)
		 ->save($filename, 'jpg');


	echo 'Imagem cropada com sucesso';

	printf('<img src="croped/%s" />', basename($filename));
}

