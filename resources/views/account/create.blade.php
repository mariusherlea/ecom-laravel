<h1>Create Account</h1>


{!! Form::open(['action' =>'App\Http\Controllers\AccountController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

{!! form::label('name', 'Name: ') !!}
{!! form::text('name', null) !!}

{!! form::label('email', 'Email: ') !!}
{!! form::email('email', null) !!}

{!! form::submit('Create Account') !!}
{!! Form::close() !!}


@include('includes/form-error')


