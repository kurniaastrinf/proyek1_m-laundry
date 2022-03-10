<?php

namespace Database\Seeders;

use App\Models\JenisLayanan;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::updateOrCreate([
            'id' => 1,
            'id_jenis_layanan' => JenisLayanan::find(1)->id,
            'nama_layanan' => 'Reguler - 3 hari',
            'biaya_perkilo' => 6000,
            'lama_pengerjaan' => 3
        ]);
        Layanan::updateOrCreate([
            'id' => 2,
            'id_jenis_layanan' => JenisLayanan::find(1)->id,
            'nama_layanan' => 'Reguler - 2 hari',
            'biaya_perkilo' => 7000,
            'lama_pengerjaan' => 2
        ]);
        Layanan::updateOrCreate([
            'id' => 3,
            'id_jenis_layanan' => JenisLayanan::find(1)->id,
            'nama_layanan' => 'Bedcover - 3 hari',
            'biaya_perkilo' => 10000,
            'lama_pengerjaan' => 3
        ]);
        Layanan::updateOrCreate([
            'id' => 4,
            'id_jenis_layanan' => JenisLayanan::find(1)->id,
            'nama_layanan' => 'Bedcover - 2 hari',
            'biaya_perkilo' => 13000,
            'lama_pengerjaan' => 2
        ]);
        Layanan::updateOrCreate([
            'id' => 5,
            'id_jenis_layanan' => JenisLayanan::find(2)->id,
            'nama_layanan' => 'Reguler - 3 hari',
            'biaya_perkilo' => 4500,
            'lama_pengerjaan' => 3
        ]);
        Layanan::updateOrCreate([
            'id' => 6,
            'id_jenis_layanan' => JenisLayanan::find(2)->id,
            'nama_layanan' => 'Reguler - 2 hari',
            'biaya_perkilo' => 5000,
            'lama_pengerjaan' => 2
        ]);
        Layanan::updateOrCreate([
            'id' => 7,
            'id_jenis_layanan' => JenisLayanan::find(3)->id,
            'nama_layanan' => 'Reguler - 3 hari',
            'biaya_perkilo' => 4000,
            'lama_pengerjaan' => 3
        ]);
        Layanan::updateOrCreate([
            'id' => 8,
            'id_jenis_layanan' => JenisLayanan::find(3)->id,
            'nama_layanan' => 'Reguler - 2 hari',
            'biaya_perkilo' => 4500,
            'lama_pengerjaan' => 2
        ]);
        Layanan::updateOrCreate([
            'id' => 9,
            'id_jenis_layanan' => JenisLayanan::find(4)->id,
            'nama_layanan' => 'KILAT - Cuci Setrika',
            'biaya_perkilo' => 8000,
            'lama_pengerjaan' => 1
        ]);
        Layanan::updateOrCreate([
            'id' => 10,
            'id_jenis_layanan' => JenisLayanan::find(4)->id,
            'nama_layanan' => 'KILAT - Cuci Lipat',
            'biaya_perkilo' => 5500,
            'lama_pengerjaan' => 1
        ]);
        Layanan::updateOrCreate([
            'id' => 11,
            'id_jenis_layanan' => JenisLayanan::find(4)->id,
            'nama_layanan' => 'KILAT - Setrika Saja',
            'biaya_perkilo' => 5000,
            'lama_pengerjaan' => 1
        ]);
    }
}
