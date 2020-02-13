<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat Data Dosen
    $dosen = Dosen::create(array(
    'nipd' => '210903',
    'nama' => 'Hilmi'
    ));
    $this->command->info('Data Dosen Telah Di Isi');

    // Membuat Data Mahasiswa
    $hilmi = Mahasiswa::create(array(
    'nama' => 'Satriaji',
    'nim'  => '0123090',
    'id_dosen' => $dosen->id
    ));

    $hirumi = Mahasiswa::create(array(
    'nama' => 'Sanisa',
    'nim'  => '0123091',
    'id_dosen' => $dosen->id
    ));

    $rangga = Mahasiswa::create(array(
    'nama' => 'Satia',
    'nim'  => '0123092',
    'id_dosen' => $dosen->id
    ));
    $this->command->info('Data Mahasiswa Berhasil Di Isi');

    // Membuat Data Wali
    $dadang = Wali::create(array(
    'nama' => 'Dadang Pelop',
    'id_mahasiswa' => $hilmi->id
    ));

    $dudung = Wali::create(array(
    'nama' => 'Dudung Pelup',
    'id_mahasiswa' => $hirumi->id
    ));

    $dedeng = Wali::create(array(
    'nama' => 'Dedeng Pelep',
    'id_mahasiswa' => $rangga->id
    ));
    $this->command->info('Data Wali Berhasil Di Isi');

    // Membuat Data Hobi
    $melukis_monalisa = Hobi::create(array('hobi' => 'Melukis Monalisa'));
    $mandi_es = Hobi::create(array('hobi' => 'Mandi Es'));
    $ambyar = Hobi::create(array('hobi' => 'Gak Punya Pacar'));

    $hirumi->hobi()->attach($melukis_monalisa->id);
    $hilmi->hobi()->attach($ambyar->id);
    $hilmi->hobi()->attach($mandi_es->id);
    $rangga->hobi()->attach($ambyar->id);
    $this->command->info('Data Hobi Berhasil Di Isi');
    }
}
