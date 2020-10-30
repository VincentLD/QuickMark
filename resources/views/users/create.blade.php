@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row row-prof">
            <div class="card col-md-5 mb-5 card-prof">
            <div class="card-header">
                <h4 class="text-center">Ajouter un professeur</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('accountProf') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom de famille') }}</label>
                        <div class="col-md-6">
                            <input id="lastname"
                                   type="text"
                                   class="form-control @error('lastname') is-invalid @enderror"
                                   name="lastname"
                                   value="{{ old('lastname') }}"
                                   required autocomplete="lastname" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                        <div class="col-md-6">
                            <input id="firstname"
                                   type="text"
                                   class="form-control @error('firstname') is-invalid @enderror"
                                   name="firstname"
                                   value="{{ old('lastname') }}"
                                   required autocomplete="firstname" autofocus>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                        <div class="col-md-6">
                            <input id="email"
                                   type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">Rôle</label>
                        <div class="col-md-6">
                            <select class="form-control" id="role" name='is_admin'>
                                <option value="0">Utilisateur</option>
                                <option value="1">Administrateur</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-warning btn-round">
                                <i class="fas fa-user-plus"></i>
                                {{ __('Enregistrer') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            <div class="col-md-5">
                <img class="img-add-prof" src="images/team.svg" alt="team-image">
            </div>

        </div>

    </div>
@endsection
