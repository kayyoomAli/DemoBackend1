<div id="layoutSidenav">

<div id="layoutSidenav_nav" >
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ url('user-dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                    Detaile
                </a>

                <a class="nav-link" href="{{ url('user-profile') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                    Profile
                </a>

                <a class="nav-link" href=" {{ url('userchangePassword') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-key"></i></div>
                    Change Password
                </a>


                <a class="nav-link" href="{{ url('logout') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-sign-out"></i></div>
                    Logout
                </a>



            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
{{--  </div>  --}}
