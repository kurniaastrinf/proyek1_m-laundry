<?php

namespace Database\Seeders;

use App\Models\JenisLayanan;
use Illuminate\Database\Seeder;

class JenisLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisLayanan::updateOrCreate([
            'id' => 1,
            'nama_layanan' => 'Cuci Setrika',
            'keterangan' => 'Jasa layanan paket reguler mencuci dan menyetrika pakaian dengan satuan kilogram.',
            'paket' => 'Reguler'
        ]);
        JenisLayanan::updateOrCreate([
            'id' => 2,
            'nama_layanan' => 'Cuci Lipat',
            'keterangan' => 'Jasa layanan paket reguler mencuci dan melipat pakaian dengan satuan kilogram.',
            'paket' => 'Reguler',
        ]);
        JenisLayanan::updateOrCreate([
            'id' => 3,
            'nama_layanan' => 'Setrika Saja',
            'keterangan' => 'Jasa layanan paket reguler menyetrika berbagai macam pakaian & kain.',
            'paket' => 'Reguler',
        ]);
        JenisLayanan::updateOrCreate([
            'id' => 4,
            'nama_layanan' => 'Paket Kilat',
            'keterangan' => 'Jasa layanan laundry dengan waktu pengerjaan lebih cepat.',
            'paket' => 'KILAT',
        ]);
    }
}
