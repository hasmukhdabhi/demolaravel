<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>

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
        <h1>{{ $count }}</h1>
        <button wire:click="increment">++</button>
        <button wire:click="decrement">--</button>
    </div>
</body>
</html>