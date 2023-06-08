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
                        <a href="#" class="btn btn-secondary" data-toggle="modal"
                            data-target="#exampleModal"><span>Pelanggan
                                Baru</span></a>
                    </div>

                </div>

                <table class="table table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>

                            <th>Status Bayar</th>

                            <th>Layanan </th>
                            <th>Waktu Pengambilan </th>
                            <th>Status Ambil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                <td> {{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->status_bayar != false ? 'Sudah Bayar' : 'Belum Bayar' }} </td>
                                <td><span class="status text-success"></span> {{ $item->layanan->nama_layanan }}</td>
                                <td>
                                    @if (in_array($item->layanan_id, [3, 6, 9]))
                                        <?php echo $item->created_at->addHours(3) < \Carbon\Carbon::now() ? '<span class="status text-success">&bull;</span>BISA DIAMBIL' : '<span class="status text-danger">&bull;</span>BELUM BISA DI AMBIL'; ?>
                                    @elseif (in_array($item->layanan_id, [2, 8, 5]))
                                        <?php echo $item->created_at->addHours(3) < \Carbon\Carbon::now() ? '<span class="status text-success">&bull;</span>BISA DIAMBIL' : '<span class="status text-danger">&bull;</span>BELUM BISA DI AMBIL'; ?>
                                    @else
                                        <?php echo $item->created_at->addHours(3) < \Carbon\Carbon::now() ? '<span class="status text-success">&bull;</span>BISA DIAMBIL' : '<span class="status text-danger">&bull;</span>BELUM BISA DI AMBIL'; ?>
                                    @endif

                                </td>
                                <td class="d-flex p-2">

                                    @if (!$item->status_ambil)
                                        <form action="{{ route('pelanggan.confirm') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_pelanggan" value="{{ $item->id }}">
                                            <button class="btn btn-sm btn-danger" id="ambil_barang"><i
                                                    class="material-icons">&#xe5cd;</i></button>
                                        </form>
                                    @else
                                        <button class="btn btn-sm btn-success"><i
                                                class="material-icons">&#xe5ca;</i></button>
                                    @endif


                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
