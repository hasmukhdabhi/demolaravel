<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form action="">
        <input type="text" wire:model.debounce.1000ms="search" placeholder="Search...">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Image:</label>
            <input type="file" name="image" class="form-control" value="">
        </div>
        <button type="submit" class="btn-btn-success">Save</button>
    </form>
    
</div>

