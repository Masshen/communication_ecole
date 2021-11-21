@extends('layout.admin')

@section('section')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des classes</h4>
      <p class="card-description">
          <a href="{{ route('create.class') }}" class="btn btn-primary btn-rounded btn-fw">
              Ajouter une classe
          </a>
      </p>
      @if($classes->count()>0)
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Cycle</th>
              <th>Label</th>
              <th>Promotion</th>
              <th>Section</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($classes as $p)
            <tr>
                <td>{{ $p->cycle }}</td>
                <td>
                    <label class="badge badge-danger">{{ $p->label }}</label>
                </td>
                <td>{{ $p->promotion }}</td>
                <td>{{ $p->section }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
</div>


@endsection
