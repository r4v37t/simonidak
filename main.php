<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>SIMoni - DAK</title>

        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
        <link rel="shortcut icon" href="img/pu.png">

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <link rel="stylesheet" href="css/themes/lake.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center">
                    Sistem Informasi Monitoring DAK<br />
                    <strong>SIMoni - DAK</strong>
                </h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="./" class="sidebar-brand">
                                <img src="img/pu.png" width="32"><span class="sidebar-nav-mini-hide">&nbsp;&nbsp;<strong>SIMoni - DAK</strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                </div>
                                <div class="sidebar-user-name"><?php echo $_SESSION['nama']; ?></div>
                                <div class="sidebar-user-links"><?php echo $_SESSION['nip']; ?></div>
                            </div>
                            <!-- END User Info -->
							
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="?menu=dashboard" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='dashboard')?'active':''):'active'; ?>"><i class="gi gi-dashboard sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-title">Admin Menu</span>
                                </li>
                                <li>
                                    <a href="?menu=user" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='user')?'active':''):''; ?>"><i class="gi gi-group sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Kelola User</span></a>
                                </li>
								<li class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='paket'||$_GET['menu']=='ppk'||$_GET['menu']=='pptk'||$_GET['menu']=='tfl')?'active':''):''; ?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-bullhorn sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Paket Pekerjaan</span></a>
                                    <ul>
                                        <li>
                                            <a href="?menu=paket" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='paket')?'active':''):''; ?>">Daftar Paket</a>
                                        </li>
										<li>
                                            <a href="?menu=ppk" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='ppk')?'active':''):''; ?>">Daftar PPK</a>
                                        </li>
										<li>
                                            <a href="?menu=pptk" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='pptk')?'active':''):''; ?>">Daftar PPTK</a>
                                        </li>
										<li>
                                            <a href="?menu=tfl" class="<?php echo (isset($_GET['menu']))?(($_GET['menu']=='tfl')?'active':''):''; ?>">Daftar TFL</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Links</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Design Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_preloader.html">Page Preloader</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_color_themes.html">Color Themes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Forms</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_forms_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_components.html">Components</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_wizard.html">Wizard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tables</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_tables_general.html">General</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_responsive.html">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="page_tables_datatables.html">Datatables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Icon Sets</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_icons_fontawesome.html">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Page Layouts</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_layout_static.html">Static</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Develop Kit</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-brush sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ready Pages</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_400.html">400</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_401.html">401</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_403.html">403</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_500.html">500</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_503.html">503</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_blank.html">Blank</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_search_results.html">Search Results (4)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_article.html">Article</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_user_profile.html">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_elearning_courses.html">Courses</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_inbox.html">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_compose.html">Compose Message</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_inbox_message.html">View Message</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_ready_chat.html">Chat</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_files.html">Files</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tickets.html">Tickets</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_bug_tracker.html">Bug Tracker</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tasks.html">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_forum.html">Forum (3)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_coming_soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                            <ul>
                                                <li>
                                                    <a href="login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="login_full.html">Login (Full Background)</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html">Login 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#reminder">Password Reminder</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#reminder">Password Reminder 2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html#register">Register</a>
                                                </li>
                                                <li>
                                                    <a href="login_alt.html#register">Register 2</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-wrench sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Components</span></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="page_comp_maps.html">Maps</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_charts.html">Charts</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_animations.html">CSS3 Animations</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                                <span class="sidebar-header-title">Activity</span>
                            </div>
                            <div class="sidebar-section sidebar-nav-mini-hide">
                                <div class="alert alert-success alert-alt">
                                    <small>5 min ago</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>10 min ago</small><br>
                                    <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                </div>
                                <div class="alert alert-danger alert-alt">
                                    <small>Yesterday</small><br>
                                    <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                                </div>
                            </div>
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
				<div id="main-container">
					<!-- Header -->
					<header class="navbar navbar-default">
						<!-- Left Header Navigation -->
						<ul class="nav navbar-nav-custom">
							<!-- Main Sidebar Toggle Button -->
							<li>
								<a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
									<i class="fa fa-bars fa-fw"></i>
								</a>
							</li>
							<!-- END Main Sidebar Toggle Button -->
						</ul>
						<!-- END Left Header Navigation -->

						<!-- Right Header Navigation -->
						<ul class="nav navbar-nav-custom pull-right">

							<!-- User Dropdown -->
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
									<img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu dropdown-custom dropdown-menu-right">
									<li class="dropdown-header text-center">Pengguna</li>
									<li>
										<a href="page_ready_user_profile.html">
											<i class="fa fa-user fa-fw pull-right"></i>
											Profil
										</a>
										<!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
										<a href="?logout" data-toggle="modal">
											<i class="gi gi-log_out fa-fw pull-right"></i>
											Keluar Sistem
										</a>
									</li>
								</ul>
							</li>
							<!-- END User Dropdown -->
						</ul>
						<!-- END Right Header Navigation -->
					</header>
					<!-- END Header -->
                <?php
				if(isset($_GET['menu'])){
					$menu=$_GET['menu'];
					if($menu=='dashboard'){
						include "$menu.php";
					}else if($menu=='user'){
						include "$menu.php";
					}else if($menu=='paket'){
						include "$menu.php";
					}else if($menu=='ppk'){
						include "$menu.php";
					}else if($menu=='pptk'){
						include "$menu.php";
					}else if($menu=='tfl'){
						include "$menu.php";
					}else{
						include 'dashboard.php';
					}
				}else{
					include 'dashboard.php';
				}
				?>
					<!-- Footer -->
					<footer class="clearfix">
						<div class="pull-right">
							Copyright 2019 &copy; Bid. CK DPUPRPKP Kab. Kapuas
						</div>
						<div class="pull-left">
							<a href="mailto:ciptakarya.dpukapuas@gmail.com"><i class="gi gi-envelope"></i> ciptakarya.dpukapuas@gmail.com</a>
						</div>
					</footer>
					<!-- END Footer -->
				</div>
                <!-- END Main Container -->
				
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/index.js"></script>
        <script>$(function(){ Index.init(); });</script>
    </body>
</html>