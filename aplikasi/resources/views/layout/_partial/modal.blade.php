@auth
    <!-- pelanggan modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('pelanggan.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                                    placeholder="nama Pelanggan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Whatsapp</label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp"
                                placeholder="NO Whatsapp">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="berat_cucian">Berat Cucian</label>
                                <input type="text" class="form-control" id="berat_cucian" name="berat_cucian">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="layanan_id">Layanan</label>
                                <select id="layanan_id" name="layanan_id" class="form-control">
                                    <option value="">Pilih Layanan...</option>
                                    @foreach ($layanan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_layanan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <h4>Total Bayar</h4>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Rp.
                                <h3 id="total_bayar"></h3>
                                </p>
                                <input type="hidden" name="total_bayar">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-secondary" name="bayar" value="Bayar Nanti" />
                        <input type="submit" class="btn btn-secondary" name="bayar" value="BAYAR SEKARANG" />
                        {{-- <button type="submit" class="btn btn-primary">Bayar Sekrang</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal layananModal -->
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
                            <input type="number" class="form-control" id="harga_layanan" name="harga_layanan"
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

@endauth
