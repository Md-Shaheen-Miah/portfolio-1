
@extends('master')
@section('content')

<div style="margin-top:80px; mini: heights 100px;">
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
</div>

@endsection