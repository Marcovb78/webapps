@extends('/layouts.admin')

@section('content')

    <div class="container">
        <table class="uk-table uk-table-striped">
            <caption>Alle videos</caption>
            <thead>
                <tr>
                    <th>Tutorial name</th>
                    <th>Tutorial description</th>
                    <!-- <th>Tutorial link</th> -->
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                    <tr>
                        <td>{{ $video->title }}</td>
                        <td>{{ $video->description }}</td>
                        <!-- <td>{{ $video->link }}</td> -->
                        <td>{{ $video->created_at }}</td>
                        <td><a uk-icon="trash" class="uk-icon-link uk-button-small uk-button-danger" href="/admin/videos/{{ $video->id }}"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
