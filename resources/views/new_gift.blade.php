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

<form action="" method="post">
    @csrf
    <label for="gift_type_id">Type</label>
    <input type="text" name="gift_type_id" id="gift_type_id">
    <br>
    <label for="gift_name">name</label>
    <input type="text" name="gift_name" id="gilft_name">
    <br>
    <label for="price">price</label>
    <input type="text" name="price" id="price">
    <br>
    <input type="submit" value="Save">
</form>
</body>
</html>