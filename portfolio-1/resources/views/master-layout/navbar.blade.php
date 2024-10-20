<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/home') }}">SHAHEEN<span>.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="{{ url('/home') }}" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="{{ url('/about') }}" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="{{ url('/skill') }}" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="{{ url('/service') }}" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="{{ url('/project') }}" class="nav-link"><span>Projects</span></a></li>
					
					<li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link"><span>Contact</span></a></li>

					<div style="margin-top: 10px;">
						@if (Route::has('login'))
					<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
						@auth
							<a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
						@else
							<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
	
							@if (Route::has('register'))
							
							@endif
						@endauth
					</div>
				@endif
					</div>
					<a href="{{ url('/me') }}">
						<img style="height: 30px; border-radius:100%; margin-top:6px; margin-left:200px;" src="master-assets/images/sahin.jpg" class="img-fluid" alt="">
					</a>
					

				</ul>
			</div>
		</div>
	</nav>