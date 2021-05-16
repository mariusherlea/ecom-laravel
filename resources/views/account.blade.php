<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        {{--        <th>Order</th>--}}
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($accounts)

        @foreach($accounts as $account)
            <tr>
                <td>{{$account->id}}</td>
                <td>{{$account->name}}</td>
                <td>{{$account->email}}</td>
                @foreach($account->orders as $order)
                    <table>
                        <tr>
                            <th>Order Id</th>
                        </tr>
                        <tr>
                            <td>{{$order->id}}</td>
                        </tr>

                    </table>
                @endforeach
                <td>{{$account->created_at->diffForHumans()}}</td>
                <td>{{$account->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>


</body>
</html>
