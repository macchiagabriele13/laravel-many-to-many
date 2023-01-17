@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5"> Update project: {{$project->title}}</h1>
    @include('partials.error')

    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="batman" aria-describedby="titleHlper" value="{{$project->title}}">
            <small id="titleHlper" class="text-muted">Add the project title here</small>
        </div>
        <div class="mb-3">
            <label for="difficulty" class="form-label">difficulty</label>
            <input type="text" name="difficulty" id="difficulty" class="form-control @error('difficulty') is-invalid @enderror" placeholder="batman vol-2 (joker)" aria-describedby="difficultyHlper" value="{{$project->difficulty}}">
            <small id="difficultyHlper" class="text-muted">Add the project difficulty here</small>
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">languages</label>
            <input type="text" name="languages" id="languages" class="form-control @error('languages') is-invalid @enderror" placeholder="12.20" aria-describedby="languagesHlper" value="{{ $project->languages}}">
            <small id="languagesHlper" class="text-muted">Add the project languages here</small>
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">languages</label>
            <input type="text" name="languages" id="languages" class="form-control @error('languages') is-invalid @enderror" placeholder="12.20" aria-describedby="languagesHlper" value="{{$project->languages}}">
            <small id="languagesHlper" class="text-muted">Add the project languages here</small>
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Types</label>
            <select class="form-select form-select-lg @error('type_id') 'is-invalid' @enderror" name="type_id" id="type_id">
                <option value="">Without Type</option>

                @forelse ($types as $type )
                <option value="{{$type->id}}" {{ $type->id == old('type_id',  $project->type ? $project->type->id : '') ? 'selected' : '' }}>
                    {{$type->name}}
                </option>
                @empty
                <option value="">Sorry, no types in the system.</option>
                @endforelse

            </select>
        </div>
        @error('category_id')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror



        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection