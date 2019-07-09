<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{--  <p>Laravel welcome {!! $name !!}</p>   --}}
    
    <h2>HTML </h2>
    @foreach ($errors->all() as $error)
    
    <li>{!! $error !!}</li><br>
        
    @endforeach
    <form action="home" method="post">
        @csrf
        First name:<br>
        <input type="text" name="firstname" >
        <br>
        Last name:<br>
        <input type="text" name="lastname" >
        <br><br>
        <input type="submit" value="Submit">
    </form>
    

</body>

</html>