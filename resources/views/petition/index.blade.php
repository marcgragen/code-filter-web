@extends('app')

@section('content')
    <div class="container border p-4">
        <div class="row mx-auto">
            <form action="{{ route('contact') }}" method="POST">
                @csrf

                @if(session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('surname')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('email')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('phone')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('type')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('details')
                <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="card">
                    <div class="card-header">
                        <strong>Dades de contacte</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-sm-6">
                                <label for="surname" class="form-label">Cognoms</label>
                                <input type="text" class="form-control" name="surname" id="surname">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Direcció de correu electrònic</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Telèfon mòbil</label>
                                <input type="number" class="form-control" name="phone" id="phone">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="type" class="form-label">Via de comunicació</label>
                                <select class="form-select" aria-label="Seleccionar via de comunicació" name="type" id="type">
                                    <option selected>Seleccionar via de comunicació</option>
                                    <option value="1">Correu electrònic</option>
                                    <option value="2">Whatsapp</option>
                                    <option value="3">Telegram</option>
                                    <option value="4">Trucada de veu</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="details" class="form-label">Detalls addicionals</label>
                                <textarea class="form-control" name="details" id="details" rows="3"></textarea>
                            </div>
                        </div><br>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
