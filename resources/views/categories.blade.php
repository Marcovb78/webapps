@extends('layouts.app')

    @section('content')

        <div class="jumbotron">
            <div class="container-fluid">
                <div class="d-flex justify-content-center flex-wrap">

                    @foreach($categories as $category)
                        <a class="card rounded-0 m-2" style="width: 15rem; text-decoration: none;" href="/category/{{ $category->id }}">
                            <img style="height:140px" src="img/test1.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->name }}</h5>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
        
    @endsection