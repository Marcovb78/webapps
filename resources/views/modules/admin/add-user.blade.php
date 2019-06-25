@extends('/layouts.admin')

@section('content')

    <div class="container">
        <form method="POST" action="#######" style="width: 75%; margin: auto; margin-bottom: 300px;">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Add New User</legend>

                <div class="uk-margin">
                        <small>Membership</small>
                        <select class="uk-select" required>
                            <option value="" disabled selected>Select the membership</option>
                            <option id="student" value="3">Student</option>
                            <option id="leraar" value="2">Leraar</option>
                            <option id="beheerder" value="1">Systeem Beheerder</option>
                        </select>
                    </div>

                <div class="uk-margin">
                    <small>Email</small>
                    <input class="uk-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" required placeholder="Email">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif


                    <small>Username</small>
                    <input class="uk-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" required placeholder="Username">

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif


                    <small>Password</small>
                    <input class="uk-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="text" required placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" style="background-color:white;" type="submit">Submit</button>
                </div>

            </fieldset>
        </form>
    </div>
@endsection
