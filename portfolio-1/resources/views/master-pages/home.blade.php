
@extends('master')
@section('content')


	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<img style="width: 700px; height: 650px;margin-right: 20px; border-radius: 100%;" src="master-assets/images/sahin.jpg" alt="">
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello! This is Shaheen</span>
								<h1 class="mb-4 mt-3">Creative <span>Web</span> Designer &amp; Developer</h1>
								<p><a href="{{ url('/contact') }}" class="btn btn-primary">Hire me</a> <a href="https://github.com/Md-Shaheen-Miah/CV/blob/main/Md.%20Shaheen%20Miah-CV.pdf" class="btn btn-secondary" target="_blank">Download CV</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<img style="width: 700px; height: 650px;margin-right: 20px; border-radius: 100%;" src="master-assets/images/sahin.jpg" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">We Design &amp; Build Brands</span>
								<h1 class="mb-4 mt-3">Hi, I am <span>Shaheen</span> This is my favorite work.</h1>
								<p><a href="{{ url('/contact') }}" class="btn btn-primary">Hire me</a> <a href="https://github.com/Md-Shaheen-Miah/CV/blob/main/Md.%20Shaheen%20Miah-CV.pdf" class="btn btn-secondary" target="_blank">Download CV</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img bg-light" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-suitcase"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="4">0</strong>
							<span>Project Complete</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-loyalty"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="0">0</strong>
							<span>Happy Clients</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-coffee"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="150">0</strong>
							<span>Cups of coffee</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-calendar"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="1">0</strong>
							<span>Years experienced</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(master-assets/images/shaheen.jpg);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">My Intro</span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span>Md. Shaheen Miah</span></li>
									<li class="d-flex"><span>Date of birth:</span> <span>Jun 16-1997</span></li>
									<li class="d-flex"><span>Address:</span> <span>Uttara, Dhaka Bangladesh</span></li>
									<li class="d-flex"><span>Zip code:</span> <span>1230</span></li>
									<li class="d-flex"><span>Email:</span> <span>mdshaheen60101@gmail.com</span></li>
									<li class="d-flex"><span>Phone: </span> <span>+8801641160101</span></li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="my-interest d-lg-flex w-100">
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-listening"></span>
										</div>
										<div class="text">Music</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-suitcases"></span>
										</div>
										<div class="text">Travel</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-video-player"></span>
										</div>
										<div class="text">Movie</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-football"></span>
										</div>
										<div class="text">Sports</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Skills</span>
					<h2 class="mb-4">My Skills</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row progress-circle mb-5">
				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">70<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">20%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">50%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">HTML 5</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='98'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">25%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">50%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Bootstrap</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='68'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">55<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Javascrip</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='92'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">42<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">JQuery</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='83'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">React</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">62<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">PHP</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">WordPress</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">50<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>


				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Laravel</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Vue-JS</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">65<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">OOP</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">Git-GitHub</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">I am grat at</span>
					<h2 class="mb-4">I do awesome services for my clients</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-3d-design"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Design</h3>
							<p>Web design is the process of creating visually appealing and user-friendly websites that provide
								 a seamless experience across devices. It involves the strategic use of layout, colors, typography,
								  and interactive elements to engage visitors and achieve business goals.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-app-development"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Application</h3>
							<p>My web application is designed to streamline tasks and enhance user productivity through an intuitive interface.
								 It offers a seamless experience with features that cater to diverse user needs.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-web-programming"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Development</h3>
							<p>Web development involves building and maintaining websites, ensuring they function smoothly and efficiently.
								 It includes both front-end and back-end development to create dynamic, responsive, and secure web applications
								 .</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-branding"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Banner Design</h3>
							<p>Banner design is the art of creating visually striking graphics that capture attention and convey a clear message in a limited space. 
								It combines creative elements like colors, typography, and images to promote brands or events effectively.</p>
						</div>
					</div> 
				</div>
			</div>

			
		</div>
	</section>

	<section class="ftco-hireme">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100 py-4">
						<h2>Have a project on your mind.</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly.</p>
						<p class="mb-0"><a href="{{ url('/contact') }}" class="btn btn-white py-3 px-4">Contact me</a></p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 d-flex align-items-end">
					<img style="height: 236px;" src="master-assets/images/sahin.jpg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Accomplishments</span>
					<h2 class="mb-4">My Projects</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-1.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-2.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-3.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-4.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-5.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-6.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-7.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(master-assets/images/work-8.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	


	

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					
					<h2 class="mb-4">Contact with me</h2>
					<p>You can contact me from any of the options below, Thanks</p>
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-8">




					 <!-- Your Form Goes Here -->
							<form id="contact-form" class="bg-light p-4 p-md-5 contact-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Your Name" name="name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Your Email" name="email" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject" name="subject" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
										</div>
									</div>
								</div>
							</form>

							<!-- EmailJS Initialization and Script -->
							<script type="text/javascript">
								(function() {
									emailjs.init("DlXY_nWHQXNUIHjkN"); // YOUR_PUBLIC_KEY here
								})();
								
								document.getElementById('contact-form').addEventListener('submit', function(event) {
									event.preventDefault(); // Prevent the default form submission

									// Collect form data
									var templateParams = {
										name: this.name.value,
										email: this.email.value,
										subject: this.subject.value,
										message: this.message.value
									};

									// Send email using EmailJS
									emailjs.send('service_4tldlal', 'template_23pjjbw', templateParams)
									.then(function(response) {
										console.log('SUCCESS!', response.status, response.text);
										alert('Message Sent Successfully!');
									}, function(error) {
										console.log('FAILED...', error);
										alert('Failed to send message. Please try again later.');
									});

								});
							</script>



					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">
								<p><span>Address:</span>Uttara,Dhaka,Bangladesh</p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel://01641160101">+8801641160101</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:mdshaheen60101@gmail.com">mdshaheen60101@gmail.com</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Website:</span> <a href="https://mshaheenpro.online" target="_blank" rel="noopener noreferrer">mshaheenpro.online</a></p>

							</div>
						</div>
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>
	</section>
	

		

@endsection