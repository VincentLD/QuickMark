<div class="container-fluid">
    <div class="row row-prof">
        <div class="card col-md-5 card-prof h-100 align-self-center">
            <div class="card-header">
                <h3 class="text-center">Modifier le stage d'un élève</h3>
            </div>

            <div class="card-body pt-0">
                <form method="POST" action="stages/{{ $editStage->id }}/edit" >
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="student_id" class="col-md-4 col-form-label text-md-right">Élève</label>
                        <div class="col-md-6">
                            <select class="form-control" id="student_id" name='student_id'>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->lastname }} {{$student->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company_id" class="col-md-4 col-form-label text-md-right">Entreprise</label>
                        <div class="col-md-6">
                            <select class="form-control" id="company_id" name='company_id'>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row row mb-2">
                        <label for="date_start" class="col-md-4 col-form-label text-md-right">Date de début</label>
                        <div class="col-md-6" style="padding-left: 12px">
                            <input class="form-control @error('date_start') is-invalid @enderror"
                                   name="date_start"
                                   type="date"
                                   id="date_start"
                                   value="{{ $editStage->date_start }}"
                            >
                        </div>
                        @error('date_start')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date_start') }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row row mb-2">
                        <label for="date_end" class="col-md-4 col-form-label text-md-right">Date de fin</label>
                        <div class="col-md-6" style="padding-left: 12px">
                            <input class="form-control @error('date_end') is-invalid @enderror"
                                   name="date_end"
                                   type="date"
                                   id="date_end"
                                   value="{{ $editStage->date_end }}"
                            >
                        </div>
                        @error('date_end')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date_end') }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row row mb-2">
                        <label for="opinion" class="col-md-4 col-form-label text-md-right" style="margin-right: 10px">Remarque</label>
                        <textarea class="form-control col-md-6"
                                  style="padding-left: 12px"
                                  id="opinion"
                                  rows="2"
                                  name="opinion"
                                  placeholder="{{ $editStage->opinion }}"
                        ></textarea>
                    </div>

                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-outline-danger btn-round">
                            {{ __('Enregistrer') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <img src="/images/stage.svg" class="col-md-5" style="height: 428px" alt="stage-img">
    </div>
</div>
