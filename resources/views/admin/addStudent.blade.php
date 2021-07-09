@extends('adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('checkStudentToCoach')}}" method="post" class="form-row">
                    @csrf
                    <div class="form-group col-6">
                        <label for="etudiant_id">Selectionnez le coach</label>
                        <select name = 'coach_id' class="form-control form-control-sm" id="coach_id">
                            @foreach($coachs as $coach)
                                <option value = '{{ $coach->id}}'>{{ $coach->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="etudiant_id">Selectionnez l'étudiant</label>
                        @if($etudiants->count() != 0)
                            <select name = 'etudiant_id' class="form-control form-control-sm" id="etudiant_id">
                                @foreach($etudiants as $etudiant)
                                    <option value = '{{ $etudiant->id}}'>{{ $etudiant->name}} - {{ $etudiant->firstName}}</option>
                                @endforeach
                            </select>
                        @endif
                        @if($etudiants->count() == 0)
                           <br> Aucun étudiant à ajouter.
                        @endif
                    </div>
                    @if($etudiants->count() != 0)
                        <button type="submit" style="width:100%">Affectez le Coach</button>
                    @endif
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
