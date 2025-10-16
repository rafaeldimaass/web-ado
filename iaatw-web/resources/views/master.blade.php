<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAATW | Home</title>
    <link rel="icon" href="{{asset('assets/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/all-around-the-world" rel="stylesheet">
</head>
<body>
   <nav>
    <a href="/"><img src="{{asset('assets/logo.png')}}" alt=""></a>
    <h1><a href="/">ADO</a></h1>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#dpd">DPD</a></li>
        <li><a href="#activities">Activities</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <!-- <li><a href="/posts">Posts</a></li> -->
    </ul>
   </nav>
   <div class="content">
        <section id="content">@yield('content')</section>
   </div>
   <footer>
    <div class="upper-part">
    <div class="contact-footer">
        <h3>Contact Us</h3>
        <p>Boundary House</p>
        <p>Cricket Field Rd, Uxbridge UB8 1QG, UK</p>
        <p>www.iaatw.org</p>
        <p>iaatw.board@gmail.com</p>
        <p><a href="">Privacy Policy</a></p>
    </div>
    <div class="quick-links">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="">Affiliates</a></li>
            <li><a href="">Manifesto</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Posts</a></li>
        </ul>
    </div>
    </div>
    <div class="lower-part">
        <p>&copy; {{date('Y')}} IAATW. All rights reserved.</p>
    </div>
   </footer>
</body>
</html>