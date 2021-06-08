<h1>Create Item</h1>


{!! Form::open(['action' =>'App\Http\Controllers\ItemController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

{!! form::label('name', 'Name: ') !!}
{!! form::text('name', null) !!}

{!! form::label('price', 'Price: ') !!}
{!! form::number('price', null) !!}

{!! form::label('stock', 'Stock: ') !!}
{!! form::number('stock', null) !!}

{!! form::submit('Create Item') !!}
{!! Form::close() !!}


@include('includes/form-error')


