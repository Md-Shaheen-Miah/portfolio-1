

@extends('master')
@section('content')

<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">I am grat at</span>
                <h2 class="mb-4">We do awesome services for our clients</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-3d-design"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Web Design</h3>
                        <p>Web design is the process of creating visually appealing and user-friendly websites that provide a seamless experience across devices.
                             It involves the strategic use of layout, colors, typography, and interactive elements to engage visitors and achieve business goals.</p>
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
                            It includes both front-end and back-end development to create dynamic, responsive, and secure web applications.</p>
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
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. 
                        It is a paradisematic country, in which roasted parts of sentences fly.</p>
                    <p class="mb-0"><a href="{{ url('/contact') }}" class="btn btn-white py-3 px-4">Contact me</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex align-items-end">
                <img style="height: 236px;" src="master-assets/images/sahin.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

@endsection