@extends('layouts.app')
@section('content')
<table class="table">
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add Item</a>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>
                @if($item->image)
                <img src="{{ asset('images/' . $item->image) }}" alt="" width="50" height="50">
                @endif
            </td>

            <td>
                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection