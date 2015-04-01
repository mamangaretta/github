<?php $this->load->view('layout/header');?>
		
		
			<!-- banner -->
			<div class="banner">
	
				<!-- responsiveslides -->
					<script src="<?php echo base_url();?>resources/js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
				<!-- responsiveslides -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-info">
								<h3><span>Anhiora</span> business solutions</h3>
								<p>Ethernet scan, in indeterminate controller high, recognition
								frequency silicon logistically. Read-only or boolean potentiometer pc infrared development debugged processor.</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3><span>Anhiora</span> business solutions</h3>
								<p>Internet scan, in indeterminate controller high, recognition
								frequency silicon logistically. Read-only or boolean potentiometer pc infrared development debugged processor.</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3><span>Anhiora</span> business solutions</h3>
								<p>Read-only or boolean potentiometer pc infrared development debugged processor. Extranet scan, in indeterminate controller high, recognition
								frequency silicon logistically. </p>
							</div>
						</li>
						
					</ul>
				</div>
	
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="new-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-3 bottom-grid">
				<div class="bottom-left">
					<div class="new"></div>
				</div>
				<div class="bottom-right">
					<h3>New way of vision</h3>
					<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="bottom-left">
					<div class="fresh"></div>
				</div>
				<div class="bottom-right">
					<h3>Fresh ideas</h3>
					<p>Suspendisse auctor sagittis quam quis rhoncus</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="bottom-left">
					<div class="strong"></div>
				</div>
				<div class="bottom-right">
					<h3>Strong foundations</h3>
					<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="bottom-left">
					<div class="great"></div>
				</div>
				<div class="bottom-right">
					<h3>Great support</h3>
					<p>Suspendisse auctor sagittis quam quis rhoncus</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //banner-bottom -->
<!-- about -->
<div id="about" class="about">
	<div class="container">
		<div class="about-header">
			<h2>ABUT US</h2>
			<a class="scroll" href="#home"><img src="<?php echo base_url();?>resources/images/1.png" alt=""/></a>
			<div class="clearfix"></div>
		</div>
		<div class="about-grids">
			<div class="col-md-4 about-grid">
				<h3>Who We Are</h3>
				<p>Suspendisse dictum quam tortor, et dapibus lacus. quisque euismod lacus in mi consequat
				sed pulvinar elit ultricies. Nam eu ligula ut massa lobortis scelerisque. Curabitur at 
				rhoncus quam. In in tortor quis sem tempor ultricies in eu risus. Fusce posuere justo et metus semper molestie.</p>
			</div>
			<div class="col-md-4 about-grid list">
				<h3>Why us?</h3>
				<ul>
					<li>Suspendisse dictum quam tortor</li>
					<li>Set dapibus lacus</li>
					<li>Quisque euismod lacus in mi consequat sed</li>
					<li>Nam eu ligula ut massa lobortis scelerisque.</li>
					<li>Curabitur at rhoncus quam.</li>
				</ul>
			</div>
			<div class="col-md-4 about-grid">
				<h3>Testimonials</h3>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="slider-info">
								<p> Curabitur at rhoncus quam. In in tortor quis sem tempor 
								ultricies in eu risus. Fusce posuere justo et metus semper molestie.</p>
								<img src="<?php echo base_url();?>resources/images/c.png" alt=""/>
								<h4>Jhon Doe</h4>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<p> Suspendisse dictum quam tortor, et dapibus lacus. quisque 
								euismod lacus in mi consequat justo sed pulvinar elit ultricies.</p>
								<img src="<?php echo base_url();?>resources/images/c.png" alt=""/>
								<h4>Thompson</h4>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<p> Dapibus lacus. quisque euismod lacus in mi consequat sed 
								pulvinar elit ultricies. Nam eu ligula ut massa</p>
								<img src="<?php echo base_url();?>resources/images/c.png" alt=""/>
								<h4>George</h4>
							</div>
						</li>
					</ul>
				</div>
				<!-- responsiveslides -->
					<script src="<?php echo base_url();?>resources/js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
				<!-- responsiveslides -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- team -->
