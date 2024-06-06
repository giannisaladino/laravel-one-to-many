@extends ('layouts.app')

@section('content')
<section>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project )
                <tr>
                    <th>{{ $project->id }}</th>
                    <td><a href="{{ route('admin.projects.show', $project) }}">{{ $project->name }}</a></td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->date }}</td>
                    <td><button class="btn btn-primary">EDIT</button></td>
                    <td><button class="btn btn-danger" >DELETE</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection