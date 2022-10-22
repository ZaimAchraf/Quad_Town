@extends('frontOffice.layout.main')

@section('title','Contact us')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header" style="background: center linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('{{asset("assets")}}/images/bg-banner.jpg'); background-attachment: fixed;">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="post" class="contactForm" action="{{route("send_contact")}}">
                            @csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="full_name" placeholder="Name" required>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Write Your Message..."></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5 submit-contact" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-phone fa-map-marker-alt text-primary flex-shrink-0 mr-3" style="font-size: 26px"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Phone Number</h5>
                                <p>+212 6-55869149</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Branch Office</h5>
                                <p>Kerrandou, Rich, Morocco, 52 400</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Customer Service</h5>
                                <p>quadtown22@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Return & Refund</h5>
                                <p class="m-0">quadtown22@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
@push("scripts")
    <script>

        $(".submit-contact").on("click",function (e) {
            e.preventDefault();

            let data = $("form.contactForm").serialize();
            console.log(data)
            $.ajax("/contact",{
                type: "post",
                data: data,
                success: function (data) {
                    if(data === "ok"){
                        Swal.fire(
                            'Sent!',
                            'your message has been sent.',
                            'success'
                        )
                    }else if(data === "error"){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "there is some errors please check your informations and try again!",
                        })
                    }
                },
            });

        })
    </script>
@endpush
