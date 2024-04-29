<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap')}}" rel="stylesheet">
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('CSS/user.css')}}">
    <title>Homepage</title>
</head>
<body>
    <section id="main-grid">
        <sidebar>
            <div class="sidebar-container">
                <div class="sidebar-nav">
                    <nav class="navbar navbar-dark">
                        <p style="font-size: 2.5rem;">Kelompok 5</p>
                        <ul class="navbar-nav">
                            <li class="nav-item">22-025 | Kun Fadhilah</li>
                            <li class="nav-item">22-045 | Willy Chairullah F.P.</li>
                            <li class="nav-item">22-089 | Ahmad Ramadani B.</li>
                            <li class="nav-item">22-165 | Adi Prawono</li>
                            <li class="nav-item">22-194 | Moh Fais Rizqianshah</li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-logout">
                    <img class="img-logo" src="{{url('images/logout.png')}}" alt="logout-icon">
                    <a class="logout" href="?logout=''"><b>Log Out</b></a>
                </div>
            </div>
        </sidebar>
        <content>
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
                    <span>Admin</span>
                </div>
            </div>
            <div class="content-container">
                <div class="content-form">
                    <div class="content-form-header">
                        <p>Update User Account</p>
                    </div>
                    <form action="{{url('/userlist')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-content">
                            <div class="form-display">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" id="usernameup" placeholder="Username" value="{{ $akun -> username }}" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" id="email" placeholder=" Email" value="{{ $akun -> email }}" />
                                </div>
                                <div style="display: flex; margin-bottom: 1rem;">
                                    <input type="checkbox" name="show" class="form-check-input" onclick="showPassUp()">
                                    <label for="show" class="form-check-label text-center" style="font-size: 16px; white-space: nowrap; margin-left: 3px; margin-top: 6px;">Show password</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </content>
    </section>
</body>
<script src="{{url('JS/login.js')}}"></script>
</html>