<div id="team" class="team">
	<div class="container">
		<div class="team-header">
			<h2>MEET THE TEAM</h2>
		</div>
			<div class="work-bottom">
				<ul id="flexiselDemo1">			
					<li>
						<div class="team-grid">
							<img src="<?php echo base_url();?>resources/images/8.jpg" alt=""/>
							<h3>Stojan Petrov</h3>
							<p>Manager</p>
						</div>
					</li>
					<li>
						<div class="team-grid">
							<img src="<?php echo base_url();?>resources/images/10.jpg" alt=""/>
							<h3>Ivelina Peeva</h3>
							<p>Client relations</p>
						</div>
					</li>
					<li>
						<div class="team-grid">
							<img src="<?php echo base_url();?>resources/images/11.jpg" alt=""/>
							<h3>George Stoychev</h3>
							<p>Sales</p>
						</div>
					</li>
					<li>
						<div class="team-grid">
							<img src="<?php echo base_url();?>resources/images/12.jpg" alt=""/>
							<h3>Milena Ivanova</h3>
							<p>Office manager</p>
						</div>
					</li>
				</ul>
            		<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.flexisel.js"></script>
			</div>	
	</div>
</div>
<!-- //team -->
<!-- services -->
<div id="services" class="services">
	<div class="container">
		<div class="services-header">
			<h2>SERVICES</h2>
			<a class="scroll" href="#home"><img src="<?php echo base_url();?>resources/images/4.png" alt=""/></a>
			<div class="clearfix"></div>
		</div>
		<div class="services-grids">
			<div class="col-md-2 services-grid">
				<div class="voice"></div>
				<h3>Consulting</h3>
				<p>In quis magna eget magna rutrum hendrerit. Donec dap ibus aliquet magna.</p>
			</div>
			<div class="col-md-2 services-grid">
				<div class="checks"></div>
				<h3>Planning</h3>
				<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
			</div>
			<div class="col-md-2 services-grid">
				<div class="settings"></div>
				<h3>Development</h3>
				<p>Aliquam tellus leo,egestas eget consectetur sed, lobortis vel nisl.</p>
			</div>
			<div class="col-md-2 services-grid">
				<div class="product"></div>
				<h3>Production</h3>
				<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
			</div>
			<div class="col-md-2 services-grid">
				<div class="analysis"></div>
				<h3>Analysis</h3>
				<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
			</div>
			<div class="col-md-2 services-grid">
				<div class="release"></div>
				<h3>Release</h3>
				<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom">
			<div class="col-md-6 services-left">
				 <!----- tabs-box ---->
				<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							 <ul class="resp-tabs-list">
								  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>TAB DATA</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>TAB DATA</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>TAB DATA</span></li>
								  <div class="clearfix"></div>
							 </ul>				  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
								<span class="resp-arrow"></span>TAB DATA</h2>
								<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p>Suspendisse dictum quam tortor, et dapibus lacus. quisque euismod lacus in mi consequat
											sed pulvinar elit ultricies. Nam eu ligula ut massa lobortis scelerisque.</p>
										<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in eu risus. 
										Fusce posuere justo et metus semper molestie.</p>       
							        </div>
							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1">
								  <span class="resp-arrow"></span>TAB DATA</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<p>Nam eu ligula ut massa lobortis scelerisque. Suspendisse dictum quam tortor Curabitur 
										at rhoncus quam. In in tortor quis sem tempor ultricies in eu risus.</p> 
										<p>Fusce posuere justo et metus semper molestie. Fusce posuere justo et metus semper molestie.</p>
										
							        </div>	
								</div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2">
								  <span class="resp-arrow"></span>TAB DATA</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
										<p>Curabitur at rhoncus quam. In in tortor quis sem tempor ultricies in eu risus. 
										Fusce posuere justo et metus semper molestie.</p>
										<p>Suspendisse dictum quam tortor, et dapibus lacus. quisque euismod lacus in mi consequat
											sed pulvinar elit ultricies. Nam eu ligula ut massa lobortis scelerisque.</p>	    
									</div>	
							 </div>
					      </div>
					 </div>
						<script src="<?php echo base_url();?>resources/js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
						   </script>	
				</div>
			</div>
			<div class="col-md-6 services-right">
				<h3>Some of our results</h3>
				<div class="services-list">
					<div class="services-data">
						<p>Quisque euismod </p>
					</div>
					<div class="services-percentage">
						<div class="percent" style="width:80%"><p>80%</p></div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="services-list">
					<div class="services-data">
						<p>Curabitur at rhoncu </p>
					</div>
					<div class="services-percentage">
						<div class="percent" style="width:30%"><p>30%</p></div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="services-list">
					<div class="services-data">
						<p>Suspendisse dictum </p>
					</div>
					<div class="services-percentage">
						<div class="percent" style="width:75%"><p>75%</p></div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="services-list">
					<div class="services-data">
						<p>Nam eu ligula </p>
					</div>
					<div class="services-percentage">
						<div class="percent" style="width:60%"><p>60%</p></div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- prices -->
