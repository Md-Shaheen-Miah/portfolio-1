

@extends('master')
@section('content')

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



@endsection