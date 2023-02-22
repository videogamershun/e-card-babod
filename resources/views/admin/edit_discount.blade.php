@php
    $routeID = Request::route('id');
    $discountDB = DB::table('discount')
        ->where('custom_id', $routeID)
        ->get();
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body pb-0 ">


            @if (sizeof($discountDB) == 0)
                <div class="d-flex align-items-stretch flex-column">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Felhasználó - szerkesztése {{ sizeof($peopleRegistered) }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="text-center align-middle ">
                                    <h3>Nincs egyetlen adat amit tudnál modosítani!</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            @else
                @foreach ($discountDB as $discount)
                    <div class="d-flex align-items-stretch flex-column">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ $discount->title }} - szerkesztése</h3>
                            </div>
                            <form action="{{ url('editDiscount') }}" method="post">
                                @csrf
                                {{ Form::hidden('customId', $routeID) }}

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Cím</label>
                                        <input class="form-control" type="text" placeholder="{{ $discount->title }}"
                                            name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>URL</label>
                                        <input class="form-control" type="text" placeholder="{{ $discount->url }}"
                                            name="url" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kód</label>
                                        <input class="form-control" type="text" placeholder="{{ $discount->code }}"
                                            name="code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic-url" class="form-label">Kedvezmény megnevezése, leírás</label>
                                        <textarea id="summernote" name="text">{!! $discount->text !!}</textarea>
                                    </div>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a class="btn btn-primary" href="/discount_settings">Vissza</a>

                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-success" type="submit">Szerkesztés</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

@endsection
