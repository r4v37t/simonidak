<?php
if(isset($_POST['tambah'])){
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$email=$_POST['email'];
	$userid=$_POST['userid'];
	$userpwd=md5($_POST['userpwd']);
	$level=$_POST['level'];
	$q=mysqli_query($mycon,"insert into simoni_user values('$userid','$userpwd','$nama','$nip','$email','$level',now())");
	if($q){
		?><script>alert('SUKSES!\n\nData berhasil ditambahkan.');</script><?php
	}else{
		?><script>alert('GAGAL!\n\nData gagal ditambahkan.');</script><?php
	}
	?><script>location.href='?menu=user';</script><?php
}
if(isset($_POST['simpan'])){
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$email=$_POST['email'];
	$userid=$_POST['userid'];
	$userpwd=md5($_POST['userpwd']);
	$level=$_POST['level'];
	$q=mysqli_query($mycon,"update simoni_user set userpwd='$userpwd',nama='$nama',nip='$nip',email='$email',level='$level' where userid='$userid'");
	if($q){
		?><script>alert('SUKSES!\n\nData berhasil disimpan.');</script><?php
	}else{
		?><script>alert('GAGAL!\n\nData gagal disimpan.');</script><?php
	}
	?><script>location.href='?menu=user';</script><?php
}
?>	
	<!-- Page content -->
	<div id="page-content">
		<!-- Forms General Header -->
		<div class="content-header">
			<div class="header-section">
				<h1>
					<i class="gi gi-group"></i>Kelola User<br><small>PPK, PPTK, TFL Teknik &amp; TFL Pemberdayaan</small>
				</h1>
			</div>
		</div>
		<!-- END Forms General Header -->
		<div class="row">
			<div class="col-md-12">
				<!-- Basic Form Elements Block -->
				<div class="block">
					<!-- Basic Form Elements Title -->
					<div class="block-title">
						<h2><strong>Tambah</strong> User</h2>
					</div>
					<!-- END Form Elements Title -->
					<?php
					if(isset($_GET['aksi'])){
						if($_GET['aksi']=='hapus'){
							$q=mysqli_query($mycon,"delete from simoni_user where userid='$_GET[uid]'");
							if($q){
								?><script>alert('SUKSES!\n\nData berhasil dihapus.');</script><?php
							}else{
								?><script>alert('GAGAL!\n\nData gagal dihapus.');</script><?php
							}
							?><script>location.href='?menu=user';</script><?php
						}
						if($_GET['aksi']=='edit'){
							$userid=$_GET['uid'];
							$q=mysqli_query($mycon,"select * from simoni_user where userid='$userid'");
							$h=mysqli_fetch_array($q);
					?>
					<!-- Basic Form Elements Content -->
					<form method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
						<div class="form-group">
							<label class="col-md-3 control-label" for="nama">Nama Lengkap</label>
							<div class="col-md-9">
								<input type="text" id="nama" name="nama" value="<?php echo $h['nama']; ?>" class="form-control" placeholder="Nama Lengkap &amp; Gelar">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nip">NIP</label>
							<div class="col-md-9">
								<input type="text" id="nip" name="nip" value="<?php echo $h['nip']; ?>" class="form-control" placeholder="NIP">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="email">Alamat Email</label>
							<div class="col-md-9">
								<input type="email" id="email" name="email" value="<?php echo $h['email']; ?>" class="form-control" placeholder="Alamat Email Pribadi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="userid">User ID</label>
							<div class="col-md-9">
								<input type="text" id="userid" name="userid" value="<?php echo $h['userid']; ?>" class="form-control" placeholder="User ID" readonly >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="userpwd">Password</label>
							<div class="col-md-9">
								<input type="password" id="userpwd" name="userpwd" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="level">Level</label>
							<div class="col-md-9">
								<select id="level" name="level" class="form-control" size="1">
									<option value="PPK" <?php echo ($h['level']=='PPK')?'selected':''; ?> >PPK</option>
									<option value="PPTK" <?php echo ($h['level']=='PPTK')?'selected':''; ?> >PPTK</option>
									<option value="TFL Teknik" <?php echo ($h['level']=='TFL Teknik')?'selected':''; ?> >TFL Teknik</option>
									<option value="TFL Pemberdayaan" <?php echo ($h['level']=='TFL Pemberdayaan')?'selected':''; ?> >TFL Pemberdayaan</option>
									<option value="Administrator" <?php echo ($h['level']=='Administrator')?'selected':''; ?> >Administrator</option>
								</select>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan Data</button>
								<button type="button" class="btn btn-sm btn-warning" onclick="location.href='?menu=user'">Batal</button>
							</div>
						</div>
					</form>
					<!-- END Basic Form Elements Content -->
					<?php
						}
					}else{
					?>
					<!-- Basic Form Elements Content -->
					<form method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
						<div class="form-group">
							<label class="col-md-3 control-label" for="nama">Nama Lengkap</label>
							<div class="col-md-9">
								<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap &amp; Gelar">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nip">NIP</label>
							<div class="col-md-9">
								<input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="email">Alamat Email</label>
							<div class="col-md-9">
								<input type="email" id="email" name="email" class="form-control" placeholder="Alamat Email Pribadi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="userid">User ID</label>
							<div class="col-md-9">
								<input type="text" id="userid" name="userid" class="form-control" placeholder="User ID">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="userpwd">Password</label>
							<div class="col-md-9">
								<input type="password" id="userpwd" name="userpwd" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="level">Level</label>
							<div class="col-md-9">
								<select id="level" name="level" class="form-control" size="1">
									<option value="PPK">PPK</option>
									<option value="PPTK">PPTK</option>
									<option value="TFL Teknik">TFL Teknik</option>
									<option value="TFL Pemberdayaan">TFL Pemberdayaan</option>
									<option value="Administrator">Administrator</option>
								</select>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" name="tambah" class="btn btn-sm btn-primary">Tambah Data</button>
							</div>
						</div>
					</form>
					<!-- END Basic Form Elements Content -->
					<?php
					}
					?>
				</div>
				<!-- END Basic Form Elements Block -->
			</div>
		</div>
		<!-- Datatables Content -->
		<div class="block full">
			<div class="block-title">
				<h2><strong>Daftar</strong> User</h2>
			</div>
			<div class="table-responsive">
				<table id="dtable" class="table table-vcenter table-condensed table-bordered">
					<thead>
						<tr>
							<th class="text-center">Nama</th>
							<th class="text-center">NIP</th>
							<th class="text-center">Alamat Email</th>
							<th class="text-center">User ID</th>
							<th class="text-center">Level</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysqli_query($mycon,"select * from simoni_user");
						while($h=mysqli_fetch_array($q)){
							if($h['level']=='PPK'){
								$label='warning';
							}else if($h['level']=='PPTK'){
								$label='success';
							}else if($h['level']=='TFL Teknik'||$h['level']=='TFL Pemberdayaan'){
								$label='info';
							}else{
								$label='danger';
							}
						?>
						<tr>
							<td class="text-center"><?php echo $h['nama']; ?></td>
							<td class="text-center"><?php echo $h['nip']; ?></td>
							<td class="text-center"><?php echo $h['email']; ?></td>
							<td class="text-center"><?php echo $h['userid']; ?></td>
							<td class="text-center"><span class="label label-<?php echo $label; ?>"><?php echo $h['level']; ?></span></td>
							<td class="text-center">
								<div class="btn-group">
									<a href="?menu=user&uid=<?php echo $h['userid']; ?>&aksi=edit" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a href="?menu=user&uid=<?php echo $h['userid']; ?>&aksi=hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Hapus</a>
								</div>
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- END Datatables Content -->
	</div>
	<!-- END Page Content -->