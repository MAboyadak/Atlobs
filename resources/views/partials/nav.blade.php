<!-- Sidenav -->
<div id="mySidebar" class="sidebar">
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    <a href="#">Messages</a>
    <hr class="sidenav-divider">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" id="logout" href="#" class="btn-link">Log out</button>
    </form>
</div>

<!-- Sidenav -->



<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-nav">
    
    <div class="container-fluid">
      
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="brand-logo">
            <a class="navbar-brand " href="#"><img style="height:70px" src="{{asset('images/logo_.png')}}" alt=""></a>
        </div>
        

        <div class="float-left d-flex">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown mx-1">
                            
                            <a class="nav-link dropdown-toggle myicon" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                    </ul>
                @endauth
                @guest
                    <a class="login-button" href="{{route('login')}}">تسجيل الدخول</a>
                @endguest
                

            </div>

            <button class="nav-toggler btn mx-3" onclick="toggleNav()">
                <i class="fas fa-bars" id="toggler-icon"></i>
            </button>
        </div>

    </div>

</nav>

<script>
    function toggleNav() {
        
        let sideBar = document.getElementById("mySidebar");
        let togglerIcon = document.querySelector('#toggler-icon');

        if(sideBar.style.width == '250px')
        {
            togglerIcon.classList.remove('fa-close')
            togglerIcon.classList.add('fa-bars')
            sideBar.style.width = 0;
            sideBar.style.padding = 0;
            document.getElementById("main-nav").style.marginLeft = 0;
        }else{
            togglerIcon.classList.remove('fa-bars')
            togglerIcon.classList.add('fa-close')
            sideBar.style.width = "250px";
            sideBar.style.padding = "30px";
            document.getElementById("main-nav").style.marginLeft = "310px";
        }
    }

    // function closeNav() {
    //     document.getElementById("mySidebar").style.width = "0";
    //     document.getElementById("main").style.marginLeft= "0";
    // }
</script>