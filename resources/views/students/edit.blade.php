@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row row-prof">
            <div class="card col-md-5 card-prof">
                <div class="card-header">
                    <h4 class="text-center">Modifier un élève</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/students/{{ $student->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom de famille') }}</label>
                            <div class="col-md-6">
                                <input id="lastname"
                                       type="text"
                                       class="form-control @error('lastname') is-invalid @enderror"
                                       name="lastname"
                                       value="{{ $student->lastname }}"
                                       required autocomplete="lastname" autofocus
                                >
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
                                       value="{{ $student->firstname }}"
                                       required autocomplete="firstname" autofocus
                                >
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">Date de naissance</label>
                            <div class="col-md-6">
                                <input class="form-control @error('birthdate') is-invalid @enderror"
                                       name="birthdate"
                                       type="date"
                                       value="{{ $student->birthdate }}"
                                       id="birthdate"
                                >
                            </div>
                            @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ $student->email }}"
                                       required autocomplete="email"
                                >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option" class="col-md-4 col-form-label text-md-right">Option</label>
                            <div class="col-md-6">
                                <select class="form-control" id="option" name='option'>
                                    <option value="SLAM">SLAM</option>
                                    <option value="SISR">SISR</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="insee" class="col-md-4 col-form-label text-md-right">{{ __('N° de l\'INSEE') }}</label>
                            <div class="col-md-6">
                                <input id="insee"
                                       type="number"
                                       class="form-control @error('insee') is-invalid @enderror"
                                       name="insee"
                                       value="{{ $student->insee }}"
                                       required autocomplete="insee"
                                >
                                @error('insee')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('insee') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-add-prof" src="/images/student.svg" alt="students-image">
            </div>
        </div>
    </div>
@endsection
