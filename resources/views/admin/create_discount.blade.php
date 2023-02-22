@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5 m-auto">
            <div class="col-md-5 col-lg-10 pb-5 center">
                <div class="card card-custom bg-white border-white border-0">
                    <form action="{{ url('insert_discount') }}" method="post">
                        @csrf
                        <div class="card-custom-img" style="background-image: url({{ asset('img/bg1.jpg') }});"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{ asset('img/bardi.png') }}" alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Cím</label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="title">
                                <div class="form-text">Example help text goes outside the input group.</div>
                            </div>
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Kedvezmény megnevezése, leírás</label>
                                <textarea id="summernote" name="text"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Elérhető cím</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3">https://</span>

                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" name="url">
                                </div>
                                <div class="form-text">Example help text goes outside the input group.</div>
                            </div>
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Kód</label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    name="code">
                                <div class="form-text">Example help text goes outside the input group.</div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <a class="btn btn-primary" href="/discount_settings">Vissza</a>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit">Létrehozás</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(function() {
            $("#regisztralt").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/hu.json',
                },

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
