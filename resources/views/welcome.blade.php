@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="notification-bar">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="slider">
        <ul class="slides">
            <li class="selected image-b image-first slide-one" style="background-image: url({{ asset('img/p1.png') }})"><span class="hide">image</span></li>
            <li class="image-b image-second slide-two" style="background-image: url({{ asset('img/p2.png') }})"><span class="hide">image</span></li>
            <li class="image-b image-third slide-three" style="background-image: url({{ asset('img/p3.png') }})"><span class="hide">image</span></li>
        </ul>
    </div>
    <section class="section hero" id="hero">
        <div class="container">
            <div class="hero-txt">
            <div class="login-form">
                <form class="form-container" method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Looks like you want to make some changes!<br>Are you an owner of this website?</h3>
                <div class="form-field">
                    <label for="user"><b>E-mail :</b></label>
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-field">
                    <label for="pass"><b>Password :</b></label>
                    <input type="password" name="password" required autocomplete="current-password">
                </div>
                <button type="submit" class="log-btn">Login</button>
                </form>
                <label for="user"></label>
            </div>
            <div class="txt-box txt-one show">
                <h1 class="title dark-grey"><span class="orange">Front-end Developer & Marketeer <br></span> I design and code beautifully simple things, and I love what I do.</h1>
                <p class="txt dark-grey">
                My name is Bojan Kolano and I am a graduate student at the University Singidunum in Serbia, Novi Sad. I love computers , coding and playing games.
                </p>
                <a class="orange red-link" href="/my-cv"><span class="s s-play orange"><span class="hide">right arrow</span></span>Check out my CV</a>
            </div>
            <div class="txt-box txt-two">
                <h1 class="title dark-grey"><span class="orange">Working </span>every day to improve my skills and aquire new ones</h1>
                <p class="txt dark-grey">
                I am working every day , coding and studying , learning new things , improving my skills and broading my knowledge.
                </p>
                <a class="orange red-link" href="#linked"><span class="s s-play orange"><span class="hide">right arrow</span></span>See my LinkedIn page</a>
            </div>
            <div class="txt-box txt-three">
                <h1 class="title"><span class="orange">Reading </span> comic books and novels is my my biggest passion</h1>
                <p class="txt">
                I love reading books and comic books especially . Japanese manga is one of my favorite type of comics . Beside reading , I also love to ride motorcycles and boats . Computers are also one of my biggest pasions . I love to play all kinds of games with many different people.
                </p>
                <a class="orange red-link" href="/contact"><span class="s s-play orange"><span class="hide">right arrow</span></span>Contact me</a>
            </div>
            </div>
            <div class="pagination-box">
            <div class="pagination">
                <a class="prev" href="javascript:;"><span class="s s-prev ico white"><span class="hide">right arrow</span></span></a>
                <ul>
                <li class="bg-orange first-bttn"><a class="white" href="javascript:;">What I do</a></li>
                <li class="second-bttn" ><a class="white " href="javascript:;">Daily</a></li>
                <li class="third-bttn"><a class="white " href="javascript:;">My passion</a></li>
                </ul>
                <a class="next" href="javascript:;"><span class="s s-play ico white"><span class="hide">left arrow</span></span></a>
            </div>
            @if(Auth::user())
            <a href="/home" class="change-btn">Make changes</a>
            @else
            <button type="button" class="change-btn login-btn">Make Changes</button>
            @endif
            </div>
        </div>
    </section>
    <section class="section" id="block">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col col-4 col-3-t col-1-m">
                        <div class="wrapp show-project-popup"  id="{{ $project->id }}">
                            <div class="seethru-bcg popup-box--hide" id="popup-box-{{ $project->id }}">
                                <div class="popup-box" >
                                    <h2 class>{{ $project->title }}</h2>
                                    <p>{!! $project->content !!}</p>
                                    <a href="{{ $project->url }}">Check it out on GitHub</a>
                                </div>
                            </div>
                            <div class="txt-box">
                                <span class="date grey">{{ Carbon\Carbon::parse($project->created_at)->format('d.m.Y') }}</span>
                                <h3 class="orange">{{ $project->title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section" id="see-thru">
        <div class="container">
            <div class="cont">
            <div class="overlay"><span class="hide">overlay</span></div>
            <a name="linked"><h2 class="title white">MY <span class="orange ">LinkedIn</span></h2></a> 
            <p class="txt white">
                If you want to see and read more about my bussines life, about my education and work experience, feel free to check out my linked in page where you can add me and send me a message!
            </p>
            <a class="white red-btn" href="https://www.linkedin.com/in/bojan-kolano-969735150/" target="_blank"><span class="s s-play white"><span class="hide">right arrow</span></span><span class="white text-red">Proceed to LinkedIN</span></a>
            </div>
        </div>
    </section>
@endsection
