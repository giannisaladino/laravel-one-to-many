@extends ('layouts.app')

@section('content')
<section>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
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
                    <td class="text-center">{{ $project->type_id }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->date }}</td>
                    <td><a class="btn btn-primary" href="">EDIT</a></td>
                    <td><a class="btn btn-danger" href="">DELETE</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection