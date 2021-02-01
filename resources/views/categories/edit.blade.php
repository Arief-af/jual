@extends('layouts.app')

@section('heading')

@endsection

@section('content')

<div class="container">
    <h2> Edit Products </h2>
    <hr>
    <form method="POST" action="/categories/{{ $category->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input class="form-control" name="name" value="{{ old('name', $category->name) }}" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
