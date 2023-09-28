<?php

namespace Database\Seeders;

use App\Models\InformasiUmum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi_umum')->truncate();
        $data = [
            [
                'id' => '1',
                'deskripsi' => 'Wadah perantau Wonosobo yang tersebar di luar kota, luar pulau dan luar negeri, sebagai wadah pemersatu untuk saling berinteraksi, saling asah, asih, asuh dan saling melindungi yang terlembagakan dengan tujuan untuk memperkuat persatuan dan berperan secara kolaboratif dalam membangun Wonosobo.',
                'misi' => '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Mempersatukan perantau dalam satu wadah yang sah secara hukum</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membangun database perantau wonosobo</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membangun sinergitas antar perantau Wonosobo</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Mendukung tumbuh kembang kreativitas dan daya saing warga rantau</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membangun kebersamaan perantau di semua kota untuk saling peduli, asah, asih , asuh dan saling melindungi</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membuat konsep kerjasama dan pemberdayaan antar perantau</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membantu Warga Kabupaten Wonosobo untuk memenuhi standar hidup sehat dan layak</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membangun jejaring antar perantau</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Membuat media interaktif komunikatif untuk saling menginformasikan berbagai hal tentang wonosobo dan warga rantau</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Memperkuat kemitraan dengan pemkab wonosobo melaui donasi dan pemberdayaan</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Pengentasan kemiskinan</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Bangga bela beli produk wonosobo</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• Pro investasi</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-family: Poppins, sans-serif; color: rgb(103, 103, 103); transition: all 500ms ease 0s;">• SDGs dengan goal pilihan</p>',
                'visi' => 'Terwujudnya wonosobo yang maju , sejahtera dan memiliki daya saing tinggi melalui peran diaspora',
                'telepon' => '05213605366 / 085226699313',
                'alamat' => 'Jl. Dieng Km.03 No. 79B Kalianget',
                'email' => 'diasporawonosobo@gmail.com'
            ],
        ];

        foreach ($data as $datum) {
            InformasiUmum::create($datum);
        }
    }
}