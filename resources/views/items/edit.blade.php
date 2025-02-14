@extends('layouts.app')
@section('content')
    <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $item->name }}">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $item->description }} </textarea>

        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            @if ($item->image)
                <img src="{{ asset('images/' . $item->image) }}" alt="" width="50" height="50"
                    class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
