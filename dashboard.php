	<!-- Page content -->
	<div id="page-content">
		<!-- Dashboard Header -->
		<div class="content-header content-header-media">
			<div class="header-section">
				<div class="row">
					<!-- Main Title -->
					<div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
						<h1>Selamat Datang <strong><?php echo $_SESSION['nama']; ?></strong><br><small>Akses terakhir : <?php echo $_SESSION['last']; ?></small></h1>
					</div>
					<!-- END Main Title -->
				</div>
			</div>
			<!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
			<img src="img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
		</div>
		<!-- END Dashboard Header -->

		<!-- Mini Top Stats Row -->
		<div class="row">
			<?php
			$q=mysqli_query($mycon,"select sum(pagu) from simoni_paket where tahun=year(now())");
			$h=mysqli_fetch_array($q);
			$totalPagu=$h[0];
			?>
			<div class="col-sm-6 col-lg-3">
				<!-- Widget -->
				<a href="page_ready_article.html" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
							<i class="gi gi-usd"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							<strong>Rp. <?php echo number_format($totalPagu,2,',','.'); ?></strong><br>
							<small>Total Pagu</small>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<?php
			$q=mysqli_query($mycon,"select * from simoni_paket where tahun=year(now())");
			$totalPaket=mysqli_num_rows($q);
			?>
			<div class="col-sm-6 col-lg-3">
				<!-- Widget -->
				<a href="page_comp_charts.html" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-spring animation-fadeIn">
							<i class="gi gi-bullhorn"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							<strong><?php echo $totalPaket; ?> Paket</strong><br>
							<small>Total Pekerjaan</small>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<div class="col-sm-6 col-lg-3">
				<!-- Widget -->
				<a href="page_ready_inbox.html" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-fire animation-fadeIn">
							<i class="gi gi-usd"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							<strong>Rp. 0</strong>
							<small>Realisasi Keuangan</small>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<div class="col-sm-6 col-lg-3">
				<!-- Widget -->
				<a href="page_comp_gallery.html" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
							<i class="gi gi-cardio"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							<strong>0%</strong>
							<small>Realisasi Fisik</small>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
		</div>
		<!-- END Mini Top Stats Row -->

		<!-- Widgets Row -->
		<div class="row">
			<div class="col-md-12">
				<!-- Timeline Widget -->
				<div class="widget">
					<div class="widget-extra themed-background-dark">
						<h3 class="widget-content-light">
							Informasi <strong>Terbaru</strong>
						</h3>
					</div>
					<div class="widget-extra">
						<div class="tab-pane" id="search-tab-classic">
                                    <!-- Classic Results -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="block-section">
                                                <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                                                <p>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> &bull;
                                                    <a href="javascript:void(0)">http://example.com/</a> &bull;
                                                    <span class="text-warning">68 <i class="fa fa-comments"></i></span>
                                                    <span class="text-success">360 <i class="fa fa-thumbs-up"></i></span>
                                                </p>
                                                <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Classic Results -->

                                    <!-- Bottom Navigation -->
                                    <div class="block-section text-right">
                                        <ul class="pagination remove-margin">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Bottom Navigation -->
                                </div>
						<!-- END Timeline Content -->
					</div>
				</div>
				<!-- END Timeline Widget -->
			</div>
		</div>
		<!-- END Widgets Row -->
	</div>
	<!-- END Page Content -->