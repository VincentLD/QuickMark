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
    </div>
@endsection
