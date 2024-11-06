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
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data Creazione</th>
                            <th scope="col">Autore</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($projects as $project)
                            <tr>
                              <th scope="row"> {{ $project->id }} </th>
                              <td> {{ $project->title }} </td>
                              <td> {{ $project->creation_date }} </td>
                              <td> {{ $project->author }} </td>

                          @endforeach
                  
                      </tbody>
                    </table>
                  

                </div>
            </div>
        </div>
    </div>
@endsection