<div id="pricing" class="prices">
	<div class="container">
		<div class="prices-header">
			<h2>SEE OUR PRICES AND COMPARE</h2>
			<a class="scroll" href="#home"><img src="<?php echo base_url();?>resources/images/1.png" alt=""/></a>
			<div class="clearfix"></div>
		</div>
		<div class="pricing-grids">
			<div class="pricing-grid">
				<div class="light-plan">
					<h3>Light</h3>
					<p>Free</p>
				</div>
				<div class="price-list">
					<ul>
						<li>Sed laoreet ullamcorper</li>
						<li>Smetus semper molestie</li>
					</ul>
				</div>
				<div class="buy now"><a href="#">Sign up for free</a></div>
			</div>
			<div class="pricing-grid">
				<div class="light-plan">
					<h3>Standard</h3>
					<p>$ 10 <span>per/m</span></p>
				</div>
				<div class="price-list">
					<ul>
						<li>Sed laoreet ullamcorper</li>
						<li>Smetus semper molestie</li>
						<li>Ametus semper molestie</li>
					</ul>
				</div>
				<div class="buy nowa"><a href="#">Buy NOW</a></div>
			</div>
			<div class="pricing-grid">
				<div class="light-plan">
					<h3>Business</h3>
					<p>$ 35 <span>per/m</span></p>
				</div>
				<div class="price-list">
					<ul>
						<li>Sed laoreet ullamcorper</li>
						<li>Smetus semper molestie</li>
						<li>Ametus semper molestie</li>
						<li>Qmper molestie</li>
					</ul>
				</div>
				<div class="buy nowb"><a href="#">Buy NOW</a></div>
			</div>
			<div class="pricing-grid">
				<div class="light-plan">
					<h3>Standard</h3>
					<p>$ 50 <span>per/m</span></p>
				</div>
				<div class="price-list">
					<ul>
						<li>All business options plus</li>
						<li>Smetus semper molestie</li>
						<li>Ametus semper molestie</li>
					</ul>
				</div>
				<div class="buy nowa"><a href="#">Buy NOW</a></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="news-letter">
			<div class="news-left">
				<h3>Sign up for free</h3>
				<p>Suspendisse dictum quam tortor, et dapibus lacus. quisque euismod lacus in mi consequat
				sed pulvinar elit ultricies. Nam eu ligula ut massa</p>
			</div>
			<div class="news-right">
				<form>
						<input type="text" placeholder="" required>
						<input type="submit" value="SUBSCRIBE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //prices -->
<!-- map -->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
	
		<div class="contact-header">
			<h2>CONTACTS</h2>
			<a class="scroll" href="#home"><img src="<?php echo base_url();?>resources/images/4.png" alt=""/></a>
			<div class="clearfix"></div>
		</div>
	
</div>
<!-- //map -->
		<?php $this->load->view('layout/footer');?>
