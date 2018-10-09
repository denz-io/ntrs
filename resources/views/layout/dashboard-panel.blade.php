<div class="col-md-12" style="padding-bottom: 15px;">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel custom-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/">
                            <i class="fa fa-home fa-lg"></i>
                            Home 
                        </a>
                    </li>
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/registration">
                            <i class="fa fa-user-plus fa-lg"></i>
                            Operator Registration 
                        </a>
                    </li>
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/operator">
                            <i class="fa fa-male fa-lg"></i>
                            Operator 
                        </a>
                    </li>
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/association">
                            <i class="fa fa-address-book fa-lg"></i>
                            Associations 
                        </a>
                    </li>
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/driver">
                            <i class="fa fa-motorcycle fa-lg"></i>
                            Drivers 
                        </a>
                    </li>
                    <li class="nav-item custom-nav-link">
                        <a class="nav-link" href="/route">
                            <i class="fa fa-road fa-lg"></i>
                            Routes 
                        </a>
                    </li>
                    @if(Auth::user()->is_admin)
                        <li class="nav-item custom-nav-link">
                            <a class="nav-link" href="/sms">
                                <i class="fa fa-envelope fa-lg"></i>
                                SMS 
                            </a>
                        </li>
                    @endif
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <i class="fa fa-calendar fa-lg"> <span id="date"></span></i>
                        <i class="fa fa-clock-o fa-lg"> <span id="time"></span></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
