@if ($akun -> level == 2)
    <div class="header-container" style="padding: 0 2rem; justify-content: flex-end;">
        <img class="img-account" src="{{url('images/user.png')}}"/>
        <span>{{ $akun -> username }}</span>
    </div>
@else
    <div class="header-container">
        <div style="padding-left: 4rem; flex: 9;">
            <nav class="navbar nav-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('/userlist')}}" style="color: #000; text-decoration: none; font-size: 1.2rem;"><b>User List</b></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div style="padding-right: 1rem; flex: 1;">
            <img class="img-account" src="{{url('images/admin.png')}}"/>
            <span>{{ $akun -> username }}</span>
        </div>
    </div>
@endif