@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Gestion des notes</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('notes') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="student" class="col-md-4 col-form-label text-md-right">Étudiant</label>
                        <div class="col-md-6">
                            <select class="form-control" id="student" name='student'>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->lastname }} {{ $student->firstname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exam" class="col-md-4 col-form-label text-md-right">Matière</label>
                        <div class="col-md-6">
                            <select class="form-control" id="exam" name='exam'>
                                @foreach($exams as $exam)
                                    <option value="{{ $exam->id }}">{{ $exam->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mark" class="col-md-4 col-form-label text-md-right">{{ __('Note') }}</label>
                        <div class="col-md-6">
                            <input id="mark"
                                   type="number"
                                   class="form-control @error('note') is-invalid @enderror"
                                   name="mark"
                                   step="1"
                                   value="{{ old('coefficient') }}"
                                   required autocomplete="label" autofocus
                            >
                            @error('mark')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row row mb-2">
                        <label for="appreciation" class="col-md-4 col-form-label text-md-right" style="margin-right: 10px">Appreciation</label>
                        <textarea class="form-control col-md-6" style="padding-left: 12px" id="appreciation" rows="2" name="appreciation" required></textarea>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-8 d-flex flex-md-column align-items-md-end" style="padding-right: 4em;">
                            <h5 class="mt-4 ">Avis du conseil de classe</h5>
                            <p style="color: grey;">(Laisser nul si non déterminer)</p>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="avisGeneral" value="tresFavorable" >
                                    Très favorable
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="avisGeneral" value="favorable">
                                    Favorable
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="avisGeneral" value="doitFaireSesPreuves" >
                                    Doit faire ses preuves
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="avisGeneral" value="null" checked>
                                    Sans avis
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4" style="padding-left: 10em;">
                            <button type="submit" class="btn btn-outline-primary btn-round">
                                {{ __(' Enregistrer') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
