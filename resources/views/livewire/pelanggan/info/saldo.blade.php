<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Saldo M-Laundry
            </div>
            <div class="card-body">
                <div class="card card-body">
                    <h5>Saldo Anda = Rp. {{ $saldo }}</h5>
                    <p class="card-text">Untuk melakukan topup lakukan transfer ke rekiening 123xxxxxxxx kemudian
                        lakukan konfirmasi</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary text-capitalize" data-toggle="modal"
                        data-target="#exampleModal">
                        Konfirmasi Topup
                    </button>

                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Topup</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">No rekening</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    wire:model="no_rek" placeholder="No rekening">
                                                @error('no_rek')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Jumlah transfer</label>
                                                <input type="number" class="form-control" id="inputPassword4"
                                                    placeholder="Jumlah transfer" wire:model="jml_transfer">
                                                @error('jml_transfer')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tgl_transfer">Tanggal transfer</label>
                                                <input type="date" class="form-control" id="tgl_transfer"
                                                    wire:model="tgl_transfer">
                                                @error('tgl_transfer')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="jam_transfer">Jam transfer</label>
                                                <input type="time" class="form-control" id="jam_tansfer"
                                                    wire:model="jam_transfer">
                                                @error('jam_transfer')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="validatedCustomFile" wire:model="bukti_transfer">
                                                    <label class="custom-file-label" for="validatedCustomFile">Bukti
                                                        transfer</label>
                                                    <div class="invalid-feedback">Example invalid custom file
                                                        feedback</div>
                                                </div>
                                                @error('bukti_transfer')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary text-capitalize"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" wire:click="uploadKonfirmasi()"
                                            class="btn btn-primary text-capitalize"
                                            data-dismiss="modal">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            @this.successMsg = "";

        </script>
    @endif
</div>
