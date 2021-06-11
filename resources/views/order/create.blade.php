<h1>Create Order</h1>


{!! Form::open(['action' =>'App\Http\Controllers\OrderController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}


{!! form::label('account_id', 'Account_id: ') !!}
{!! form::select('account_id',$accounts, null) !!}


{!! form::submit('Create Order') !!}
{!! Form::close() !!}


@include('includes/form-error')


