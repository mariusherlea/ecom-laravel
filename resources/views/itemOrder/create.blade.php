<h1>A</h1>


{!! Form::open(['action' =>'App\Http\Controllers\ItemOrderController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

{!! form::label('item_id', 'Item_id: ') !!}
{!! form::select('item_id',$items, null) !!}

{!! form::label('order_id', 'Order_id: ') !!}
{!! form::select('order_id',$orders, null) !!}

{!! form::label('stock', 'Stock: ') !!}
{!! form::number('stock', null) !!}

{!! form::submit('Add Item to Order') !!}
{!! Form::close() !!}


@include('includes/form-error')


