@extends('layouts.app')
@section('content')
<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Display Validation Errors -->
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="image" accept="image/*" onchange="previewImage(event)">
        <!-- Image show  -->
        <div class="mt-3">
            <img src="#" alt="Image Preview" id="imagePreview" style="display: none; max-height: 100px; border: 1px solid #ddd; padding: 5px;">
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <button type="submit" class="btn btn-success">Save</button>

</form>
@endsection

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('imagePreview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);

        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>