@extends('layout.mainlayout')



@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2> <a href="" class="text-white">Laundry <b>Management</b> </a></h2>
                        </div>

                    </div>
                </div>


                <div class="row">

                    <div class="col-6 mx-auto">
                        <h2> <b>Login </b>
                        </h2>
                        <table class="table table-striped table-hover" id="example">
                            <form method="POST" action="{{ route('auth') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="username" class="form-control" id="username" name="username"
                                        aria-describedby="username">

                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>

                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="layananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('layanan.create') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="nama">Nama Layanan</label>
                                    <input type="text" class="form-control" id="nama_layanan" name="nama_layanan"
                                        placeholder="nama layanan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Layanan</label>
                                <input type="text" class="form-control" id="harga_layanan" name="harga_layanan"
                                    placeholder="harga">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
