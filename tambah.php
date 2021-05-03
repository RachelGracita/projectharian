<div class="row">
	<div class="col-md-12">
		<div class="col-md-11"></div>
		<a href=index.php><button type="submit" class="btn btn-danger">Batal</button></a>
		<div class="box box-info">
			<div class="box-header width-border"><hr>
				<span class='title'> Tambah Data Mahasiswa </span><hr><br/>
				<form class='form-horizontal' id='registerHere' method='post' action='exec-tambah.php'
					<div class="box-body">
					
						<div class="form-group">
							<label='dua' class='col-sm-2 control-label'>NIM</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim">
							
							<div class="form-group">
							<label='tiga' class='col-sm-2 control-label'>Nama</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama"></div>
						
							<div class="form-group">
							<label class='col-xs-2 control-label'>Jurusan</label>
							<div class="col-xs-2 selectContainer">
							<select class="form-control" name="jurusan">
							<div class="form-control" name="jurusan">
							<option value="S1-Sistem Komputer">S1-Sistem Komputer</option>
							<option value="S1-Sistem Informasi">S1-Sistem Informasi</option>
							<option value="S1-Grafis">S1-Grafis</option>
							</select>
						</div>
					</div>
					
							<div class="form-group">
							<label='tiga' class='col-sm-2 control-label'>Semester</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Semester" name="semester"></div>
							
							<div class="form-group">
							<label class='col-xs-2 control-label'>Jenis Kelamin</label>
							<div class="col-xs-2 selectContainer">
							<select class="form-control" name="jeniskelamin">
							<div class="form-control" name="jurusan">
							<option value="Laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					
							<div class="form-group">
							<label class='col-xs-2 control-label'>Komentar</label>
							<div class="col-sm-4">
							<textarea name="komentar" rows="5" cols="50"></textarea></div>
					
					<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-2 selectContainer">
					<button tipe="submit" class="btn btn-primary">Simpan</button>
					</div>
					</div>
					
							