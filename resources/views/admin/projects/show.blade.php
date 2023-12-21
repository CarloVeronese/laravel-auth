@extends('layouts.app')

@section('content')
    <section>
        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column">
                <h5>{{$project->project_name}}</h5>
                <p class="card-text">{{$project->description}}</p>
                    <li class="list-group-item d-flex justify-content-between">{{$project->development_type}}</li>
                    <li class="list-group-item d-flex justify-content-between">{{$project->github_link}}</li>
            </div>
        </div>
    </section>
@endsection