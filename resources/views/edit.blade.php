@guest
 <h1>No permission</h1>
@endguest

@auth

@extends('/layouts.app')

@section('content')

    @include('navbar')

    <body style="background-color: #616468; height: 100vh;">
            <div class="container d-flex justify-content-center flex-column text-center text-light">
                <div class="test">
                    <span style="font-size:60px; color: #000;" class="welcome">Edit je project</span>
                </div>
            </div>

        <br><br>


        <div class="uk-container uk-card uk-card-default" style="padding: 15px; border-radius:4px;">
            <div class="uk-card-title">
            </div>
            <form method="POST" action="/projects/{{$project->id}}/update" style="padding:15px;" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <label for="title" style="font-weight: 100;"><b>Project titel</b></label>
                <input style="font-size: 16px; border-radius:5px;" type="text" class="uk-input" name="title" value="{{ $project->title }}"><br><br>
                
                <label for="description" style="font-weight: 100;"><b>Project description</b></label>
                <textarea style="font-size: 16px; border-radius:5px; resize: none;" class="uk-textarea" name="description" placeholder="" id="exampleFormControlSelect2" rows="6">{{ $project->description }}</textarea><br><br>

                <select style="border-radius:5px; margin-bottom: 5px;" class="uk-select" name="category">
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach
                </select>

                <button style="border-radius:3px; margin-top: 15px;" type="submit" class="uk-button uk-button-primary">Edit</button>
            </form>
        </div>
    </body>

@endsection
@endauth
