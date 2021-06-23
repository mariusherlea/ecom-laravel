<h1>Edit Item</h1>

<img height="100" src="{{$item->photo ? $item->photo->file : "http://placehold.it/400x400"}}">

{!! Form::model($item,['method' => 'PATCH', 'action' =>['App\Http\Controllers\ItemController@update', $item->id], 'files'=>true]) !!}

{!! form::label('name', 'Name: ') !!}
{!! form::text('name', null) !!}

{!! form::label('price', 'Price: ') !!}
{!! form::number('price', null) !!}

{!! form::label('stock', 'Stock: ') !!}
{!! form::number('stock', null) !!}

{!! form::label('photo_id', 'Photo: ') !!}
{!! form::file('photo_id', null) !!}

{!! form::submit('Create Item') !!}
{!! Form::close() !!}


@include('includes/form-error')


