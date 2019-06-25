@extends('/layouts.admin')

@section('content')

    <div class="container">
        <a href="/admin/add-user"><button class="uk-button uk-button-default">Add User</button></a>
        <table class="uk-table uk-table-striped">
            <caption>Alle users</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a uk-icon="trash" class="uk-icon-link uk-button-small uk-button-danger" href="/admin/users/{{ $user->id }}"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
