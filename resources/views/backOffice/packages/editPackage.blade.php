@extends("backOffice.layout.panel")

@section("title","Modifier paquet")

@section("style")

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="{{ asset("adminPanel/vendors/image-uploader") }}/image-uploader.min.css">

@endsection

@section("content-wrapper")

    <div class="card" >
        @if(\Illuminate\Support\Facades\Session::has('error'))
            <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('error') }}</div>
        @endif
        <div class="card-body">
            <h4 class="card-title">Modifier ce paquet</h4>

            <form class="forms-sample" method="POST" action="{{ route("admin.package.update",["id" => $package->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Nom du paquet</label>
                    <input name="name" value="{{ $package->name }}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="prixInput">Price</label>
                    <input name="price" value="{{ $package->price }}"  type="text" class="form-control @error('price') is-invalid @enderror" id="prixInput" placeholder="prix de paquet">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mr-2">Sauvgarder</button>
                <a class="btn btn-light" href="{{ route("admin.package.index") }}" >Cancel</a>
            </form>
        </div>
    </div>


@endsection


@section("script")


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Saisir la description de produit',
                tabsize: 2,
                height: 100,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            });
        });
    </script>




@endsection
