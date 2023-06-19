<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('profile')}}">Profile</a>
        <a href="{{route('tasks')}}">Tasks</a>
        @if(auth()->check())
        <a href="{{route('logout')}}">Log Out</a>
        @else    
        <a href="{{route('login')}}">Log In</a>
        @endif

        <a href="{{route('register')}}">Sign Up</a>
    </header>
   
    
@yield('content')

    
</body>
</html>