@extends('layouts.app')

@section('page-title', 'Crea Progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                      Crea:
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col">

        <form method="POST" action=" {{ route('projects.store') }} ">
          @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il tuo titolo">
          </div>
          <div class="mb-3">
            <label for="creation_date" class="form-label">Data Creazione:</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date">
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">Autore:</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci l'autore">
          </div>
          
          <input type="submit" value="crea">

      </form>
        
      </div>
    </div>
    
@endsection
