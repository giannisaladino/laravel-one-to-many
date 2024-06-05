@extends ('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h3>{{ $project->name }}</h3>
    <h5>Data di creazione: {{ $project->date }}</h5>
</div>
@endsection