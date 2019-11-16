<header class="header">
    <div class="container">
        <div class="navigation">
        <div class="logo">
            <a href="/"><img class="big-img" src="{{ asset('img/logo1.png') }}" alt="logo"></a>
            <a name = "logo" href="/"><img class="small-img" src="{{ asset('img/small-logo.png') }}" alt="logo"></a>
        </div>
        <div class="nav">
            <ul class="nav-items">
                <li><a href="/my-cv" class="white clickable">MY CV</a></li>
                <li><a href="javascript:;" class="white clickable">WHAT I DO</a>
                    <div class="dropdown">
                        <p class="txt white"><span class="orange">KOLANO</span> WEB SITE SERVES AS A PORTFOLIO TO SHOW MY WORK . AS FOR PROGRAMMING , FROM MY RESUME AND MY PROJECTS , YOU WILL SEE THAT I AM MAINLY FOCUSING ON FRONT-END PROGRAMMING . 
                        </p>
                        <div class="row">
                            <div class="col col-4 col-1-m">
                                <a class = "links-pages" href="https://www.w3schools.com/html/">
                                    <img src="{{ asset('img/html.png') }}" alt="html">
                                    <p class="txt white">HTML</p>
                                </a>
                            </div>
                            <div class="col col-4 col-1-m">
                                <a class = "links-pages" href="https://www.w3schools.com/css/"> 
                                    <img src="{{ asset('img/css.png') }}" alt="css">
                                    <p class="txt white">
                                        CSS
                                    </p>
                                </a>
                            </div>
                            <div class="col col-4 col-1-m">
                                <a class = "links-pages" href="https://www.w3schools.com/js/">
                                    <img src="{{ asset('img/js.png') }}" alt="js">
                                    <p class="txt white">JAVASCRIPT</p>
                                </a>
                            </div>
                        </div>
                        <button type="button" class="closing"><span class="s s-close white"><span class="hide">close</span></span></button>
                    </div></li>
                <li><a href="/terms" class="white clickable">TERMS OF USE</a></li>
                <li><a href="{{ route('all-projects') }}" class="white clickable">All PROJECTS</a></li>
                <li><a href="https://github.com/Spookyboki" class="white clickable" target = "_blank">GIT HUB</a></li>
                <li><a href="/contact" class="white clickable">CONTACT</a></li>
            </ul>
            <a href="javascript:;" class="hamburger"><span class="s s-menu white"><span class="hide">menu</span></span></a>
            <a href="javascript:;" class="search"><span class="s s-magnify white icon-btnl"><span class="hide">search</span></span></a>
            <div class="searching">
                <div class="cont">
                    <form action="/search" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" name="phrase" placeholder="Search..">
                        <button type="submit"><span class="s s-magnify white icon-btns"><span class="hide">search</span></span></button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>