@extends('layouts.app')

@section('content')
    <section>
        <div class="container d-flex justify-content-center py-5">
            <div class="d-flex flex-column gap-2">
                <h2 class="align-self-center">{{$project->project_name}}</h2>
                <p class="card-text">{{$project->description}}</p>
                <div class="d-flex gap-2">
                    <span class="fw-bold">Type: </span>
                    <span>{{$project->development_type}}</span>
                </div>
                <div class="d-flex gap-2">
                    <span class="fw-bold">Status: </span>
                    <span>{{$project->project_status}}</span>
                </div>
                <div class="d-flex gap-2">
                    <span class="fw-bold">Github Link: </span>
                    <span>
                        <a href="{{$project->github_link}}">{{$project->github_link}}</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection