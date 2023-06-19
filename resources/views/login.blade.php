<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('templates.app')

    @section('content')
        
    
    <h1>Log In</h1>
    @error('message')
        {{ $message }}
        
    @enderror
        
    
    <form action="{{route('login.submit')}}" method="post">
        @csrf
        <div>
            <label for="username">username: </label>
            <input type="text" id="username">
        </div>
        <div>
            <label for="password">password: </label>
            <input type="password" id="password">
        </div>
        <button>Submit</button>

    </form>
    @endsection
</body>
</html>