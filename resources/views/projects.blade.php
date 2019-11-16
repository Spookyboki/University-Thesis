@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    
<div class="projects">
    <h1>{{ $title }}</h1>
    @if(sizeof($projects) > 0)
        @foreach($projects as $project)
        
        <div class="project">
            <div class = "row">
                <div class="container">
                
                    <div class="col col-12 col-6-t col-1-m proj">
                        <h2 class>{{ $project->title }}</h2>
                        <p>{!! $project->content !!}</p>
                        <a href="{{ $project->url }}">Check it out on GitHub</a>
                    </div>
                </div>  
            </div>
        </div>
            
        @endforeach
    @else
        <p>No search results</p>
    @endif
    
</div>
    
@endsection