@extends('layout.mainlayout')
@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">

                    @include('layout._partial.menu')

                </div>

                <div class="row mb-3">
                    <div class="col-sm-5">
                        <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#layananModal"><span>Tambah
                                layanan
                            </span></a>
                    </div>
                </div>



                <table class="table table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Layanan</th>

                            <th>Harga Layanan </th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layanan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td> {{ $item->nama_layanan }}</td>
                                <td>{{ $item->harga_layanan }}</td>
                                <td>
                                    <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                            class="material-icons">&#xE8B8;</i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                            class="material-icons">&#xE5C9;</i></a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
