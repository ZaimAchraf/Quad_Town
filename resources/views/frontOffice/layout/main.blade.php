<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->


    @include('frontOffice.layout.includes.links.styleLinks')
    @yield('styles')

    <style>
        ::-moz-selection { /* Code for Firefox */
            color: whitesmoke;
            background: #F77D0A;
        }

        ::selection {
            color: whitesmoke;
            background: #F77D0A;
        }

        .whatsapp {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 10000;
        }
    </style>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>


<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body pr-3" href="https://wa.me/212655869149"><i class="fa fa-phone-alt mr-2"></i>+212 6-55869149</a>
                <span class="text-body">|</span>
                <a class="text-body px-3" href="mailto:quadtown22@gmail.com"><i class="fa fa-envelope mr-2"></i>quadtown22@gmail.com</a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-body px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-body pl-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<div class="ha-app">
    {{--        <div class="show-contact-form"><i class="far fa-paper-plane"></i><br><span>Contact Us</span></div>--}}
{{--    <div class="alert alert-success message-sent text-center">Votre message a ete envoye avec succes</div>--}}
    @include('frontOffice.layout.includes.header')

    @yield('content')


    @include('frontOffice.layout.includes.footer')

    <div class="whatsapp">
        <a href="https://wa.me/212655869149" target="_blank">
            <img src="{{asset("assets")}}/images/whatsapp.png" alt="" width="70px" />
        </a>
    </div>


</div>


<!-- Your SDK code -->



@include('frontOffice.layout.includes.links.scriptLinks')
<script>
    $(".news-subscribe").on("click",function (e) {
        e.preventDefault();

        let data = $("form.newsletter-form").serialize();

        $.ajax("/newsletter",{
            type: "post",
            data: data,
            success: function (data) {
                if(data === "ok"){
                    Swal.fire(
                        'Inscrit!',
                        'Votre catégorie a été supprimée.',
                        'success'
                    )
                }else if(data === "required"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "le champs email est obligatoire pour s'inscrire!",
                    })
                }else if(data === "exists"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "cet utilisateur est deja inscrit!",
                    })
                }
            },
        });

    })
</script>
@stack('scripts')
</body>
</html>
