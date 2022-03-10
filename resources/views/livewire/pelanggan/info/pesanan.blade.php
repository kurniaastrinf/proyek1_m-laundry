<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Pesanan
            </div>
            <div class="card-body">
                @foreach ($pesanan as $item)
                    <div class="card mt-2">
                        <div class="card-header">
                            @if ($item->layanan->jenis_layanan->nama_layanan != 'Paket Kilat')
                                {{ $item->layanan->jenis_layanan->nama_layanan }}
                            @endif
                            {{ $item->layanan->nama_layanan }}
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-2">Status</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-9 ml--5">{{ $item->status }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-2">Biaya</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-9 ml--5">Rp. {{ $item->harga }}</div>
                            </div>
                            @if ($item->transaksi)
                                <button class="btn btn-primary text-capitalize mt-2" style="background-color: #007bff"
                                    disabled>Bayar Sekarang</button>
                            @else
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary text-capitalize mt-2" data-toggle="modal"
                                    data-target="#exampleModal"
                                    wire:click.prevent="setCurrentPesanan({{ $item->id }})">
                                    Bayar Sekarang
                                </button>

                                <!-- Modal -->
                                <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form wire:submit.prevent="bayar()">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" wire:model="currentPesanan">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Pilih metode
                                                            transaksi</label>
                                                        <select class="form-control" id="exampleFormControlSelect1"
                                                            wire:model="metode_transaksi">
                                                            <option selected>Metode transaksi</option>
                                                            <option value="saldo m-laundry">Saldo
                                                                M-Lundry</option>
                                                            <option value="transfer">Transfer</option>
                                                        </select>
                                                        @if ($warning_message)
                                                            <small class="text-danger">{{ $warning_message }}</small>
                                                        @endif
                                                        @error('metode_transaksi')
                                                            <small class="text-danger">
                                                                {{ $message }}
                                                            </small>
                                                        @enderror
                                                    </div>
                                                    @if ($metode_transaksi == 'transfer')
                                                        <label>Bukti Transaksi</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile"
                                                                wire:model="bukti_transaksi">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                image</label>
                                                            @error('bukti_transaksi')
                                                                <small class="text-danger">
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary text-capitalize"
                                                        wire:click="bayar()" data-dismiss="modal">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="mt-2">
                    {{ $pesanan->links() }}
                </div>
            </div>
        </div>
    </div>
    @if ($successMsg)
        <script>
            Swal.fire(
                'Good job!',
                @this.successMsg,
                'success'
            )
            @this.successMsg = '';

        </script>
    @endif
</div>
