<header class="header-area">
    <!-- ***** Top Header Area ***** -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: info@myblog.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: </span></a>
                        </div>
                            <!-- Top Header Content -->
                        <div class="top-header-meta d-flex">
                            
                                </div>
                         </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="#">Our Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="shop.html">Categories</a>
                                                <ul class="dropdown">
                                                    @foreach($categories as $category)
                                            <li><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.html">Tags</a>
                                                <ul class="dropdown">
                                                    @foreach($tags as $tag)
                                            <li><a href="{{ route('tag.posts',$tag->slug) }}">{{ $tag->name }}</a></li>
                                            @endforeach
                                                </ul>
                                            </li>
                                            {{-- <li><a href="blog.html">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-post.html">Blog Details</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </li>
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                         @if(Auth::user()->role->id == 1)
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></i></li>
                                @endif
                                @if(Auth::user()->role->id == 2)
                                    <li><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
                                @endif
                                 @endguest
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form method="GET" action="{{ route('search') }}">
                            <input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text"  placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
</header>


    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(assets/frontend/img/bg-img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>My Blog Service</p>
                                <div class="welcome-btn-group">
                                    <a href="{{ route('register') }}" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="{{ route('contact') }}" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(assets/frontend/img/bg-img/2.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                 <h2>My Blog Service</p>
                                <div class="welcome-btn-group">
                                    <a href="{{ route('register') }}" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="{{ route('contact') }}" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->