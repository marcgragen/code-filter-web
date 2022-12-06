@extends('app')

@section('content')

    <div class="container w-25 border p-4">
        <div class="row mx-auto">
            <form action="{{ route('demo') }}" method="POST">
                @csrf

                @if(session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="mb-3">
                    <label for="data" class="form-label">Demo Text</label>
                    <input type="text" class="form-control" name="data" id="data" placeholder="Hello world '<script>alert(1)</script>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
