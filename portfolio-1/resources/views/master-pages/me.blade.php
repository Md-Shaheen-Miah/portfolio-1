
@extends('master')
@section('content')

<div class="me">
    <body>
        <link rel="stylesheet" href="{{ asset('assets/me.css') }}">
        <div class="container">
            <!-- Image Section -->
            <div class="image-section">
                <img src="master-assets/images/sahin.jpg" alt="Descriptive Image">
                <h2> MD. SHAHEEN MIAH </h2>
                <p><a href="{{ url('/contact') }}" class="btn btn-primary">Hire me</a> <a href="https://github.com/Md-Shaheen-Miah/CV/blob/main/Md.%20Shaheen%20Miah-CV.pdf" class="btn btn-secondary" target="_blank">Download CV</a>
            </div>
    
            <!-- Description Card -->
            <div class="card description-card">
                <h2>Description</h2>
                <p> I am actively seeking a Software Development role. Proficient in
                    Laravel, Vue.js & React, aim to contribute my expertise in these
                    technologies to drive successful projects and gain valuable professional
                    experience</p>
            </div>
    
            <!-- Address Card -->
            <div class="card address-card">
                <h2>About</h2>
                <h4 class="d-flex"><span>Name:</span> <span>Md. Shaheen Miah</span></h4>
                <h4 class="d-flex"><span>Date of birth:</span> <span>Jun 16-1997</span></h4>
                <h4 class="d-flex"><span>Address:</span> <span>Uttara, Dhaka Bangladesh</span></h4>
                <h4 class="d-flex"><span>Zip code:</span> <span>1230</span></h4>
                <h4 class="d-flex"><span>Email:</span> <span>mdshaheen60101@gmail.com</span></h4>
                <h4 class="d-flex"><span>Phone: </span> <span>+8801641160101</span></h4>
            </div>
        </div>
    </body>
</div>

@endsection