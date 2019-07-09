<?php
if(isset($_POST['tambah'])){
	$bidang=$_POST['bidang'];
	$nama=$_POST['nama'];
	$lokasi=$_POST['lokasi'];
	$pagu=$_POST['pagu'];
	$target=$_POST['target'];
	$satuan=$_POST['satuan'];
	$pengadaan=$_POST['pengadaan'];
	$dak=$_POST['dak'];
	$tahun=$_POST['tahun'];
	$q=mysqli_query($mycon,"insert into simoni_paket values(null,'$bidang','$nama','$lokasi',$pagu,$target,'$satuan','$pengadaan','$dak',$tahun)");
	if($q){
		?><script>alert('SUKSES!\n\nData berhasil ditambahkan.');</script><?php
	}else{
		?><script>alert('GAGAL!\n\nData gagal ditambahkan.');</script><?php
	}
	?><script>location.href='?menu=paket';</script><?php
}
if(isset($_POST['simpan'])){
	$id=$_POST['id'];
	$bidang=$_POST['bidang'];
	$nama=$_POST['nama'];
	$lokasi=$_POST['lokasi'];
	$pagu=$_POST['pagu'];
	$target=$_POST['target'];
	$satuan=$_POST['satuan'];
	$pengadaan=$_POST['pengadaan'];
	$dak=$_POST['dak'];
	$tahun=$_POST['tahun'];
	$q=mysqli_query($mycon,"update simoni_paket set bidang='$bidang',nama='$nama',lokasi='$lokasi',pagu=$pagu,target=$target,satuan='$satuan',pengadaan='$pengadaan',dak='$dak',tahun=$tahun where paketid=$id");
	if($q){
		?><script>alert('SUKSES!\n\nData berhasil disimpan.');</script><?php
	}else{
		?><script>alert('GAGAL!\n\nData gagal disimpan.');</script><?php
	}
	?><script>location.href='?menu=paket';</script><?php
}
?>	
	<!-- Page content -->
	<div id="page-content">
		<!-- Forms General Header -->
		<div class="content-header">
			<div class="header-section">
				<h1>
					<i class="gi gi-bullhorn"></i>Kelola Paket Pekerjaan<br><small>Nama, Pagu &amp; Target Kinerja</small>
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
						<h2><strong>Tambah</strong> Paket Pekerjaan</h2>
					</div>
					<!-- END Form Elements Title -->
					<?php
					if(isset($_GET['aksi'])){
						if($_GET['aksi']=='hapus'){
							$q=mysqli_query($mycon,"delete from simoni_paket where paketid=$_GET[id]");
							if($q){
								?><script>alert('SUKSES!\n\nData berhasil dihapus.');</script><?php
							}else{
								?><script>alert('GAGAL!\n\nData gagal dihapus.');</script><?php
							}
							?><script>location.href='?menu=paket';</script><?php
						}
						if($_GET['aksi']=='edit'){
							$id=$_GET['id'];
							$q=mysqli_query($mycon,"select * from simoni_paket where paketid=$id");
							$h=mysqli_fetch_array($q);
					?>
					<!-- Basic Form Elements Content -->
					<form method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
						<input type="hidden" name="id" value="<?php echo $h['paketid']; ?>">
						<div class="form-group">
							<label class="col-md-3 control-label" for="bidang">Sub Bidang</label>
							<div class="col-md-9">
								<select id="bidang" name="bidang" class="form-control" size="1">
									<option value="Air Minum" <?php echo ($h['bidang']=='Air Minum')?'selected':''; ?> >Air Minum</option>
									<option value="Sanitasi" <?php echo ($h['bidang']=='Sanitasi')?'selected':''; ?> >Sanitasi</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nama">Nama Pekerjaan</label>
							<div class="col-md-9">
								<textarea id="nama" name="nama" class="form-control" placeholder="Nama Paket Pekerjaan"><?php echo $h['nama']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="lokasi">Lokasi Pekerjaan</label>
							<div class="col-md-9">
								<input type="text" id="lokasi" name="lokasi" value="<?php echo $h['lokasi']; ?>" class="form-control" placeholder="Lokasi Paket Pekerjaan">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="pagu">Nilai Pagu</label>
							<div class="col-md-9">
								<input type="number" id="pagu" name="pagu" value="<?php echo $h['pagu']; ?>" class="form-control" placeholder="Nilai Pagu Pekerjaan">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="target">Jumlah Target</label>
							<div class="col-md-9">
								<input type="number" id="target" name="target" value="<?php echo $h['target']; ?>" class="form-control" placeholder="Jumlah Target Kinerja">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="satuan">Nama Satuan</label>
							<div class="col-md-9">
								<input type="text" id="satuan" name="satuan" value="<?php echo $h['satuan']; ?>" class="form-control" placeholder="Nama Satuan Target Kinerja">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="pengadaan">Jenis Pengadaan</label>
							<div class="col-md-9">
								<select id="pengadaan" name="pengadaan" class="form-control" size="1">
									<option value="Swakelola" <?php echo ($h['pengadaan']=='Swakelola')?'selected':''; ?> >Swakelola</option>
									<option value="Kontraktual" <?php echo ($h['pengadaan']=='Kontraktual')?'selected':''; ?> >Kontraktual</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="dak">Jenis Dana DAK</label>
							<div class="col-md-9">
								<select id="dak" name="dak" class="form-control" size="1">
									<option value="Afirmasi" <?php echo ($h['dak']=='Afirmasi')?'selected':''; ?> >Afirmasi</option>
									<option value="Reguler" <?php echo ($h['dak']=='Reguler')?'selected':''; ?> >Reguler</option>
									<option value="Penugasan" <?php echo ($h['dak']=='Penugasan')?'selected':''; ?> >Penugasan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="tahun">Tahun Pelaksanaan</label>
							<div class="col-md-9">
								<input type="number" id="tahun" name="tahun" value="<?php echo $h['tahun']; ?>" class="form-control" placeholder="Tahun Pelaksanaan Paket Pekerjaan">
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan Data</button>
								<button type="button" class="btn btn-sm btn-warning" onclick="location.href='?menu=paket'">Batal</button>
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
							<label class="col-md-3 control-label" for="bidang">Sub Bidang</label>
							<div class="col-md-9">
								<select id="bidang" name="bidang" class="form-control" size="1">
									<option value="Air Minum">Air Minum</option>
									<option value="Sanitasi">Sanitasi</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nama">Nama Pekerjaan</label>
							<div class="col-md-9">
								<textarea id="nama" name="nama" class="form-control" placeholder="Nama Paket Pekerjaan"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="lokasi">Lokasi Pekerjaan</label>
							<div class="col-md-9">
								<input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Lokasi Paket Pekerjaan">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="pagu">Nilai Pagu</label>
							<div class="col-md-9">
								<input type="number" id="pagu" name="pagu" class="form-control" placeholder="Nilai Pagu Pekerjaan">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="target">Jumlah Target</label>
							<div class="col-md-9">
								<input type="number" id="target" name="target" class="form-control" placeholder="Jumlah Target Kinerja">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="satuan">Nama Satuan</label>
							<div class="col-md-9">
								<input type="text" id="satuan" name="satuan" class="form-control" placeholder="Nama Satuan Target Kinerja">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="pengadaan">Jenis Pengadaan</label>
							<div class="col-md-9">
								<select id="pengadaan" name="pengadaan" class="form-control" size="1">
									<option value="Swakelola">Swakelola</option>
									<option value="Kontraktual">Kontraktual</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="dak">Jenis Dana DAK</label>
							<div class="col-md-9">
								<select id="dak" name="dak" class="form-control" size="1">
									<option value="Afirmasi">Afirmasi</option>
									<option value="Reguler">Reguler</option>
									<option value="Penugasan">Penugasan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="tahun">Tahun Pelaksanaan</label>
							<div class="col-md-9">
								<input type="number" id="tahun" name="tahun" class="form-control" placeholder="Tahun Pelaksanaan Paket Pekerjaan">
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
							<th class="text-center">Target Kinerja</th>
							<th class="text-center">Jenis Pengadaan</th>
							<th class="text-center">Jenis Dana DAK</th>
							<th class="text-center">Tahun Pelaksanaan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$q=mysqli_query($mycon,"select * from simoni_paket");
						while($h=mysqli_fetch_array($q)){
						?>
						<tr>
							<td class="text-center"><?php echo $h['bidang']; ?></td>
							<td ><?php echo $h['nama']; ?></td>
							<td class="text-center"><?php echo number_format($h['pagu'],2,',','.'); ?></td>
							<td class="text-center"><?php echo number_format($h['target'],0,',','.').' '.$h['satuan']; ?></td>
							<td class="text-center"><?php echo $h['pengadaan']; ?></td>
							<td class="text-center"><?php echo $h['dak']; ?></td>
							<td class="text-center"><?php echo $h['tahun']; ?></td>
							<td class="text-center">
								<div class="btn-group">
									<a href="?menu=paket&id=<?php echo $h['paketid']; ?>&aksi=edit" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
									<a href="?menu=paket&id=<?php echo $h['paketid']; ?>&aksi=hapus" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Hapus</a>
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