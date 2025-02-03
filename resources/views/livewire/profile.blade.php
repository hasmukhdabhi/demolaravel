<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- {{$data}} --}}
    @foreach ($data as $item)
        <strong>{{ $item }}</strong>
    @endforeach
    <h2>Profile Component</h2>
    <strong>User Search</strong>
</div>
