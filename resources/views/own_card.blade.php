@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5 m-auto ">
            <div class="col-md-6 col-lg-4 pb-3 own_card_custom">
                <div class="card card-custom bg-white border-white border-0">
                    <div class="card-custom-img" style="background-image: url({{ asset('img/bg4.jpg') }});"></div>

                    <div class="card-body" style="overflow-y: auto">
                        <h1 class="card-title center">Babod hűségkártya</h4>
                        <p class="center">{!! QrCode::size(150)->generate('{{"alma"}}') !!}</p>
                    </div>
                    <div class="card-footer" style="background: inherit; border-color: inherit;">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
