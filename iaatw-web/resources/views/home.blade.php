@extends('master')
@section('content')
<section id="home" class="home">
    <h1>Asosiasi Driver Online (ADO)</h1>
    <p>Asosiasi Driver Online (ADO) merupakan afiliasi dari sejumlah komunitas <br> serta individu driver online, baik Roda 2 maupun Roda 4.</p>
    <p><a href="#about">See More About Us!</a></p>
</section>
<section id="about" class="about">
    
    <div class="left-container">
    <p>Profil <strong>Asosiasi Driver Online (ADO)</strong></p>
        <p class="about-text">Asosiasi Driver Online (ADO) merupakan afiliasi dari sejumlah komunitas serta individu driver online, baik Roda 2 maupun Roda 4 yang terbentuk dari kesamaan visi dan misi sebagai pelaku usaha Transportasi Online yang menginginkan suatu wadah yang dapat membela dan/atau dapat memecahkan suatu permasalahan baik yang timbul dari aturan pemerintah maupun pihak penyelenggara (aplikasi berbasis online) serta aspirasi lainnya para driver online.</p>
        <a class="about-link" href="/profile">See More About Us!</a>
    </div>
    <div class="right-container">
        <img src="{{asset('assets/about.jpg')}}" alt="">
    </div>
</section>
<section id="activities" class="news">
<div class="title-wrapper">
    <p>Latest <strong>Activities</strong></p>
    <!-- <a href="{{route('press')}}">See All &rarr;</a> -->
</div>
    <div class="news-line"></div>
    <div class="card-area">
    <div class="card-wrapper">
    <div class="news-card-container">
        <div class="news-card">
            <img src="{{asset('assets/newscover.jpg')}}" alt="">
            <div class="overlay">
            <h1>Gig economy workers have a new weapon in the fight against Uber</h1>
            <p>Uber, and its competitors, are multinational behemoths. To take them on, gig economy unions are going global</p>
            <a href="https://www.wired.com/story/gig-economy-uber-unions/" target="_blank">Read More</a>
            </div>
        </div>
        <div class="news-card">
            <img src="{{asset('assets/newscover2.jpg')}}" alt="">
            <div class="overlay">
            <h1>Driven to Organize: App-Based Drivers Launch New Global Network</h1>
            <p>Governments and consumers will have much to gain if labor power can provide a check on the runaway predatory business model that platform companies have exported around the world.</p>
            <a href="https://inequality.org/article/driven-to-organize-uber-lyft/" target="_blank">Read More</a>
            </div>
        </div>
      
        </div>
    </div>
    </div>
    </div>
</section>
<section id="contact" class="contact">
    <div class="contact-title-wrapper">
    <p>Contact Us</p>
    <p class="contact-subtitle"><strong>Fill out</strong> the form to get in touch with us.</p>
    </div>
    <div class="contact-container">
        <div class="contact-card">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf  

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Your message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Sent Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
