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
                        <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-success colspan-2" style="font-size: 16px">NEW</a>
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
                            <a href="{{ route('admin.projects.edit',$project) }}" class="btn btn-warning">EDIT</a>
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