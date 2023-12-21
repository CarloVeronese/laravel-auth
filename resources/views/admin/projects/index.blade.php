@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>Projects</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div>
            <a href="{{route('admin.projects.create')}}" class="btn btn-success">NEW PROJECT</a>
        </div>
        <table class="table table-stripped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Project Name</th>
              <th>Type</th>
              <th>Github</th>
              <th>Status</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($projects as $project)
                <tr>
                  <td>{{ $project->id}}</td>
                  <td>
                    <a href="{{ route('admin.projects.show',$project) }}">
                        {{ $project->project_name  }}
                    </a>
                  </td>
                  <td>{{ $project->development_type }}</td>
                  <td>{{ $project->github_link }}</td>
                  <td>{{ $project->project_status }}</td>
                  <td>
                    <a href="{{ route('admin.projects.edit',$project) }}">edit</a>
                  </td>
                  <td>
                    <form action="{{ route('admin.projects.destroy',$project)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <input class="btn btn-danger btn-sm" type="submit" value="delete">
                    </form>
                  </td>

                </tr>
            @empty
                <tr>
                  <td>Nessun post</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
@endsection