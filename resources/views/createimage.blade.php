
@extends('layouts.main')

@section('content1')
<form method="POST" action="{{ route('imagestore') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" value="{{ old('Title') }}" name="Title">
        {{-- Error Message --}}
        @error('Title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Description">Description</label>
        <textarea class="form-control" name="Description" rows="4" cols="50">{{ old('Description') }}</textarea>
        {{-- Error Message --}}
        @error('Description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
        {{-- Error Message --}}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary">Upload</button>
</form>
@endsection
