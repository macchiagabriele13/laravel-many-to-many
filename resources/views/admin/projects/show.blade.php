@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->slug}}</p>
            <div class="meta">
                <div class="difficulty">
                    price: {{$project->difficulty}}
                </div>
                <div>
                    language:{{$project->languages}}
                </div>
                <div class="type">
                    <strong>type:</strong>
                    {{ $project->type ? $project->type->name : 'Without Type'}}
                </div>

                <div class="technologies">
                    <strong>Technologies:</strong>
                    @if(count($project->technologies) > 0)
                    
                
                    @foreach ($project->technologies as $technology )
                    <span> #{{$technology->name}}</span>
                    @endforeach
                
                    @else
                    <span> No technology</span>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection