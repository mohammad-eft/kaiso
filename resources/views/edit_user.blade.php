<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.update')}}" method = "post" enctype= "multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id" value = "{{$user->id}}">
        <label for="">name:</label>
        <input type="text" name="name" id="name" value = "{{$user->name}}">
        <label for="">family:</label>
        <input type="text" name="family" id="family" value = "{{$user->family}}">
        <label for="">phonenumber:</label>
        <input type="text" name="phonenumber" id="phonenumber" value = "{{$user->phonenumber}}">
        <label for="">password</label>
        <input type="text" name="password" id="password" value = "{{$user->password}}">
        <label for="">email</label>
        <input type="text" name="email" id="email" value = "{{$user->email}}">
        <label for="">img:</label>
        <input type="file" name="main_img" id="main_img" value = "{{$user->main_img}}">
        <button>ok</button>
    </form>
</body>
</html>