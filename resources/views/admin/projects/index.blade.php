@extends ('layouts.app')

@section('content')
<section>
    <div class="container">
    </div>
    <div class="container mt-5">
        <div class="row g-2">
            @foreach ($projects as $project )
                <div class="col-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3>{{ $project->name }}</h3>
                            <a href="{{ route('admin.projects.show', $project) }}">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection