@extends('/layouts.app')

@section('content')


    {{-- Marco zijn shit --}}

    {{-- @guest
    <header class="masthead" style="height: 40vh;">
        @include('navbar')
        <div class="container d-flex justify-content-center flex-column text-center text-light">
            <div class="test">
                <span style="font-size:60px;" class="welcome">{{ $project->title }}</span>
            </div>
        </div>
    </header>
        <div class="container video-text col-md-12">
            <h1 class="video-title-show" style="margin-left:10%; margin-top:5%;">{{ $project->title }}</h1><a style="float: right; padding-right:5%;"><b>Posted at:</b> {{ $project->created_at }}</a>
            <p class="video-description-show" style="width:40%; margin-left:10%;">{{ $project->description }}</p>
        </div>

    @else
    <header class="masthead" style="height: 40vh;">
        @include('navbar')
        <div class="container d-flex justify-content-center flex-column text-center text-light">
            <div class="test">
                <span style="font-size:60px;" class="welcome">{{ $project->title }}</span>
            </div>
        </div>
    </header>

        <div class="container">
            <div class="row">
                <div class="col-sm-9 video-text-show">
                    <h1>{{ $project->title }}</h1>
                    <p>{{ $project->description }}</p>
                    <p style="text-align: right;"><b>Posted at:</b> {{ $project->created_at }}</p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 video-text">
                    <form method="POST" action="/projects/{{ $project->id }}">
                        @csrf
                        @method('DELETE')
                        <a href="/projects"><button type="submit" class="btn btn-danger" style="margin-top: 10px;">Delete</button></a>
                    </form>
                    <a href="{{ $project->id }}/edit"><button type="submit" class="btn btn-primary" style="margin-top: 5px;">Edit</button></a>
                </div>
            </div>
        </div>
    @endauth --}}

    {{-- Mijn shit --}}

    <header class="masthead" style="height: 20vh; max-height:250px;">
        @include('navbar')
        <div class="container d-flex justify-content-center flex-column text-center text-light">
            <div class="test">
                <span style="font-size:60px;">{{ $project->title }}</span>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Project
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $project->title }}</h5>
              <p class="card-text">{{ $project->description }}</p>
              <a href="{{ url('projects/'.$project->id .'/edit' )}}" class="btn btn-primary">Edit</a>
              <a href="{{ url('projects/'.$project->id .'/destroy' )}}" class="btn btn-danger">Delete</a>
            </div>
            <div class="card-footer text-muted">
                {{ $project->created_at }}
            </div>
          </div>
    </div>

@endsection
