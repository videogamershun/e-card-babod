@php
    $routeID = Request::route('id');
    $discount = DB::table('discount')
        ->where('custom_id', $routeID)
        ->get();
    $textStripped = strip_tags($discount[0]->text);

@endphp

@extends('layouts.app')

@section('content')
    @if (session('status'))
        <script>
            swal("Siker!", "{{ session('status') }}!", "success");
        </script>
    @endif
    <br />

    <div class="container">
        <div class="card-body pb-0 ">
            <div class="d-flex align-items-stretch flex-column">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{$discount[0]->title}} - törlése</h3>
                    </div>
                    <form action="{{ url('deleteDiscount') }}" method="post">
                        @csrf
                        {{ Form::hidden('customId', $routeID) }}

                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Cím</label>
                                    <input class="form-control" type="text" value="{{ $discount[0]->title }}" name="title"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input class="form-control" type="text" value="{{ $discount[0]->url }}" name="url"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>Kód</label>
                                    <input class="form-control" type="text" value="{{ $discount[0]->code }}" name="code"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="basic-url" class="form-label">Kedvezmény megnevezése, leírás</label>
                                    <input class="form-control" type="text" value="{{$textStripped}}" name="code"
                                        readonly>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a class="btn btn-primary" href="/discount_settings">Vissza</a>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="submit">TÖRLÉS</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
