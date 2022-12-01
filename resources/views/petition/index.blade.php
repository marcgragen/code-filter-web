@extends('app')

@section('content')
    <div class="container w-25 border p-4">
        <div class="row mx-auto">
            <form action="{{ route('contact') }}" method="POST">
                @csrf

                @if(session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="filter" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="filter" id="filter" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
