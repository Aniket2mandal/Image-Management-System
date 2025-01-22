<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="/css/user/navigation.css">
<link rel="stylesheet" href="/css/user/category.css">


<body>
    <div class="dashboard">
        <div class="left-dashboard">
            <div class="header">
                <h1>User</h1>
            </div>
            <div class="dashboard-list">
                <ul>
                    <li><a href="{{route('home')}}">Dashboard</a></li>

                    {{-- <li><a href="{{route('attendes.index')}}">Attendes</a></li> --}}
                    {{-- <li><a href="">Logout</a></li> --}}
                </ul>
            </div>
        </div>
        {{-- <div class="right-dashboard">
            <div class="nav">
                <div class="logo">
                    <h1 style="margin:0;padding:0">Event Management System</h1>
                </div>
                <div class="nav-profile" onclick="myFunction()">
                    <img src="/images/profile.jpg" alt="Profile" style="cursor: pointer;">
                </div>
            </div> --}}

            @yield('content1')

</body>

</html>
