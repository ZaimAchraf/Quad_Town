@extends("backOffice.layout.panel")

@section("style")
    <link rel="stylesheet" href="{{asset("adminPanel")}}/vendors/mdi/css/materialdesignicons.min.css">

    <style>
        .card.mycard {
            padding: 10px;
            border: 1px solid #ddd;
            background: #fbfbfb;
            margin: 10px;
        }

        .myCardsContainer{
            display: flex;
            flex-wrap: wrap;
        }

        .myCardsContainer p.card-text {
            font-size: 1em;
            font-weight: bold;
            color: #a9a9a9;
        }
    </style>
@endsection


@section("content-wrapper")
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Orders List</h4>
                            <div class="myCardsContainer">
                                @foreach($orders as $order)
                                    <div class="card mycard" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$order->firstname . $order->lastname}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{$order->created_at}}</h6>
                                            <h4>Email :</h4>
                                            <p style="margin-left: 20px" class="card-text">{{$order->email}}</p>
                                            <h4>Address :</h4>
                                            <p style="margin-left: 20px" class="card-text">{{$order->address}}</p>
                                            <h4>Country/City :</h4>
                                            <p style="margin-left: 20px" class="card-text">{{$order->country . "/" . $order->city}}</p>
                                            <h4>Note :</h4>
                                            <p style="margin-left: 20px" class="card-text">{{$order->note ?? "NULL"}}</p>
                                            <h4>Package :</h4>
                                            <h5 style="margin-left: 20px" class="card-title">{{$order->package->name}}</h5>
                                            <h4>Total :</h4>
                                            <h5 style="margin-left: 20px" class="card-title">{{$order->total}}$</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
@endsection
