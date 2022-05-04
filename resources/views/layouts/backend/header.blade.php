<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="https://demo.getcraftable.com/admin" class="navbar-brand">
        
       

    </a>
    <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span>
                    <span>
                        <img src="{{ asset("images/user_temp.jpg") }}" class="avatar-photo">
                        <span class="hidden-md-down">Administrator Administrator</span>
                    </span>

                </span>
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center"><strong>Account</strong></div>
                <a href="https://demo.getcraftable.com/admin/profile" class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                <a href="https://demo.getcraftable.com/admin/password" class="dropdown-item"><i class="fa fa-key"></i> Password</a>

                <a href="https://demo.getcraftable.com/admin/logout" class="dropdown-item"><i class="fa fa-lock"></i> Logout</a>
            </div>
            @if(View::exists('layout.backend.profile-dropdown'))
            @include('layout.backend.profile-dropdown')
            @endif
        </li>
    </ul>
</header>