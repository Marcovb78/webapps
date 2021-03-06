@extends('layouts.app')

    @section('content')

    <header class="masthead" style="height: 40vh;">
        @include('navbar')
        <div class="container d-flex justify-content-center flex-column text-center text-light">
            <div class="test">
                <span style="font-size:60px;" class="welcome">Alle projecten</span>
            </div>
        </div>
    </header>
    
    <div class="wrapper">
        @include('sidebar')
        <div class="sidebar-open"><i class="fas fa-bars"></i></div>
        <div class="fill-height">
            <div class="d-flex justify-content-center flex-wrap p-5">
                @foreach ($projects as $project)
                <a href="/projects/{{$project->id}}">
                    <div class="uk-card uk-card-default uk-card-hover m-3" style="margin-top: 30px; width:400px;">
                        <div class="uk-card-header">
                            <h1 class="uk-card-title">{{ $project->title }}</h1>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-card-badge uk-label">{{ $project->user->name }}</div>
                            <p style="color: #000;">{{ $project->description }}</p>
                        </div>
                        <div class="uk-card-footer">
                            <span style="float:right; color: #000;">{{ $project->created_at }}</span>
                        </div>
                        <a href="{{ url('projects/'.$project->id .'/edit' )}}"><button type="button" class="btn btn-secondary" style="margin: 0 0 15px 15px;">Edit je project</button></a>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        var rezise = true;
        $(".sidebar-open").click(function(){
            $(".sidebar").css("width","400px");
        });
        $(".sidebar-close").click(function(){
            $(".sidebar").css("width","0px");
        });

        window.onresize = function() {
            if (window.innerWidth >= 920) {  $(".sidebar").css("width","200px"); rezise = true;}
            if (window.innerWidth <= 920 && rezise) {  $(".sidebar").css("width","0px"); rezise = false;}
        }
    </script>
    @endsection
