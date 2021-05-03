<HTML>
<HEAD>
<TITLE> Isi Buku Tamu</TITLE>
</HEAD>
<BODY>
	<?php
		$no_data = 1;
		$pegangan = fopen("BUKUTAMU.DAT, "r");
		while ( ! feof($pegangan))
		{
			$nama = fgets($pegangan, 255);
			if ($nama == FALSE)
				break;
			
			$kelamin = trim(fgets($pegangan, 255));
			$email = trim(fgets($pegangan, 255));
			$kode minat = trim(fgets($pegangan, 255));
			
			$ket = "";
			while ( ! feof($pegangan) )
			{
				$tmp = trim(fgets($pegangan, 255));
				if ($tmp == "*-*")
					break;
				
				$ket .= ($tmp. "<BR>\n");
			}
			
			$minat = "";
			for ($i = 0; $i < 4; $i++)
			{
				if (substr($kode_minat, $i,1) == "v")
					switch ($i)
					{
						case 0 : 
						$minat .= "Bonsai<br>";
						break;
						case 1 : 
						$minat .= "Tanaman Hias<br>";
						break;
						case 2 : 
						$minat .= "Musik Jazz<br>";
						break;
						case 3 : 
						$minat .= "Pemrograman<br>";
						break;
					}
			}
			
			echo "<B>Data ke-$no_data :</B> <BR>";
			echo "Nama : <b>$nama </b><BR>";
			if ($kelamin=="L")
				echo "Jenis Kelamin : <b>Pria</b><br>";
			else
				echo "Jenis Kelamin : <b>Wanita</b><br>";
			
			echo "E-mail : <b>$email</b><br>";
			
			if ( ! empty($minat) )
			{
				echo "Minat : <BR>";
				echo "<b>$minat</b>";
			}
			
			echo "Komentar : <i>$ket</i>";
			echo "<hr>";
			$no data++;
	?>
</BODY>
</HTML>