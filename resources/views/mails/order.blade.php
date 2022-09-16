{{--@component("mail:message")--}}
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
    <h1>New Order</h1>
    <div class="card mycard" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{"De : " . $order->firstname . " " . $order->lastname}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$order->created_at}}</h6>
            <h4>Email :</h4>
            <p style="margin-left: 20px" class="card-text">{{$order->email}}</p>
            <h4>Phone :</h4>
            <p style="margin-left: 20px" class="card-text">{{$order->phone}}</p>
            <h4>Date :</h4>
            <p style="margin-left: 20px" class="card-text">{{$order->date . " AT " . $order->time}}</p>
            <h4>Note :</h4>
            <p style="margin-left: 20px" class="card-text">{{$order->note ?? "NULL"}}</p>
            <h4>Persons :</h4>
            <p style="margin-left: 20px" class="card-text">{{$order->nbr_adults . " Adult AND " . $order->nbr_children . " Child"}}</p>
        </div>
    </div>
</body>
</html>
{{--@endcomponent--}}
