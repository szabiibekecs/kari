<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('success'))
        <p>{{session('success')}}</p>
    @endif
    <form action="{{route('new_gift_type.store')}}" method="post">
        @csrf
        <label for="type">Type:</label>
        <input type="text" name="type" id="type">
        <input type="submit" value="Save">
    </form>
</body>
</html>