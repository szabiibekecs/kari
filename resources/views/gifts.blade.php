<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($gifts as $gift)
    {{$gift->gift_name}}
    @endforeach

    @foreach($gifts as $gift)
    {{$gift->price}}
    @endforeach

    @foreach($gifts as $gift)
    {{$gift->gift_type_id}}
    @endforeach
</body>
</html>