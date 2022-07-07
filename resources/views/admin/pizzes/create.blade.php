@extends('layouts.app')

@section('content')
<div class="container">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="m-0 p-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.pizzas.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome pizza">
        </div>
        <div class="form-group">
          <label for="prezzo">Prezzo</label>
          <input type="number" class="form-control" id="prezzo" name="prezzo" placeholder="Prezzo">
        </div>
        <div class="form-group">
          <label for="ingredienti">Ingredienti</label>
          <input type="text" class="form-control" id="ingredienti" name="ingredienti" placeholder="Ingredienti">
        </div>
        <div class="form-group">
          <label for="popolarita">Popolarita</label>
          <input type="number" class="form-control" id="popolarita" name="popolarita" placeholder="Popolarità">
        </div>
        <div class="mb-3">
            <p>Vegetariana: </p>
            <label for="vegetariana" class="form-label">sì</label>
            <input type="radio" value="1" name="vegetariana" id="vegetariana">
            <label for="vegetariana" class="form-label">no</label>
            <input type="radio" value="0" name="vegetariana" id="vegetariana">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection