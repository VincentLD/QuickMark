@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row row-prof">
            <div class="card col-md-5 card-prof">
                <div class="card-header">
                    <h4 class="text-center">Ajouter une entreprise</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('entreprise') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom de l\'entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="name"
                                       type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adress"
                                       type="text"
                                       class="form-control @error('adress') is-invalid @enderror"
                                       name="adress"
                                       value="{{ old('adress') }}"
                                       required autocomplete="adress" autofocus>

                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success btn-round">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-add-prof" src="/images/company.svg" alt="company-image">
            </div>
        </div>

    </div>
@endsection
