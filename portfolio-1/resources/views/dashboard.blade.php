<x-app-layout>
   <div >
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Sidebar</title>
        <link rel="stylesheet" href="{{ asset('assets/sidebar.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <h2>My Portfolio</h2>
            </div>
            <ul class="menu">
                <li><a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Skills</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Services</a></li>
                
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><i class="fas fa-project-diagram"></i> Projects <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#">Web Development</a>
                        <a href="#">Design</a>
                        <a href="#">Other Projects</a>
                    </div>
                </li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    
        <div class="content">
            <!-- Content for each page goes here -->
            @yield('content')
        </div>
    </body>
    </html>
    
   </div>
</x-app-layout>
