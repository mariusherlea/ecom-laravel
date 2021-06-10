<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Account_id</th>
        <th>Price</th>

    </tr>
    </thead>
    <tbody>
    @if($orders)


        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->account_id}}</td>
                <td>{{$order->calcul($order->id)}}</td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>


</body>
</html>
