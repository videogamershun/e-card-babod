@php

    $discountDB = DB::table('discount')->get();

@endphp


@extends('layouts.app')

@section('content')
    @if (session('status'))
        <script>
            swal("Siker!", "{{ session('status') }}!", "success");
        </script>
    @endif
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Regisztrált promocíók</h3>
            </div>

            <div class="card-body">
                <table id="regisztralt" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cím</th>
                            <th>URL</th>
                            <th>Kód</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (sizeof($discountDB) == 0)
                        @else
                            @for ($i = 0; $i < sizeof($discountDB); $i++)
                                <tr>
                                    <td>{{$discountDB[$i]->title}}</td>
                                    <td>{{$discountDB[$i]->url}}</td>
                                    <td>{{$discountDB[$i]->code}}</td>
                                    <td>
                                        <div class="col-md-12 text-center">
                                            <a href="/edit_discount/{{$discountDB[$i]->custom_id}}" class="btn btn-primary btn-flat">Szerkesztés</a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cím</th>
                            <th>URL</th>
                            <th>Kód</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <script>
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
