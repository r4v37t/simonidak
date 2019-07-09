<?php
if(isset($_POST['tambah'])){
	$tfl=$_POST['tfl'];
	$paket=$_POST['paket'];
	$q=mysqli_query($mycon,"insert into simoni_tfl values(null,'$tfl',$paket)");
	if($q){
		?><script>alert('SUKSES!\n\nData berhasil ditambahkan.');</script><?php
	}else{
		?><script>alert('GAGAL!\n\nData gagal ditambahkan.');</script><?php
	}
	?><script>location.href='?menu=tfl';</script><?php
}
?>	
	<!-- Page content -->
	<div id="page-content">
		<!-- Forms General Header -->
		<div class="content-header">
			<div class="header-section">
				<h1>
					<i class="gi gi-bullhorn"></i>Kelola TFL Paket Pekerjaan<br><small>Nama TFL &amp; Nama Paket Pekerjaan</small>
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
						<h2><strong>Tambah</strong> TFL Paket Pekerjaan</h2>
					</div>
					<!-- END Form Elements Title -->
					<?php
					if(isset($_GET['aksi'])){
						if($_GET['aksi']=='hapus'){
							$q=mysqli_query($mycon,"delete from simoni_tfl where tflid=$_GET[id]");
							if($q){
								?><script>alert('SUKSES!\n\nData berhasil dihapus.');</script><?php
							}else{
								?><script>alert('GAGAL!\n\nData gagal dihapus.');</script><?php
							}
							?><script>location.href='?menu=tfl';</script><?php
						}
					}else{
					?>
					<!-- Basic Form Elements Content -->
					<form method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
						<div class="form-group">
							<label class="col-md-3 control-label" for="tfl">Nama TFL</label>
							<div class="col-md-9">
								<select id="tfl" name="tfl" class="form-control" size="1">
									<?php
									$q=mysqli_query($mycon,"select * from simoni_user where level like 'TFL%'");
									while($h=mysqli_fetch_array($q)){
									?>
									<option value="<?php echo $h['userid']; ?>"><?php echo $h['nama']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="paket">Nama Paket Pekerjaan</label>
							<div class="col-md-9">
								<select id="paket" name="paket" class="select-chosen" data-placeholder="Pilih Paket.." size="1">
									<?php
									$q=mysqli_query($mycon,"select * from simoni_paket where tahun=year(now())");
									while($h=mysqli_fetch_array($q)){
									?>
									<option value="<?php echo $h['paketid']; ?>"><?php echo $h['nama']; ?></option>
									<?php
									}
									?>
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
				<h2><strong>Daftar</strong> Paket Pekerjaan</h2>
			</div>
			<div class="table-responsive">
				<table id="dtable" class="table table-vcenter table-condensed table-bordered">
					<thead>
						<tr>
							<th class="text-center">Sub Bidang</th>
							<th class="text-center">Nama Pekerjaan</th>
							<th class="text-center">Nilai Pagu</th>
							<th class="text-center">Nama TFL</th>
							<th class="text-center">Jenis Pengadaan</th>
							<th class="text-center">Jenis Dana DAK</th>
							<th class="text-center">Tahun Pelaksanaan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysqli_query($mycon,"select * from simoni_tfl");
						while($h=mysqli_fetch_array($q)){
							$qq=mysqli_query($mycon,"select * from simoni_paket where paketid=$h[paketid]");
							$paket=mysqli_fetch_array($qq);
							$qq=mysqli_query($mycon,"select * from simoni_user where userid='$h[userid]'");
							$tfl=mysqli_fetch_array($qq);
						?>
						<tr>
							<td class="text-center"><?php echo $paket['bidang']; ?></td>
							<td ><?php echo $paket['nama']; ?></td>
							<td class="text-center"><?php echo number_format($paket['pagu'],2,',','.'); ?></td>
							<td class="text-center"><?php echo $tfl['nama']; ?></td>
							<td class="text-center"><?php echo $paket['pengadaan']; ?></td>
							<td class="text-center"><?php echo $paket['dak']; ?></td>
							<td class="text-center"><?php echo $paket['tahun']; ?></td>
							<td class="text-center">
								<div class="btn-group">
									<a href="?menu=tfl&id=<?php echo $h['tflid']; ?>&aksi=hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Hapus</a>
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