<?php
	// This line requires the file to generate the QR code
	require_once('src/QrCode.php');
	
	// This line uses the namespace for the library
	use Endroid\QrCode\QrCode;

	$qr = new QrCode();

	$qr
			->setText("freddyiniguez")
			->setSize("200")
			->setLabel('CIMPS 2016')
			->render();
?>