<?php 
	$this->load->view('layout/header_login');
	
?>	
	<body id="login" class="animated fadeInDown">
		<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
		<header id="header">
			<!--<span id="logo"></span>-->

			<div id="logo-group">
				<span id="logo"> <img src="<?php echo base_url();?>resources/images/maersk_logo.png" alt="Maersk"> </span>

				<!-- END AJAX-DROPDOWN -->
			</div>

			<span id="login-header-space"> <span class="hidden-mobile">Belum memiliki Akun?</span> <a href="<?php echo site_url('navigation/register');?>" class="btn btn-danger">Daftar</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big">Maersk e-Procurement</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">Selamat Datang di e-Procurement Maersk Indonesia</h4>
								<div class="login-app-icons">
									<!--<a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>-->
								</div>
							</div>
							
							<img src="<?php echo base_url();?>resources/images/maersk-logo2.bmp" class="pull-right display-image" alt="" style="width:210px">

						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">Tentang Maersk e-Procurement</h5>
								<p>
									Sistem Informasi untuk <i>electronic Procurement</i> bagi seluruh vendor <i>Shipping, Freight Forwarder, Trucking, dan Depo</i>
								</p>
							</div>
							
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							<form action="index.html" id="login-form" class="smart-form client-form">
								<header>
									Masuk
								</header>

								<fieldset>
									
									<section>
										<label class="label">E-mail</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="email" name="email">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Silahkan masukkan username anda</b></label>
									</section>

									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Masukkan password</b> </label>
										<div class="note">
											<a href="forgotpassword.html">Lupa password?</a>
										</div>
									</section>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Tetap masuk?</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Masuk
									</button>
								</footer>
							</form>

						</div>
						
						
						
					</div>
				</div>
			</div>

		</div>
		
		
<?php $this->load->view('layout/footer_login');?>