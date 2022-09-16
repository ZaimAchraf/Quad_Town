@extends("backOffice.layout.panel")

@section("title","Ajouter une nouvelle vehicule")

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
            <h4 class="card-title">Créer une vehicule</h4>

            <form class="forms-sample" method="POST" action="{{ route("admin.vehicle.store") }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="prixInput">Type de la vehicule</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="prixInput" placeholder="type de la vehicule">
                    @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="discountInput">Prix de la vehicule</label>
                    <input name="price" type="number" class="form-control  @error('price') is-invalid @enderror" id="discountInput" placeholder="prix de la vehicule">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="images[]" multiple class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mr-2">Sauvgarder</button>
                <button class="btn btn-light ha-rest-form" >Cancel</button>
            </form>
        </div>
    </div>


@endsection


@section("script")


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{asset("adminPanel")}}/js/file-upload.js"></script>

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

    <script type="text/javascript" src="{{ asset("adminPanel/vendors/image-uploader") }}/image-uploader.min.js"></script>

    <script>
        $('.input-images').imageUploader();
    </script>

    <script>
        $(".ha-rest-form").on("click",function (e) {
            e.preventDefault();
            $("[name='name']").val("");
            $("[name='description']").val("");
            $("[name='price']").val("");
            $("[name='discount']").val("");
            $("[name='stock']").val("");
        })
    </script>



@endsection
