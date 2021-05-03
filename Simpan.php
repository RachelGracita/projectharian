<HTML>
<HEAD>
<TITLE> SIMPAN TAMU</TITLE>
</HEAD>
<BODY>

	<?php
	$nama=$_REQUEST['nama'];
	$sex=$_REQUEST['sex'];
	$email=$_REQUEST['email'];
	$minat1=$_REQUEST['minat1'];
	$minat2=$_REQUEST['minat2'];
	$minat3=$_REQUEST['minat3'];
	$minat4=$_REQUEST['minat4'];
	$komentar=$_REQUEST['komentar'];
	
	if (empty($nama) || empty($email) )
	{
		print("Data nama dan e-mail harap diisi");
		exit;
	}
	
	if(isset($minat1))
		$kode_minat1 = "v";
	else
		$kode_minat1 = "-";
	
	if(isset($minat2))
		$kode_minat2 = "v";
	else
		$kode_minat2 = "-";
	
	if(isset($minat3))
		$kode_minat3 = "v";
	else
		$kode_minat3 = "-";
	
	if(isset($minat4))
		$kode_minat4 = "v";
	else
		$kode_minat4 = "-";
	
	$kode_minat = $kode_minat1 . $kode_minat2 . $kode_minat3 . $kode_minat4;
	
	$pegangan = fopen("BUKUTAMU.DAT", "a");
	Fputs($pegangan, $nama . "\n");
	Fputs($pegangan, $sex . "\n");
	Fputs($pegangan, $email . "\n");
	Fputs($pegangan, $kode_minat . "\n");
	Fputs($pegangan, $komentar . "\n");
	Fputs($pegangan, "$*-*\n");
	fclose($pegangan);
	
	print("Halo, $nama. Data Anda sudah disimpan <BR>\n");
	print("Terima kasih. <BR>\n");
	?>
</BODY>
</HTML>