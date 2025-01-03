<style>
    .navbar-nav {
        display: block !important;
        visibility: visible !important;
        color: black !important;
        }
</style>
<header class="header_area sticky-header">
    <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{route('user.dashboard')}}"><img src="{{ asset('assets/templates/user/img/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                        </ul>
                        <ul class="nav navbar-nav menu_nav ml-5">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ORMAWA
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('user.organisasi')}}">Organisasi</a>
                                    <a class="dropdown-item" href="{{route('user.pendaftaran')}}">Pendaftaran Ormawa</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav menu_nav ml-5">
                            <li class="nav-item "><a class="nav-link" href="">Berita</a></li>
                        </ul>
                        <ul class="nav navbar-nav menu_nav ml-5">
                            <li class="nav-item "><a class="nav-link" href="">Kegiatan</a></li>
                        </ul>
                        <ul class="nav navbar-nav menu_nav ml-5">
                            <li class="nav-item "><a class="nav-link topnav-right" href="{{route('user.login')}}">LOGIN</a></li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
        
    </div>
</header>
