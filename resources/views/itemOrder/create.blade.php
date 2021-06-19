<h1>Add item to order</h1>


{!! Form::open(['action' =>'App\Http\Controllers\ItemOrderController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

{!! form::label('order_id', 'Order_id: ') !!}
{!! form::select('order_id',$orders) !!}

{!! form::label('item_id', 'Item_id: ') !!}
{!! form::select('item_id',$items, null) !!}

{!! form::label('quantity', 'Quantity: ') !!}
{!! form::number('qt',$qt) !!}

{!! form::submit('Add Item to Order') !!}
{!! Form::close() !!}


@include('includes/form-error')


