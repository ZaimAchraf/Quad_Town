@extends("backOffice.layout.panel")

@section("title","Servers")

@section("style")
    <link rel="stylesheet" href="{{asset('adminPanel')}}/vendors/mdi/css/materialdesignicons.min.css">

    <style>
        .mdi{
            font-size: 22px !important;
        }

        .mdi-border-color{
            color: var(--success);
            top: 4px;
            position: relative;
        }
        .mdi-delete-forever{
            color: var(--danger);
        }
    </style>
@endsection

@section("content-wrapper")

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('success') }}</div>
    @endif


    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Serveurs</h2>
            <p class="card-description">
                <a href="{{ route("admin.server.create") }}" class="btn btn-outline-primary"> <strong>Ajouter Serveurs</strong></a>
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Server name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servers as $server)
                        <tr>
                            <td>{{ $server->id }}</td>
                            <td class="font-weight-bold">{{ $server->Server_name }}</td>
                            <td>
                                <a title="modifier le produit" href="{{ route("admin.server.edit",["id" => $server->id]) }}" style="margin: 0 5px">
                                    <i class="mdi mdi-border-color"></i>
                                </a>
                                <a title="supprimer le produit" href="#" data-id="{{ $server->id }}" class="ha-delete-product">
                                    <i class="mdi mdi-delete-forever"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
{{--                {{ $products->links() }}--}}
            </div>
        </div>
    </div>

@endsection


@section("script")

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        $(".ha-delete-product").on("click",function (e) {
            e.preventDefault();
            let server_id = $(this).attr("data-id");
            let row = $(this);
            Swal.fire({
                title: 'Es-tu sûr?',
                text: "Vous souhaitez supprimer ce  serveur!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimez-le !'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax("/admin/servers/destroy/"+ server_id, {
                        type: "get",
                        success: function (data) {
                            if(data === "success"){
                                row.parent().parent().hide();
                                Swal.fire(
                                    'Supprimé!',
                                    'Votre serveur a été supprimé.',
                                    'success'
                                )
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: "Quelque chose s'est mal passé!",
                                })
                            }
                        },
                    });


                }
            })
        })

    </script>
@endsection
