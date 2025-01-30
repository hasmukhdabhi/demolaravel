<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counter</title>
</head>
<body>
    <div>
        <p><strong>Hello from counter blade Page</strong></p>
        <h2>{{ $count }}</h2>
        <button wire:click="increment">++</button>
        <button wire:click="decrement">--</button>
    </div>
</body>
</html>