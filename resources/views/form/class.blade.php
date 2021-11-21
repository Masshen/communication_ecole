@extends('layout.admin')


@section('section')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description">Basic form layout</p>
      <form class="forms-sample" method="post" action="{{ route('post.class') }}">
          @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Promotion</label>
          <input name="promotion" type="num" class="form-control" id="exampleInputUsername1" placeholder="1,2,3...6" />
        </div>
        <div class="form-group">
            <label for="exampleSelectCycle">Cycle</label>
            <select name="cycle" class="form-control" id="exampleSelectCycle">
              @foreach ($cycles as $p)
                <option value="{{ $p }}">{{ $p }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleSelectSection">Section</label>
            <select name="section" class="form-control" id="exampleSelectSection">
              @foreach ($sections as $p)
                <option value="{{ $p }}">{{ $p }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleSelectSection">Référence de la salle</label>
            <select name="reference" class="form-control" id="exampleSelectSection">
              @foreach ($references as $p)
                <option value="{{ $p }}">{{ $p }}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2"> Créer </button>
        <a href="{{ route('front.class') }}" class="btn btn-light">Annuler</a>
      </form>
    </div>
  </div>

@endsection
