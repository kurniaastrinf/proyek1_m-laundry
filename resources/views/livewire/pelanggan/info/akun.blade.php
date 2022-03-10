<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Info Akun
            </div>
            <form wire:submit.prevent="updateAkun()">
                <div class="card-body">

                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" id="nama_depan" placeholder="Nama Depan"
                            wire:model="nama_depan">
                        @error('nama_depan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="nama_belakang" placeholder="Nama Belakang"
                            wire:model="nama_belakang">
                        @error('nama_belakang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3"
                            wire:model="alamat"></textarea>
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="No HP" wire:model="no_hp">
                        @error('no_hp')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo</label>
                        <input type="number" class="form-control" id="saldo" placeholder="Saldo" wire:model="saldo"
                            readonly>
                        @error('saldo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" wire:model="avatar">
                            <label class="custom-file-label" for="customFile">Choose image</label>
                        </div>
                        @error('avatar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-outline-warning" wire:click="updateAkun()"><i
                            class="fi-rr-edit"></i> Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
