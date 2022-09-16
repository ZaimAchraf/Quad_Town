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
