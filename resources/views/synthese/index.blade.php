@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <form action="" method="GET" id="form-synthese" >
                @csrf
                <div class="form-group row">
                    <label for="student" class="col-md-4 col-form-label text-md-right">Étudiant</label>
                    <div class="col-md-6">
                        <select class="form-control" id="student" name='student'>
                            @foreach($students as $i)
                                <option value="{{ $i->id }}">{{ $i->lastname }} {{ $i->firstname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-warning btn-round m-0">
                            {{ __(' Chercher') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if($selectedStudent !== null)
        @include('synthese._table')
    @endif
@endsection

