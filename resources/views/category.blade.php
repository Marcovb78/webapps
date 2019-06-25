@extends('layouts.app')

    @section('content')

    <header class="masthead" style="height: 40vh;">
        @include('navbar')
        <div class="container d-flex justify-content-center flex-column text-center text-light">
            <div class="test">
                <span style="font-size:60px;" class="welcome">Onderwerp</span>
            </div>
        </div>
    </header>

    <div class="wrapper">
        @include('sidebar')
        <div class="fill-height">
            <div class="d-flex justify-content-center flex-wrap p-5">
                @foreach($projects as $project)
                    <a class="video-card" href="projects/{{ $project->id }}">
                        <div class="text d-flex flex-column" style="position:absolute; top:100%">
                            <h2 style="font-size:1rem;">{{ $project->title }}
                            <h3 style="font-size:0.8rem;">{{ $project->description }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <footer class="footer" style="background-color:black; min-height:250px; width:100%; float:left;">

        </footer>
    </div>

    <script>

    $('.sidebar-button').click(function(){
        if($(".sidebar").hasClass("full-width")){
            $('.sidebar').hide();
        }else{
            $('.sidebar').hide();
        }
    });

    </script>

    @endsection
