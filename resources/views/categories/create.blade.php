@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/categories">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input class="form-control" value="{{ old('name') }}" name="name" />
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
