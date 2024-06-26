<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap')}}" rel="stylesheet">
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('CSS/user.css')}}">
    <title>Homepage</title>
</head>
<body>
    <section id="main-grid">
        <sidebar>
            @include('sidebar_temp')
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
                    <span>admin</span>
                </div>
            </div>  
            <div class="content-container">
                <div class="content-home">
                    <div class="header">
                        <p>List Account User</p>
                    </div>
                    <div class="container">
                        <table class="table table-striped table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($akun as $akuns)
                                <tr>
                                    @if ($akuns -> level == 2)
                                        <td>{{ $akuns -> username }}</td>
                                        <td>{{ $akuns -> email }}</td>
                                        {{-- <td>{{ $akuns -> level }}</td> --}}
                                        <td>
                                            <a href="{{url('/update')}}/{{ $akuns -> id }}" class="btn btn-primary">Update</a>
                                        </td>
                                        <td>
                                            <a href="{{url('/userlist/delete')}}/{{ $akuns -> id }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </content>
    </section>
</body>
</html>