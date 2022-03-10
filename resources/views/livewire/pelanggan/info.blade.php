<div>
    <section class="products-grid pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="widget-title">
                                <h3>
                                    <a href="javascript:;" class="text-lowercase text-dark" style="font-size: 14px;">
                                        <img src="{{ asset('Customer-Page/assets/img/faces/team-4.jpg') }}"
                                            class="rounded-circle" style="width: 25%">
                                        <span>{{ auth()->user()->email }}</span>
                                    </a>
                                </h3>
                            </div>
                            <div class="widget-content widget-categories">
                                <h6> <i class="fa fa-user"></i> <a href="{{ route('pelanggan.info.akun') }}" class="text-danger">Akun Saya</a></li>
                                </h6>
                                <h6> <i class="fas fa-tshirt"></i> <a href="{{ route('pelanggan.info.pesanan') }}" class="text-danger">Laundry Saya</a></li>
                                </h6>
                                <h6> <i class="fas fa-money-check-alt"></i> <a href="{{ route('pelanggan.info.saldo') }}" class="text-danger">Saldo M-Laundry</a></li>
                                </h6>
                                <h6> <i class="fas fa-handshake"></i> <a href="{{ route('pelanggan.info.transaksi') }}" class="text-danger">Transaksi</a></li>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    @livewire($component_)
                </div>
            </div>
        </div>
    </section>
</div>
