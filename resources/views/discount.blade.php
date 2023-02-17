@php

    $getAllDiscount = DB::table('discount')->get();

@endphp


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5 m-auto">
            @if (sizeof($getAllDiscount) == 0)
                <h1>Nincs egysem</h1>
            @else
                @foreach ($getAllDiscount as $discount)
                    <div class="col-md-6 col-lg-4 pb-3">
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img" style="background-image: url({{ asset('img/bg2.jpg') }});"></div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/gumis.png') }}" alt="Avatar" />
                            </div>
                            <div class="card-body" style="overflow-y: auto">
                                <h4 class="card-title">{{ $discount->title}}</h4>
                                <p class="card-text">{!! $discount->text !!}</p>
                            </div>
                            <div class="card-footer" style="background: inherit; border-color: inherit;">
                                <a href="#" class="btn btn-primary">Tovább</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
