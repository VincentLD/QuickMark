@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row row-exam">
            <div class="card col-md-5 card-exam">
                <div class="card-header">
                    <h4 class="text-center">Ajouter une matière</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('matiere') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Référence') }}</label>
                            <div class="col-md-6">
                                <input id="title"
                                       type="text"
                                       class="form-control @error('ref') is-invalid @enderror"
                                       name="ref"
                                       value="{{ old('ref') }}"
                                       required autocomplete="label" autofocus
                                >
                                @error('ref')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Matière') }}</label>
                            <div class="col-md-6">
                                <input id="title"
                                       type="text"
                                       class="form-control @error('title') is-invalid @enderror"
                                       name="title"
                                       value="{{ old('title') }}"
                                       required autocomplete="label" autofocus
                                >
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Coefficient') }}</label>
                            <div class="col-md-6">
                                <input id="coefficient"
                                       type="number"
                                       class="form-control @error('coefficient') is-invalid @enderror"
                                       name="coefficient"
                                       step="0.5"
                                       value="{{ old('coefficient') }}"
                                       required autocomplete="label" autofocus
                                >
                                @error('coefficient')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary btn-round">
                                    {{ __(' Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <img class="img-add-prof" src="/images/exam.svg" alt="exam-image">
            </div>
        </div>
    </div>
@endsection
