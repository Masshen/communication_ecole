@extends('layout.admin')

@section('section')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des élèves</h4>
      <p class="card-description">
        <a href="{{ route('create.pupil') }}" class="btn btn-primary btn-rounded btn-fw">
            Ajouter un élève
        </a>
      </p>
      @if ($eleves->count()>0)
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>User</th>
              <th>Nom complet</th>
              <th>Messages</th>
              <th>Classe</th>
              <th>Deadline</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($eleves as $p)
                <tr>
                    <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                    </td>
                    <td>
                        <span class="text-uppercase">{{ $p->nom }}</span>
                        <span class="text-capitalize">{{ $p->prenom }}</span>
                    </td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td>{{ $p->classe->label }}</td>
                    <td>May 15, 2015</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
  </div>
@endsection
