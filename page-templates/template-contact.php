<?php

/**
 * Template Name: Contact Page
 *
 * @package eVision themes
 * @subpackage Bizlight
 * @since Bizlight 1.0.0
 */

get_header();
?>
	<div class="evision-wrapper evision-wrap-banner evision-banner-right-nav">
		<ul class="evision-main-slider" id="evision-slider">
		  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1.jpg" alt="slider image" />
		  	<div class="container evision-slider-content">
		  		<div class="evision-slider-caption">
					<h1 class="main-title">Welcome to bizlight</h1>
					<span class="banner-divider"></span>
					<div class="banner-con">
						<p>Unlike other companies, we do not charge hundreds of dollars per theme.</p>
					</div>
					<button class="banner-btn">click to start</button>
				</div>
			</div>
		  </li>
		    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider2.jpg" alt="slider image" />
		    	<div class="container evision-slider-content">
			  		<div class="evision-slider-caption">
				  		<h1 class="main-title">Welcome to bizlight 2</h1>
				  		<span class="banner-divider"></span>
				  		<div class="banner-con">
				  			<p>Unlike other companies, we do not charge hundreds of dollars per theme.</p>
				  		</div>
				  		<button class="banner-btn">click to start</button>
			  		</div>
		  		</div>
		    </li>
		      <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider3.jpg" alt="slider image" />
		      	<div class="container evision-slider-content">
		      		<div class="evision-slider-caption">
			    		<h1 class="main-title">Welcome to bizlight 3</h1>
			    		<span class="banner-divider"></span>
			    		<div class="banner-con">
			    			<p>Unlike other companies, we do not charge hundreds of dollars per theme.</p>
			    		</div>
			    		<button class="banner-btn">click to start</button>
		    		</div>
		    	</div>
		      </li>
		</ul>
	</div><!-- slider section -->

	<section class="evision-wrapper block-section wrap-contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="contact-right">
						<h2>SEND US AN EMAIL</h2>
						<p><strong>We are here to answer any questions</strong>you may have about our combadi experiences. Reach out to us and we'll respond as soon as we can.</p>
						<p>Even if there is something you have always wanted to experience and can't find it on combadi, let us know and we promise we'll do our best to find it for you and send you there.</p>
						<div class="contact-form">
							<?php echo do_shortcode( '[contact-form-7 id="1756" title="Contact form"]' ); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-sidebar">
						<div class="contact-widget">
							<h3>CANADA BRANCH</h3>
							<p><strong>Address:</strong> <br>
							609 Cherry Street Toronto, ON N7B 4L5 <br> Canada</p>
							<p><strong>Email:</strong> <br>
							<p>contactaddress@domain.com</p>
							<p><strong>Telephone:</strong> <br>
							<p>+01 234-567-8901, +01 876-543-2109 </p>
						</div>
						<div class="contact-widget">
							<h3>NEPAL BRANCH</h3>
							<p><strong>Address:</strong> <br>
							<p>Thimi Street Bkhatapur, ON P9L 4N1 <br> Nepal</p>
							<p><strong>Email:</strong> <br>
							<p>contactaddress@domain.com</p>
							<p><strong>Telephone:</strong> <br>
							<p>+977 234-567-8901, +977 876-543-2109 </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- service section -->

	<section class="evision-wrapper block-section wrap-contact">
		<div class="container">
			<div class="contact-inner">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-4 contact-list">
								<div class="icon-area">
									<i class="fa fa-phone"></i>
								</div>
								<div class="contact-detail">
									<a href="tel:+01-234-567-8901">+01-234-567-8901</a>
									<a href="tel:+01-876-543-2109">+01-876-543-2109</a>
								</div>
							</div>
							<div class="col-md-4 contact-list">
								<div class="icon-area">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="contact-detail">
									<p>99 Harrison Ave, Miller Place, <br> NY 12345, United States</p>
								</div>
							</div>
							<div class="col-md-4 contact-list">
								<div class="icon-area">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="contact-detail">
									<a href="mailto: contactinfo@domain.com" target="_blank" title="email to contactinfo@domain.com">contactinfo@domain.com</a>
									<a href="mailto: contactinfo@domain.com" target="_blank" title="email to contact@domain.com">contact@domain.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>


<?php get_footer();