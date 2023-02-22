@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="200"
                            src="{{ asset('img/bg1.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="my-0 fw-normal">Promocíó létrehozás</h4>
                            <p class="card-text">Ahhoz hogy új promocíókat tudj létrehozni a közösség számára kattints a tovább gombra.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="new_product" class="btn btn-sm btn-outline-primary">Tovább</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="200"
                        src="{{ asset('img/bg2.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="my-0 fw-normal">Promocíó szerkesztés</h4>

                            <p class="card-text">A meglévő promocíók szerkesztése</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="edit_discount" class="btn btn-sm btn-outline-primary">Tovább</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="200"
                        src="{{ asset('img/bg3.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="my-0 fw-normal">Promocíó törlés</h4>
                            <p class="card-text">Azon promocíók törlése amelyek esetleg már nem revelánsak a felhasználók számára.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="delete" class="btn btn-sm btn-outline-primary">Tovább</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
