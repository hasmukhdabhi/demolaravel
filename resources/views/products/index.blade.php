<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <h2>Product List</h2> -->
   
    <div>
        @foreach ($users as $user)
        Hello, {{ $user->name }} <br />
        @endforeach
    </div>
</body>

</html>