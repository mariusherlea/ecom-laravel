<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item</title>
</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Item_id</th>
        <th>Order_id</th>
        <th>Ordered quantity</th>
        <th>Price</th>

    </tr>
    </thead>
    <tbody>
    @if($itemOrders)

        @foreach($itemOrders as $itemOrder)

            <tr>
                <td>{{$itemOrder->id}}</td>
                <td>{{$itemOrder->item_id}}</td>
                <td>{{$itemOrder->order_id}}</td>
                <td>{{$itemOrder->qt}}</td>


            </tr>

        @endforeach
    @endif
    </tbody>
</table>


</body>
</html>
