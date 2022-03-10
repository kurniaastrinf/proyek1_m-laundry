<div>
    <!------------------------------------------
    SLIDER
    ------------------------------------------->
    <section class="slider-section pt-4 pb-4">
        <div class="container">
            <div class="slider-inner">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="text-center">Layanan Laundry</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-sm-4">
                                    <img class="card-img-top mt-5"
                                        src="{{ asset('Customer-Page/assets/img/cuci_lipat.png') }}"
                                        alt="Card image cap" />
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">{{ $jenis_layanan[1]->nama_layanan }}</h5>
                                    <p class="card-text" style="height: 5rem">
                                        {{ $jenis_layanan[1]->keterangan }}
                                    </p>
                                    <button wire:click="getJenisLayanan({{ $jenis_layanan[1]->id }})" type="button"
                                        class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-sm-4">
                                    <img class="card-img-top mt-5"
                                        src="{{ asset('Customer-Page/assets/img/cuci_setrika.png') }}"
                                        alt="Card image cap" />
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">{{ $jenis_layanan[0]->nama_layanan }}</h5>
                                    <p class="card-text" style="height: 5rem">
                                        {{ $jenis_layanan[0]->keterangan }}
                                    </p>
                                    <button wire:click="getJenisLayanan({{ $jenis_layanan[0]->id }})" type="button"
                                        class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-sm-4">
                                    <img class="card-img-top mt-5"
                                        src="{{ asset('Customer-Page/assets/img/setrika_saja.png') }}"
                                        alt="Card image cap" />
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">{{ $jenis_layanan[2]->nama_layanan }}</h5>
                                    <p class="card-text" style="height: 5rem">
                                        {{ $jenis_layanan[2]->keterangan }}
                                    </p>
                                    <button wire:click="getJenisLayanan({{ $jenis_layanan[2]->id }})" type="button"
                                        class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row card-body">
                                <div class="col-sm-4">
                                    <img class="card-img-top mt-5"
                                        src="{{ asset('Customer-Page/assets/img/paket_kilat.png') }}"
                                        alt="Card image cap" />
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">{{ $jenis_layanan[3]->nama_layanan }}</h5>
                                    <p class="card-text" style="height: 5rem">
                                        {{ $jenis_layanan[3]->keterangan }}
                                    </p>
                                    <button wire:click="getJenisLayanan({{ $jenis_layanan[3]->id }})" type="button"
                                        class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-info mr-4">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="media-body">
                            <h5>Fast Shipping</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <div class="media-body">
                            <h5>Online Payment</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="media-body">
                            <h5>Free Return</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesan Laundry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if ($currentJenisLayanan)
                    <form wire:submit.prevent="$emit('closeModal')">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-dark text-light">Pemesanan </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <select class="custom-select" wire:model="id_layanan">
                                                    <option selected>Pilih Layanan</option>
                                                    @foreach ($currentJenisLayanan->layanan as $item)
                                                        <option value="{{ $item->id }}"
                                                            wire:click="setCurrentLayanan({{ $item->id }})">
                                                            {{ $item->nama_layanan }}</option>
                                                    @endforeach
                                                </select>
                                                @error('id_layanan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            @if ($currentLayanan)
                                                <div class="form-group">
                                                    <label for="lama_pengerjaan">Lama Pengerjaan</label>
                                                    <input type="text" name="lama_pengerjaan" id="lama_pengenjaan"
                                                        value="{{ $currentLayanan->lama_pengerjaan }} hari"
                                                        class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="biaya_perkilo">Biaya Perkilo</label>
                                                    <input type="text" class="form-control" id="biaya_perkilo"
                                                        value="Rp. {{ $currentLayanan->biaya_perkilo }}" readonly>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label for="berat_orderan">Berat Laundry (Kg)</label>
                                                <input type="number" class="form-control" id="berat_orderan"
                                                    wire:model="berat_orderan">
                                                @error('berat_orderan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header bg-dark text-light">
                                            <button type="button" class="btn btn-sm text-light"
                                                wire:click.prevent="setPenjemputan()">{{ $btn_toogle }}</button>
                                        </div>
                                        @if ($penjemputan)
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Nama Lengkap" wire:model="nama_lengkap">
                                                </div>
                                                <div wire:ignore id="map" style="height: 50vh;"></div>
                                                <script>
                                                    mapboxgl.accessToken =
                                                        'pk.eyJ1IjoibWFyaWFkaGFyaTYiLCJhIjoiY2twaTNhbGJrMGJnZTJvbWhwcTVkZDVtbSJ9.YI3_pqhM3eIThnz0NM1o8A';
                                                    var map = new mapboxgl.Map({
                                                        container: 'map', // container id
                                                        style: 'mapbox://styles/mapbox/streets-v11',
                                                        center: [107.9145643, -
                                                            6.4517064
                                                        ], // starting position
                                                        zoom: 9 // starting zoom
                                                    });
                                                    var geocoder = new MapboxGeocoder({
                                                        accessToken: mapboxgl.accessToken,
                                                        localGeocoder: coordinatesGeocoder,
                                                        zoom: 4,
                                                        placeholder: 'Cari Lokasi',
                                                        mapboxgl: mapboxgl

                                                    });
                                                    var coordinatesGeocoder = function(query) {
                                                        // Match anything which looks like
                                                        // decimal degrees coordinate pair.
                                                        var matches = query.match(
                                                            /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
                                                        );
                                                        if (!matches) {
                                                            return null;
                                                        }

                                                        function coordinateFeature(lng, lat) {
                                                            return {
                                                                center: [lng, lat],
                                                                geometry: {
                                                                    type: 'Point',
                                                                    coordinates: [lng, lat]
                                                                },
                                                                place_name: 'Lat: ' + lat + ' Lng: ' + lng,
                                                                place_type: ['coordinate'],
                                                                properties: {},
                                                                type: 'Feature'
                                                            };
                                                        }

                                                        var coord1 = Number(matches[1]);
                                                        var coord2 = Number(matches[2]);

                                                        var geocodes = [];

                                                        if (coord1 < -90 || coord1 > 90) {
                                                            // must be lng, lat
                                                            geocodes.push(coordinateFeature(coord1, coord2));
                                                        }

                                                        if (coord2 < -90 || coord2 > 90) {
                                                            // must be lat, lng
                                                            geocodes.push(coordinateFeature(coord2, coord1));
                                                        }

                                                        if (geocodes.length === 0) {
                                                            // else could be either lng, lat or lat, lng
                                                            geocodes.push(coordinateFeature(coord1, coord2));
                                                            geocodes.push(coordinateFeature(coord2, coord1));
                                                        }

                                                        return geocodes;
                                                    };


                                                    map.on('click', (e) => {
                                                        @this.long = e.lngLat.lng
                                                        @this.lat = e.lngLat.lat
                                                    })

                                                    // Add the control to the map.
                                                    map.addControl(
                                                        geocoder
                                                    );
                                                    // Add zoom and rotation controls to the map.
                                                    geocoder.on('result', function(e) {
                                                        @this.alamat = e.result['place_name_en-US'];
                                                    })
                                                    console.log(map);

                                                </script>
                                                <div class="form-group mt-2">
                                                    <input type="text" class="form-control" wire:model="alamat"
                                                        placeholder="Alamat" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal</label>
                                                    <input type="date" class="form-control" id="tanggal"
                                                        wire:model="tanggal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jam">Jam</label>
                                                    <input type="time" class="form-control" id="jam" min="09:00"
                                                        max="18:00" wire:model="jam">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button wire:click.prevent="pesanLaundry({{ $id_layanan }})" data-dismiss="modal"
                                type="button" class="btn btn-dark close-modal">Pesan</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @if ($success)
        <script>
            Swal.fire(
                'Good job!',
                @this.success,
                'success'
            )
            @this.success = '';
        </script>
    @endif
</div>
