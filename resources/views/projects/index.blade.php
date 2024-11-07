@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Progetti
                    </h1>

                    <tr class="text-center">
                        <td>
                            <a href=" {{ route('projects.create') }} ">Crea nuovo</a>
                        </td>
                    </tr>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data Creazione</th>
                            <th scope="col">Autore</th>
                            <th scope="col">Clicca qui sotto:</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($projects as $project)
                            <tr>
                              <th scope="row"> {{ $project->id }} </th>
                              <td> {{ $project->title }} </td>
                              <td> {{ $project->creation_date }} </td>
                              <td> {{ $project->author }} </td>
                              
                              <td>
                                <a href=" {{ route('projects.show', $project->id) }} ">Mostra</a>
                                <a href=" {{ route('projects.edit', $project->id) }} ">Modifica</a>
                                <a href="#">Elimina</a>
                              </td>
                            </tr>
                          @endforeach
                  
                      </tbody>
                    </table>
                  

                </div>
            </div>
        </div>
    </div>
@endsection
