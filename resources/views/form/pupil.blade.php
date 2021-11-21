@extends('layout.admin')


@section('section')

<form class="forms-sample" method="post" action="{{ route('post.pupil') }}">
    @csrf
<div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Eleves informations</h4>
                  <p class="card-description"></p>
                    <div class="form-group">
                      <label for="pupil_lastname">Nom</label>
                      <input name="nom" type="text" class="form-control" id="pupil_lastname" placeholder="Nom de l'élève" />
                    </div>
                    <div class="form-group">
                        <label for="pupil_firstname">Prénom</label>
                        <input name="prenom" type="text" class="form-control" id="pupil_firstname" placeholder="Prénom de l'élève" />
                    </div>
                    <div class="form-group">
                        <label for="pupil_birth">Date de naissance</label>
                        <input name="naissance" type="date" class="form-control" id="pupil_birth" placeholder="naissance de l'élève" />
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectClasse">Section</label>
                        <select name="classe" class="form-control" id="exampleSelectclasse">
                          @foreach ($classes as $p)
                            <option value="{{ $p->id }}">{{ $p->label }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information du père</h4>
                  <p class="card-description"></p>
                    <div class="form-group">
                      <label for="father_lastname">Nom</label>
                      <input name="father_nom" type="text" class="form-control" id="father_lastname" placeholder="Nom du père" />
                    </div>
                    <div class="form-group">
                        <label for="father_firstname">Prénom</label>
                        <input name="father_prenom" type="text" class="form-control" id="father_firstname" placeholder="Prénom du père" />
                    </div>
                    <div class="form-group">
                        <label for="father_profession">Profession</label>
                        <input name="father_profession" type="text" class="form-control" id="father_profession" placeholder="Profession du père" />
                    </div>
                    <div class="form-group">
                        <label for="father_birth">Date de naissance</label>
                        <input name="father_naissance" type="date" class="form-control" id="father_birth" placeholder="naissance du père" />
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informations de la mère</h4>
                  <p class="card-description"></p>
                    <div class="form-group">
                      <label for="mother_lastname">Nom</label>
                      <input name="mother_nom" type="text" class="form-control" id="mother_lastname" placeholder="Nom de la mère" />
                    </div>
                    <div class="form-group">
                        <label for="mother_firstname">Prénom</label>
                        <input name="mother_prenom" type="text" class="form-control" id="mother_firstname" placeholder="Prénom de la mère" />
                    </div>
                    <div class="form-group">
                        <label for="mother_profession">Profession</label>
                        <input name="mother_profession" type="text" class="form-control" id="mother_profession" placeholder="Profession de la mère" />
                    </div>
                    <div class="form-group">
                        <label for="mother_birth">Date de naissance</label>
                        <input name="mother_naissance" type="date" class="form-control" id="mother_birth" placeholder="naissance de la mère" />
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
        <button class="btn btn-light">Cancel</button>
</div>
</form>

@endsection
