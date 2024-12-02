@section('navbar')
    <nav class="navbar d-flex align-items-center navbar-expand-lg navbar-light bg-dark w-100 px-5">
        <a class="navbar-brand" style="color:white" href="#">BlogNest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100 d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link " style="color:white" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" style="color:white">Blog</a>
                </li>
                @auth
                    <li class="nav-item d-flex align-items-center justify-content-center w-100">
                        <a class="nav-link " href="#" style="color:white">Profile</a>
                    </li>
                @endauth
            </ul>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center h-100 justify-content-center w-25">
            @auth
            <form method="POST" action="{{route('logout')}}">
                <li class="nav-item d-flex align-items-center justify-content-center w-100">
                    @csrf
                    <button type="submit" class="nav-link "  style="background-color:white; color:black; border-radius:10px;">Logout</button>
                </li>
            </form>
            @endauth
            @guest
                <li class="nav-item d-flex align-items-center justify-content-center w-100">
                    <a class="nav-link  " href="{{route('signin')}}" style="color:white" >Login</a>
                </li>
            @endguest
        </div>
    </nav>
