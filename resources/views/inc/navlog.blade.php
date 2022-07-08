<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark mx-auto">
    <div class="container-fluid">
        {{-- </button> --}}
        <img style="width:50px" class="shadow rounded-circle m-3" src="{{url('assets/images/favicon.png')}}">
        <div class="navbar-header">
            <span class="open-slide">
                <a href="#" onclick="openSlideMenu()" style="text-decoration: none">
                    <svg width="50" height="30">
                        <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                        <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                        <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
                    </svg>
                </a>
            </span>
            <a class="navbar-brand fs-4">{{config('app.name','Jobseek')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <ul class="nav navbar-nav">
                    <li class="nav-item "><a class="nav-link text-white fs-5" href="{{url('/dashboard')}}">Dashboard</a></li>
                </ul>
            </ul>
        </div>
        {{-- drop menu --}}
        <!-- Right Side Of Navbar -->
        @if(Auth::guest())
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:50%"> --}}
            <ul class="nav navbar-nav navbar-right mb-2 mb-lg-0 text-capitalize">
                <li class="nav-item mt-2">
                    <i class="bi bi-box-arrow-left text-danger"></i>
                </li>
                <li class="nav-item">
                   <a class="nav-link active"aria-current="page"href="{{('/login')}}">Login</a>
                </li>
                @else
                <li class="nav-item text-light text-capitalize" style="list-style:none">
                    {{Auth::user()->username}}
                </li> 
                @endif
            @if(Auth::check())
            <li class="nav-item dropdown text-muted"style="list-style:none" >
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                </a>
            <ul class="dropdown-menu" style="text-transform:lowercase">
                <a class="dropdown-item" href="{{url('/profile')}}">Profile<i class="bi bi-person-square ml-5"></i></a>
                <a class="dropdown-item mt-1" href="#">Setting<i class="bi bi-sliders ml-5"></i></a>
                <a class="dropdown-item mt-1" href="#">Preference<i class="fas fa-user ml-4"></i></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item mt-1" href="{{('/logout')}}">Logout<i class="bi bi-box-arrow-left ml-5"></i></a>
               @endif
            </ul>
        </li>
        </ul>
    </div>
    {{-- </div> --}}
</nav>
<!--nav-collabse-->
<div id="side-menu" class="side-nav">
    <ul class="nav navbar-nav" style="text-transform: capitalizes">
        <a href="#" class="btn-close btn-close-white fs-5" onclick="closeSlideMenu()">
            <small class="mr-5"></small></a>
        {{-- <p class="nav-link text-muted ml-5 text-white">Dashboard</p> --}}
        <li class="nav-item ml-5 pt-5">
            <a class='nav-link  active text-muted' href="{{url('/users')}}"> <em class="bi bi-person-plus m-3" style="color:#30BCED;"></em>Users</a>
        </li>
        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="{{url('/posts')}}"> <i class="bi bi-clipboard m-3" style="color:#F56565;"></i>Posts</a>
        </li>
        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="{{url('/company')}}"> <i class="bi bi-stickies-fill m-3" style="color:#30BCED;"></i>Companies</a>
        </li>
        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="{{url('/applicant')}}"> <i class="bi bi-card-checklist m-3" style="color:#F56565;"></i>Job
                applyed</a>
        </li>
        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="{{url('/allocate')}}"> <i class="bi bi-card-checklist m-3" style="color:#F56565;"></i>Employee
                Allocated</a>
        </li>


        </hr>
        <h5 class="ml-5 text-white">Employee</h5>
        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="{{url('/employee')}}"> <i class="bi bi-person m-3" style="color:#30BCED;"></i>Applicants Form</a>
        </li>

        <li class="nav-item ml-5">
            <a class='nav-link text-muted' href="#"> <i class="bi bi-card-checklist m-3" style="color:#F56565;"></i>MyApplication
            </a>
        </li>

        </hr>
    </ul>
</div>
<div id="main">
    <div class="row" style="margin-left:10%;padding-top:4%">
        <div class="col-lg-4">
            <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
                <div class="card-body text-center">
                    <a href="#" class="nav-link ">
                        <i class="bi bi-stickies-fill nav-icon" style="color:#F56565;font-size:36px;"></i>
                        <ul class="mx-5 pt-3 nav nav-item active" style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
                            <li class="lead">Manage Posts</li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
                <div class="card-body text-center">
                    <a href="#" class="nav-link ">
                        <i class="bi bi-person-plus nav-icon" style="color:#F56565;font-size:36px;"></i>
                        <ul class="mx-5 pt-3 nav nav-item" style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
                            <li class="lead">Manage applicants</li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                          box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
                <div class="card-body text-center">
                    <a href="#" class="nav-link ">
                        <i class="bi bi-book nav-icon" style="color:#F56565;font-size:36px;"></i>
                        <ul class="mx-5 pt-3 nav nav-item" style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
                            <li class="lead">Manage Users</li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- row contente center --}}
</div>
<script>
    function openSlideMenu() {
        document.getElementById('side-menu').style.width = "300px";
        document.getElementById('main').style.marginLeft = "20px";
    }

    function closeSlideMenu() {
        document.getElementById('side-menu').style.width = "0";
        document.getElementById('main').style.marginLeft = "0";
    }

</script>
