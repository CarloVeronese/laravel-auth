@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <table class="table table-stripped">
          <thead>
            <tr>
                <th>Project Name</th>
                <th>Type</th>
                <th>Github</th>
                <th>Status</th>
                <th>        
                    <div>
                        <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-success colspan-2" style="font-size: 16px">NEW PROJECT</a>
                    </div>
                </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($projects as $project)
                <tr class="align-middle">
                    <td>
                    <a href="{{ route('admin.projects.show',$project) }}">
                        {{ $project->project_name  }}
                        </a>
                    </td>
                    <td>{{ $project->development_type }}</td>
                    <td>{{ $project->github_link }}</td>
                    <td>{{ $project->project_status }}</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="{{ route('admin.projects.edit',$project) }}" class="btn btn-warning">edit</a>
                            <button id="myBtn" class="btn btn-danger delete">Delete</button>
                            <div id="bgForm" class="bg-form">
                            <div class="d-flex gap-3 delete-form">
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-lg">Yes</button>
                                </form>
                                <button id="noBtn" class="btn btn-primary btn-lg">No</button>
                            </div>
                        </div>                        
                    </td>
                </tr>
            @empty
                <tr>
                  <td>No Projects Found</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
@endsection